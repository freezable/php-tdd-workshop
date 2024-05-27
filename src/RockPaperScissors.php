<?php

declare(strict_types=1);

namespace Kata;

class  RockPaperScissors {
    public const ROCK = 'ROCK';
    public const PAPER = 'PAPER';
    public const SCICCORS = 'SCICCORS';

    public function play (string $playerOneOption, string $payerTwoOption): string {
        if($payerTwoOption === self::ROCK){
            return 'player2 wins';
        }


        return 'player1 wins';
    }
}