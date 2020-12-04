<?php

namespace App\Promotions;

interface PromotionInterface
{
    public function isWinner(Entrant $entrant);

    public function setWinner(Entrant $entrant);

    public function setUnsuccessful(Entrant $entrant);
}
