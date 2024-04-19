<?php

namespace WinnerJack\UsernameGenerator;

use Illuminate\Support\Arr;

class UsernameGenerator
{
    /**
     * Generate a username.
     *
     * @return string
     */
    public function generate(): string
    {
        $adjectives = config('cool-username-generator.adjectives');
        $nouns = config('cool-username-generator.nouns');
        $adjective = Arr::random($adjectives);
        $noun = Arr::random($nouns);

        $username = trim("$adjective-$noun");

        return preg_replace('/\s+/', '-', $username);
    }
}
