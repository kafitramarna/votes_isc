<?php

//atta hitam legam
namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    public function index()
    {
        $candidate = Candidate::all();
        // dd($candidate);
        return view('candidate.index', [
            'candidate' => $candidate,
        ]);
    }
    public function create()
    {
        return view('candidate.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'photo' => 'required|image',
            'vision' => 'required|min:20',
            'mision' => 'required|min:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $path = $request->file('photo')->store('candidates', 'public');
        $candidate = new Candidate();
        $candidate->name = $request->input('name');
        $candidate->photo_url = 'storage/' . $path;
        $candidate->vision = $request->input('vision');
        $candidate->mision = $request->input('mision');
        $candidate->save();
        return redirect('/candidate');
    }
    public function edit($id)
    {
        $candidate = Candidate::find($id);
        return view('candidate.edit', [
            'candidate' => $candidate,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'photo' => 'required|image',
            'vision' => 'required|min:20',
            'mision' => 'required|min:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $path = $request->file('photo')->store('candidates', 'public');
        $candidate = Candidate::find($id);
        $candidate->name = $request->input('name');
        $candidate->photo_url = 'storage/' . $path;
        $candidate->vision = $request->input('vision');
        $candidate->mision = $request->input('mision');
        $candidate->save();
        return redirect('/candidate');
    }
}
