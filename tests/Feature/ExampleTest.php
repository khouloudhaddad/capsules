<?php

namespace Tests\Feature;

it('has a new welcome page', function(){

    $this->get('/')->assertOk();

});