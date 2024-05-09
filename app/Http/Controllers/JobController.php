<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all()->groupBy('featured');

        return view('jobs.index', [
            'featuredJobs' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create',[
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required'],
            'url' => ['required'],
            'tags' => ['required'],
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => Auth::user()->employer->id,
            'location' => request('location'),
            'schedule' => request('schedule'),
            'url'=> request('url')
        ]);

        $job->tags()->attach(request('tags'));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show',[
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit',[
            'job' => $job,
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required'],
            'url' => ['required'],
            'tags' => ['array'],
        ]);

        $job = Job::findOrFail($job->id);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'location' => request('location'),
            'schedule' => request('schedule'),
            'url'=> request('url')
        ]);

        $job->tags()->sync(request('tags'));

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
