<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;
use App\Question;

class VoteController extends Controller
{

	 public function vote_question()
    {
        return Response::json(Vote::vote(Auth::id(), Request::get('question_id'), Request::get('vote'), 'question_id'));
    }


    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $vote = new Vote($request[]);
        // auth()->user()->questions()->save($Vote);

        $question =  Question::find($request->get('question_id'));
        $question->vote_count = $question->vote_count + 1;
        $question->save();
       	return redirect()->back()->with('msg', 'The Message');
    }

    public function show(Vote $vote)
    {
        //
    }

    public function edit(Vote $vote)
    {
        //
    }

    public function update(Request $request, Vote $vote)
    {
        //
    }

    public function destroy(Vote $vote)
    {
    	$question =  Question::find($request->get('question_id'));
        $question->vote_count = $question->vote_count - 1;
        $question->save();
    }
}
