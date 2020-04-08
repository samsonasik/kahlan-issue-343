<?php

namespace App\Spec;

use App\Baz;
use const Option;

describe('Baz', function () {

    describe('test get constant', function () {

        it('get', function () {
            $expected = 'Option';

            $actual = Option;
            expect($actual)->toBe($expected);
        });

    });
});
