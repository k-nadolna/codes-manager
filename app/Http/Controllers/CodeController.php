<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Services\CodeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodeController extends Controller
{
    protected $codeService;

    public function __construct(CodeService $codeService)
    {
        $this->codeService = $codeService;
    }

    function index(){
        $codes = Code::where('user_id', Auth::id())
                    ->with('user')
                    ->paginate(10);

        return view('index', compact('codes'));
    }

    function create(){
        return view('create');
    }

    function store(Request $request){
         $validated = $request->validate([
            'quantity' => 'required|integer|min:1|max:10',
        ]);

        $generated = $this->codeService->generateMultipleCodes($validated['quantity']);

        return back()->with('success', 'Kody zostały pomyślnie wygenerowane');
    }

    function delete(){
        return view('delete');
    }

    function destroy(Request $request){
        $request->validate([
            'codes_to_delete' => 'required|string',
        ]);

        // separating codes after commas and/or enters
        $input = $request->input('codes_to_delete');
        $codesArray = preg_split('/[\s,]+/', $input);
        $codesArray = array_filter(array_map('trim', $codesArray));

        // checking which codes exist in the database
        $existingCodes = Code::whereIn('code', $codesArray)
                     ->where('user_id', Auth::id())
                     ->pluck('code')
                     ->toArray();

        // checking for missing codes
        $missingCodes = array_diff($codesArray, $existingCodes);

        if (!empty($missingCodes)){
            return back()->with('warning', 'Nie znaleziono następujących kodów w bazie danych: ' . implode(', ', $missingCodes));
        }

        Code::whereIn('code', $existingCodes)->delete();

        return back()->with('success', 'Wybrane kody zostały pomyślnie usunięte');
    }
}
