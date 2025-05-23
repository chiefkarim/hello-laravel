<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// iNDEX
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(4);

    return view('jobs.index', ['jobs' => $jobs]);
});

// Create job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// SHOW
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// Store
Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // authorize the user

    // update the job

    $job = Job::findOrFail($id);
    // store it in the database
    $job->title = request('title');
    $job->salary = request('salary');
    $job->save();

    // redirtect to the currect job page
    return redirect('/jobs/'.$id);
});

// Destroy
Route::delete('/jobs/{id}', function ($id) {

    // authorize the user
    // get the job
    $job = Job::findOrFail($id);

    // delete the job
    $job->delete();

    // redirect
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
