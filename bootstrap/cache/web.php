<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile', [
        'username' => session('username', 'Alexandra'),
        'bio' => session('bio', ''),
        'profilePicture' => session('profilePicture', 'images/profileDefault.png'),
    ]);
});
 
Route::get('/profile/edit', function () {
    return view('edit-profile', [
        'username' => session('username', 'Alexandra'),
        'bio' => session('bio', 'Digital artist who loves creating illustrations, character designs, and colorful digital paintings.'),
        'profilePicture' => session('profilePicture', 'images/profile.jpg'),
    ]);
});

Route::post('/profile/edit', function () {
    
    session([
        'username' => request('username'),
        'bio' => request('bio'),
    ]);

    if (request()->hasFile('profile_picture')) {

        $file = request()->file('profile_picture');

        $filename = 'profile.' . $file->getClientOriginalExtension();

        $file->move(public_path('images'), $filename);

        session([
            'profilePicture' => 'images/' . $filename
        ]);
    }

    return redirect('/profile');
});

Route::get('/submit', function () {
    return view('submit');
});