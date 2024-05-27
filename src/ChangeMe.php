<?php

declare(strict_types=1);

namespace Kata;

final class ChangeMe
{
    public function isPassValid(string $pass): bool
    {
        if(strlen($pass) <= 8){
            return false;
        }

        if (strtolower($pass) === $pass){
            return false;
        }

        return true;
    }
}
