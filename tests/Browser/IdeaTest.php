<?php

use App\Models\User;

test('show all ideas', function () {
    // given I'm signed in
    $this->actingAs($user = User::factory()->create());
    // and I have one idea in the DB
    $user->ideas()->create([
        'description' => 'Build a thing',
    ]);

    // when I visit /ideas I should see my idea
    visit('/ideas')->assertSee('Build a thing');
});

test('show single idea', function () {
    // given I'm signed in
    $this->actingAs($user = User::factory()->create());
    // and I have one idea in the DB
    $user->ideas()->create([
        'description' => 'Build a thing',
    ]);

    // when I visit /ideas/show I should see my idea
    visit('/ideas/1')->assertSee('Build a thing');
});

test('show an edit form for idea', function () {
    // given I'm signed in
    $this->actingAs($user = User::factory()->create());
    // and I have one idea in the DB
    $user->ideas()->create([
        'description' => 'Build a thing',
    ]);

    // when I visit /ideas/1/edit I should see my idea
    visit('/ideas/1/edit')->assertSee('Build a thing');
    visit('/ideas/1/edit')->assertSee('Update');
    visit('/ideas/1/edit')->assertSee('Delete');
});

test('edit form updates the idea', function () {
    // given I'm signed in
    $this->actingAs($user = User::factory()->create());
    // and I have one idea in the DB
    $user->ideas()->create([
        'description' => 'Build a thing',
    ]);

    // when I visit /ideas/1/edit I should see my idea
    visit('/ideas/1/edit')->assertSee('Build a thing')
        ->fill('description', 'Build a thing [UPDATED].')
        ->press('Update')
        ->assertPathIs('/ideas/1')
        ->assertSee('Build a thing [UPDATED].');
});
