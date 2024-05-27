<?php

declare(strict_types=1);

namespace Kata;

class  RockPaperScissors {
    public const ROCK = 'ROCK';
    public const PAPER = 'PAPER';
    public const SCICCORS = 'SCICCORS';

    public function play (string $playerOneOption, string $payerTwoOption): string {
        if($playerOneOption === self::SCICCORS && $payerTwoOption === self::ROCK){
            return 'player2 wins';
        }

        if($playerOneOption === self::ROCK && $payerTwoOption === self::PAPER){
            return 'player2 wins';
        }

        if($playerOneOption === self::PAPER && $payerTwoOption === self::SCICCORS){
            return 'player2 wins';
        }

        if($playerOneOption === $payerTwoOption){
            return 'both have same';
        }

        return 'player1 wins';
    }
}