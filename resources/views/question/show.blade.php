@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-2">
                        
                        <form method="POST"  action="{{ route('votes.store')}}">
                            @csrf
                            <input type="hidden" name="question_id" value="{{$question->id}}"></input>
                            <div class="col-md-2">
                                <button>Vote Up</button>
                                <br>
                                {{$question->vote_count}}
                                
                            </div>
                        </form>
                        <form method="POST"  action="{{route('votes.destroy', $question->id)}}">
                            @csrf
                            <input type="hidden" name="question_id" value="{{$question->id}}"></input>
                            <div class="col-md-2">
                                {{$question->vote_count}}
                                <br>
                                <button>Vote Down</button>
                            </div>
                        </form>
                        

                    </div>
                    <div class="col-md-8 p-4">
                        
                        <h1>
                            {{$question->title}}
                        </h1>
                        <hr>
                        <p>
                            {{$question->description}}
                        </p>

                        <p>
                           Posted by: <strong> {{$question->user->name}} </strong><br>
                           {{$question->created_at}} 
                        </p>

                        <form method="POST" action="{{ route('questions.store') }}">
                            @include('question._form', ['buttonName' => 'Create Question'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


