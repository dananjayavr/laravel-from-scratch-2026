<?php

//use Illuminate\Support\Facades\DB;
use App\Models\Idea;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    //$ideas = DB::table('ideas')->get(); // Using Illuminate façades
    //return $ideas[0]; // Automatic JSON

    $ideas = Idea::query()
                ->when(request('state'), function (Builder $query, $state) {
                    $query->where('state', $state);
                })->get(); // Using Eloquent (Laravel ORM)

    return view('ideas', ['ideas' => $ideas]);
});

Route::post('/ideas',function() {
    $idea = request('idea');
    Idea::create(['description' => $idea, 'state' => 'pending']);

    return redirect('/');
});

// Temporary
Route::get('/delete-ideas', function () {
   session()->forget('ideas');
   return redirect('/');
});
