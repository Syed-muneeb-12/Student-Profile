<?php


use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/ideas', function () {
    $ideas = Idea::all();
    
 return view('ideas.index', [
    'ideas' => $ideas
]);
});
Route::get('/ideas/{idea}', function ( Idea $idea) {
    // $idea = Idea::findOrFail($id, ['*']);
    
    return view('ideas.show', [
        'idea' => $idea
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