<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => [
        ['id' => 1, 'title' => 'teacher', 'salary' => '50k'],
        ['id' => 2, 'title' => 'plumber', 'salary' => '60k'],
        ['id' => 3, 'title' => 'engineer', 'salary' => '10k'],
    ]]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        ['id' => 1, 'title' => 'teacher', 'salary' => '50k'],
        ['id' => 2, 'title' => 'plumber', 'salary' => '60k'],
        ['id' => 3, 'title' => 'engineer', 'salary' => '10k'],
    ];

    $job = \Illuminate\Support\Arr::first($jobs, fn ($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
