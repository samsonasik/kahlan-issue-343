<?php

namespace App\Spec;

use const Option;

describe('Get Option constant', function () {

    it('Get Option constant', function () {

        $expected = 'Option';

        $actual = Option;
        expect($actual)->toBe($expected);

    });

});
