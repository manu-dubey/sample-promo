<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class EntrantController extends Controller
{
    public function store(Request $request, string $slug)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email|unique:entrants,email',
                'promo' => 'required|exists:promotions,key_name',
            ]
        );
        $promo = Promotion::findByKeyName($request->get('promo'));
        $promo->entrants()->create(['name' => $request->get('name'), 'email' => $request->get('email')]);
        return response()->json(['message' => 'Entered into promotion']);
    }
}
