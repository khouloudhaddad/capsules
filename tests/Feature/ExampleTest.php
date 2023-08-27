<?php

namespace Tests\Feature;
use function Pest\Laravel\get;

it('has a new welcome page', function(){

    get('/')->assertOk();

});