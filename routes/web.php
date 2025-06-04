<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;  // Importáljuk a Job modellt, hogy elérjük a job class-t
use App\Models\Post; // Importáljuk a Post modellt, hogy elérjük a post class-t



Route::get('/', function () {
     return view('welcome', [
       'greeting' => 'Szia',
        'name' => 'Tamás'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $job = Job::with('employer')->get(); // Lekérjük az összes job-ot a Job modelből
    return view('jobs.index', [
        'jobs' => $job // Átadjuk a lekért job-okat a view-nak
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) { //Navigáljon oda a jobs class-on belül oda, amelyik ID-jú elemre kattintunk; átadjuk a function-nek ezt az ID-t
    $job = Job::find($id); // ID alapján keressük meg a job-ot

    return view('jobs.show', ['job' => $job]); // job-ot átadjuk a view-nak
});



Route::get('/posts', function () {
    $post = Post::with('user')->get(); // Lekérjük az összes post-ot a Post modelből
    return view('posts', [
        'posts' => $post // Átadjuk a lekért post-okat a view-nak
    ]);
});

Route::get('/posts/{id}', function ($id) { //Navigáljon oda a posts class-on belül oda, amelyik ID-jú elemre kattintunk; átadjuk a function-nek ezt az ID-t
    $post = Post::find($id); // ID alapján keressük meg a post-ot

    return view('post', ['post' => $post]); // post-ot átadjuk a view-nak
});

