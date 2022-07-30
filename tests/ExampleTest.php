<?php

use AlazziAz\ar-laravel\Facades\ar-laravel;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can adujest arabic string', function () {
    $text = ar-laravel::adjustContent('السلام عليكم');
    expect(ar-laravel::isArabic($text))->toBeTrue();

});
