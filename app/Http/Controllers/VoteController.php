<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VoteController extends Controller
{
    public function create()
    {
        $candidate = Candidate::all();
        return view('vote.create', [
            'candidate' => $candidate,
        ]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'candidate_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $vote = new Vote();
        $vote->candidate_id = $request->input('candidate_id');
        $vote->user_id = Auth::user()->id;
        $vote->save();

        return redirect("dashboard");
    }
}
