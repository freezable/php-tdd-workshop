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

    public function testPaperBestsRock(): void
    {
        $game = new RockPaperScissors();
        $winner = $game->play(RockPaperScissors::PAPER, RockPaperScissors::ROCK);

        self::assertSame($winner, 'player1 wins');
    }

    public function testRockLosePaper(): void
    {
        $game = new RockPaperScissors();
        $winner = $game->play(RockPaperScissors::ROCK, RockPaperScissors::PAPER);

        self::assertSame($winner, 'player2 wins');
    }

    public function testScissorBeatsPaper(): void
    {
        $game = new RockPaperScissors();
        $winner = $game->play(RockPaperScissors::SCICCORS, RockPaperScissors::PAPER);

        self::assertSame($winner, 'player1 wins');
    }

    public function testPaperLoseScissor(): void
    {
        $game = new RockPaperScissors();
        $winner = $game->play(RockPaperScissors::PAPER, RockPaperScissors::SCICCORS);

        self::assertSame($winner, 'player2 wins');
    }

    public function testPaperAndPaper(): void
    {
        $game = new RockPaperScissors();
        $winner = $game->play(RockPaperScissors::PAPER, RockPaperScissors::PAPER);

        self::assertSame($winner, 'both have same');
    }

    public function testScissorAndScissor(): void
    {
        $game = new RockPaperScissors();
        $winner = $game->play(RockPaperScissors::SCICCORS, RockPaperScissors::SCICCORS);

        self::assertSame($winner, 'both have same');
    }

}