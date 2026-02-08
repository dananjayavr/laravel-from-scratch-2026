<?php

use App\Models\User;

test('the application can register a user', function () {
    // When I visit the registration page
    visit('/register')
    // And I fill out and submit the form
        ->fill('name','Jane Doe')
        ->fill('email','jane@example.com')
        ->fill('password','password')
        ->press('@register-button') // '@' means we are accessing a data-test attribute
        ->assertPathIs('/ideas');
    // Then I should have an account
    expect(User::count())->toBe(1);
    // And I should be signed in
    $this->assertAuthenticated();
});

//TODO:
// - Invalid email
// - Email already exists
