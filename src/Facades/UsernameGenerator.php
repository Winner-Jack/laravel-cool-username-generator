<?php

namespace WinnerJack\UsernameGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WinnerJack\UsernameGenerator\UsernameGenerator
 */
class UsernameGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \WinnerJack\UsernameGenerator\UsernameGenerator::class;
    }
}
