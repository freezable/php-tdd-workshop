<?php

declare(strict_types=1);

namespace KataTests;

use Kata\ChangeMe;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{
    static public function invalidPassordDataProvider(): array
    {
        return [
            'empty string' => ['pass' => '',  'expected' => false],
            '8 chars' => ['pass' => '01234567',  'expected' => false],
            '<8 chars' => ['pass' => '0123456',  'expected' => false],
            'without UpperCase | without underscore' => ['pass' => '012345678i',  'expected' => false],
            'without Lowercase | without underscore' => ['pass' => '012345678I',  'expected' => false],         
            'no number | without underscore' => ['pass' => 'aBcdefGhi',  'expected' => false],
            ];
    }


    static public function validPassordDataProvider(): array
    {
        return [
            '8+ chars | with UpperCase | with LowerCase | with number | with underscore' => ['pass' => '01234_567Ii',  'expected' => true],
        ];
    }


    /** 
     *  @dataProvider validPassordDataProvider()
     *  @dataProvider invalidPassordDataProvider()
     */
    public function test_change_me(string $pass, bool $expected): void
    {
        $changeMe = new ChangeMe();

        self::assertSame($expected, $changeMe->isPassValid($pass));
    }




}
