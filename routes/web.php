<?php


use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/ideas', function () {
    $ideas = Idea::all();
    
 return view('ideas.index', [
    'ideas' => $ideas
]);
});
Route::get('/ideas/{id}', function ($id) {
    $idea = Idea::find($id, ['*']);
    
    return view('ideas.index', [
        'ideas' => $idea
    ]);
});

Route::post('/ideas',function() {
    Idea::create([
        'description'=>request('idea'),
        'state'=> 'pending',
    ]);
    return redirect('/ideas');
});

Route::get('/delete-ideas',function(){
    Idea::truncate();
    return redirect('/');
});