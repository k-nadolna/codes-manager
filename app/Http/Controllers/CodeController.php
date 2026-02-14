<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    function index(){
        $codes = Code::paginate(10);

        return view('index', compact('codes'));
    }

    function create(){
        return view('create');
    }

    function store(Request $request){
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1|max:10',
        ]);

        $quantity = $validated['quantity'];
        $generated = [];

        // generating numbers
        while(count($generated) < $quantity){
            $code = (string) random_int(1000000000, 9999999999);

            if(in_array($code, $generated) || Code::where('code', $code)->exists()
            ){
                continue;
            }

            Code::create([
                'code' => $code,
            ]);

            $generated[] = $code;
        }

        return back()->with('success', 'Kody zostały pomyślnie wygenerowane');
    }

    function delete(){
    return view('delete');
    }
}
