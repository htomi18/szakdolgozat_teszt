<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;  // Importáljuk a Job modellt, hogy elérjük a job class-t



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
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) { //Navigáljon oda a jobs class-on belül oda, amelyik ID-jú elemre kattintunk; átadjuk a function-nek ezt az ID-t
    $job = Job::find($id); // ID alapján keressük meg a job-ot

    return view('job', ['job' => $job]); // job-ot átadjuk a view-nak
});
