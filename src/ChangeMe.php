<?php

declare(strict_types=1);

namespace Kata;

final class ChangeMe
{
    public function isPassValid(string $pass): bool
    {
        if(!$this->isLongEnough($pass)){
            return false;
        }

        if(!$this->containsLowerCase($pass)){
            return false;
        }

        if(!$this->containsUpperCase($pass)){
            return false;
        }

        if(!$this->containsNumber($pass)){
            return false;
        }

        if(!$this->containsUnderscore($pass)){
            return false;
        }

        return true;
    }

    protected function isLongEnough(string $pass) : bool 
    {
        return strlen($pass) > 8;
    }

    protected function containsUpperCase(string $pass) : bool 
    {
        return strtolower($pass) !== $pass;
    }

    protected function containsLowerCase(string $pass): bool 
    {
        return strtoupper($pass) !== $pass;
    }

    protected function containsNumber(string $pass)
    {
        return $this->checkChars($pass, 48, 57);
    }

    protected function containsUnderscore(string $pass)
    {
        return $this->checkChars($pass, 95, 95);
    }

    protected function checkChars(string $pass, int $min, int $max): bool
    {
        foreach(str_split($pass) as $char){
            $dec = ord($char);
            if($dec >= $min && $dec <= $max){
                return true;
            }
        }

        return false;
    }
}
