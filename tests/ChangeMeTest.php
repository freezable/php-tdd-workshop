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
            'without UpperCase' => ['pass' => '012345678i',  'expected' => false],
        ];
    }


    static public function validPassordDataProvider(): array
    {
        return [
            '8+ chars | with UpperCase' => ['pass' => '01234567I',  'expected' => true],
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
