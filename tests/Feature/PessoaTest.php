<?php

//test('example', function () {
//    $response = $this->get('/');
//
//    $response->assertStatus(200);
//});

use Illuminate\Foundation\Testing\RefreshDatabase;
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

//it("can add a user", function() {
//    $user = User::factory()->create();
//    $this->actingAs($user);
//    $response = $this->post(route('admin.pessoas.create'), [
//        'nome' => 'Teste',
//        'email' => 'teste@email.com',
//        'password' => \Illuminate\Support\Facades\Hash::make('12345678')
//        ]);
//
//    $response->assertStatus(200);
//    expect(Pessoa::count())->toBe(1);
//});
