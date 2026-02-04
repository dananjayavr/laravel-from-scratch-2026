<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',
        [
            'greeting' => 'Greetings',
            'person' => request('person','World'),
//            'tasks' => [
//                'Walk cat',
//                'Eat cookies',
//                'Watch TV',
//                'Finish Laracasts tutorial'
//            ]
            'tasks' => [],
        ]
    );
});

Route::get('/about', function () {
    return view('about');
});

Route::view('/contact','contact'); // Same as above
