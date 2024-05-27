<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissors;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsTest extends TestCase
{
    public function testRockBeatsScissors(): void
    {
        $game = new RockPaperScissors();
        $winner = $game->play(RockPaperScissors::ROCK, RockPaperScissors::SCICCORS);

        self::assertSame($winner, 'player1 wins');
    }

    public function testScissorsLoseRock(): void
    {
        $game = new RockPaperScissors();
        $winner = $game->play(RockPaperScissors::SCICCORS, RockPaperScissors::ROCK);

        self::assertSame($winner, 'player2 wins');
    }

    

}