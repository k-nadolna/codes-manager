<?php

namespace App\Services;

use App\Models\Code;
use Illuminate\Support\Facades\Auth;

class CodeService
{
    public function generateUniqueCode(): string
    {
        do {
            $code = str_pad((string) random_int(0, 9999999999), 10, '0', STR_PAD_LEFT);
        } while (Code::where('code', $code)
                     ->where('user_id', Auth::id()) 
                     ->exists());

        return $code;
    }

    public function generateMultipleCodes(int $quantity): array
    {
        $generated = [];

        while (count($generated) < $quantity) {
            $code = $this->generateUniqueCode();

            if (in_array($code, $generated)) {
            continue;
            }

            $created = Code::create([
                'code' => $code,
                'user_id' => Auth::id(),
            ]);

            $generated[] = $created->code;
        }

        return $generated;
    }
}