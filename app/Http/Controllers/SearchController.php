<?php

namespace App\Http\Controllers;

use App\Models\Job;

final class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'like', '%'.request('q').'%')
            ->get();

        return view('results', compact('jobs'));
    }
}
