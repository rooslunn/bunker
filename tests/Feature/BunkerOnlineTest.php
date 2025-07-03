<?php

it('is online', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
