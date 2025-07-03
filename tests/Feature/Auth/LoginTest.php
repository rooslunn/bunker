<?php

use App\Models\User;

test('login screen can be rendered', function () {
    $response = $this->get(route('login'));

    $response->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('login'));

    $response->assertRedirect(route('jobs.index'));

    $this->assertAuthenticated();
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $response = $this->from(route('login'))->post(route('login'), [
        'email' => $user->email,
        'password' => 'hacker',
    ]);

    $response->assertRedirect(route('login'));
    $response->assertSessionHasErrors('email');

    $this->assertTrue(session()->hasOldInput('email'));
    $this->assertFalse(session()->hasOldInput('password'));

    $this->assertGuest();
});

test('users can logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->delete(route('logout'));

    $response->assertRedirect(route('jobs.index'));

    $this->assertGuest();
});
