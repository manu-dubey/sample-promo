<?php

namespace App\Factories;

use App\Promotions\WinningMoment;
use App\Promotions\Chance;

class PromotionFactory
{
    public function create(string $promotionKey)
    {
        switch ($promotionKey) {
            case 'winning-moment':
                return new WinningMoment();
            case 'chance':
                return new Chance();
            default:
                throw new \Exception('Promotion not defined');
        }
    }
}
