<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\HTTP\Requests\QuestionRequest;
use Auth;

class QuestionController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }*/


    public function index()
    {
         $questions = Question::orderBy('id', 'desc')->paginate(10);
       // $this->authorize('viewAny', Question::class);

        return View('question.index', compact('questions'));
    }

    
    public function create()
    {
        return View('question.create');
    }

    
    public function store(Request $request)
    {
        $question = new Question($request->all());
        auth()->user()->questions()->save($question);

        //The below line will create question but does not add user_id
        //Question::create($request->all());
    }


    public function show(Question $question)
    {
        return view('question.show', compact('question'));
    }

    
    public function edit(Question $question)
    {
        return View('question.edit', compact('question'));
    }

    
    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
       
         return redirect()->route('question.index');
    }

    public function destroy(Question $question)
    {
        //
    }
}
