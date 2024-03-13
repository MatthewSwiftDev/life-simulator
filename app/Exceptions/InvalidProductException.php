<?php

namespace App\Exceptions;

use Exception;

class InvalidProductException extends Exception
{
    public static function invalidProductType(): InvalidProductException
    {
        return new self("Incorrect product type");
    }
}
