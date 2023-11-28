<?php

use App\Models\User;

use function Pest\Laravel\actingAs;

it('returns a successful response', function () {
    $response = $this->get('/admin');

    $response->assertStatus(200);
});

it('should be return a login screen', function () {
    $response = $this->get('/admin/login');

    $response->assertStatus(404);
});

it('should be login success', function () {
    $user = User::factory()->create();

    actingAs($user);

    $response = $this->post(route('admin.login.do'), [
        'email'    => $user->email,
        'password' => 'password',
    ]);

    $response->assertStatus(200);
});

it('should be return view login', function () {
    $response = $this->get(route('admin.login'));
    $response->assertViewIs('admin.login');

});

it('should be return view dashboard', function () {
    $response = $this->get(route('admin.dashboard'));
    $response->assertViewIs('admin.dashboard');

});
