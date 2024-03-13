<?php

namespace App\Exceptions;

use Exception;

class InvalidAnimalException extends Exception
{
    public static function invalidAnimalType(): InvalidAnimalException
    {
        return new self("Incorrect animal type");
    }
}
