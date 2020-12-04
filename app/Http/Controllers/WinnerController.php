<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\PromotionFactory;
use App\Models\Entrant;

class WinnerController extends Controller
{
    private $promotionFactory;

    public function __construct(PromotionFactory $promotionFactory)
    {
        $this->promotionFactory = $promotionFactory;
    }

    public function checkWinner(Request $request, string $slug)
    {
        $this->validate($request, ['email' => 'required|email|exists:entrants,email']);
        
        $entrant = Entrant::whereEmail($request->get('email'))->first();
        
        $promo = $this->promotionFactory->create($slug);
        $winner = $promo->isWinner($entrant);

        if ($winner) {
            $promo->setWinner($entrant);
            return response()->json(['message' => 'Winner']);
        }

        $promo->setUnsuccessful($entrant);
        return response()->json(['message' => 'Unsuccessful']);
    }
}
