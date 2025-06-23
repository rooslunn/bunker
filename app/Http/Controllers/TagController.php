<?php

namespace App\Http\Controllers;

use App\Models\Tag;

final class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $jobs = $tag->jobs;

        return view('results', compact('jobs'));
    }
}
