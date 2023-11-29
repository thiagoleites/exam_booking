<?php

//test('example', function () {
//    $response = $this->get('/');
//
//    $response->assertStatus(200);
//});

use App\Models\{Pessoa, User};

it('should be return route for pessoas', function () {
    $response = $this->get('/admin/pessoas');

    $response->assertStatus(200);
});

it('should be return list of pessoas', function () {
    Pessoa::factory()->count(10)->create();
    $response = $this->get(route('admin.pessoas'));
    $response->assertStatus(200);
});
