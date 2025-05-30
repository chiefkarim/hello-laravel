<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(4);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {

        return view('jobs.create');
    }

    public function show(Job $job)
    {

        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        // authorize
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

    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        // authorize the user

        // update the job

        $job->title = request('title');
        $job->salary = request('salary');
        // store it in the database
        $job->save();

        // redirtect to the currect job page
        return redirect('/jobs/'.$job->id);
    }

    public function destroy(Job $job)
    {
        // authorize the user

        // delete the job
        $job->delete();

        // redirect
        return redirect('/jobs');
    }
}
