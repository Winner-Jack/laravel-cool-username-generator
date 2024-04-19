<?php

use WinnerJack\UsernameGenerator\Facades\UsernameGenerator;

it('can generate username', function () {
    $username = UsernameGenerator::generate();

    expect($username)->toBeString()->toMatch('/\w+-\w+/');
});
