<?php

use AlazziAz\ArLaravel\Facades\ArLaravel;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can adujest arabic string', function () {
    $text = ArLaravel::adjustContent('السلام عليكم');
    expect(ArLaravel::isArabic($text))->toBeTrue();
});
