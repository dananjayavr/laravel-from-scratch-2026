<?php

test('the application renders a welcome page', function () {
    visit('/')->assertSee('Welcome');
});
