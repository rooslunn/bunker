<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('is online', function () {
    $this->seed();
    $response = $this->get('/');
    $response->assertStatus(200);
});
