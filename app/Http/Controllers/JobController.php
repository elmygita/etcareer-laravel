<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    // READ (tampil data)
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    // CREATE (tambah data)
    public function store(Request $request)
    {
        Job::create([
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'category' => $request->category,
            ]);

        return redirect('/jobs');
    }
}