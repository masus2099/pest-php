<?php

it('should returns string', function () {
    $example = new Example;
    $reponse = $example->say();

    expect($response)->toBeString();
    expect($response)->toBeNotEmpy();
} )