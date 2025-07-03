<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

final class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        // attention: always check for n+1
        $jobsAll = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        $jobs = $jobsAll;
        $featuredJobs = $jobsAll;

        $tags = Tag::all();

        return view('jobs.index', compact('featuredJobs', 'jobs', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request): \Illuminate\Http\RedirectResponse
    {
        $form_data = $request->validated();

        $form_data['featured'] = request()->has('featured');

        // @phpstan-ignore method.notFound
        $job = Auth::user()->employer->jobs()->create(Arr::except($form_data, 'tags'));

        // todo: only unique tags
        if ($form_data['tags'] ?? false) {
            $tags = explode(',', $form_data['tags']);
            foreach ($tags as $tag) {
                $job->tag($tag);
            }
        }

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job): void
    {
        //
    }
}
