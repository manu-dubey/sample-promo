<?php

namespace App\Promotions;

use App\Models\Entrant;

class WinningMoment implements PromotionInterface
{
    public function isWinner(Entrant $entrant)
    {
        //Logic for picking winner goes here.
    }

    public function setWinner(Entrant $entrant)
    {
        //Logic for responding to winners eg send email, update as winner etc.
    }

    public function setUnsuccessful(Entrant $entrant)
    {
        //Logic for responding to unsuccessful applicants
    }
}
