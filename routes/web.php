<?php


use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;

Route::get('/',function() {
    //$ideas = DB::table('ideas')->get();

    $ideas = Idea::all();

    return view('ideas', [
    'ideas' => $ideas,
]);
});

Route::post('/ideas',function() {
    $idea = request("idea");

    session()->push('ideas',$idea);
    return redirect('/');
});
Route::get('/delete-ideas',function(){
    session()->forget('ideas');
    return redirect('/');
});