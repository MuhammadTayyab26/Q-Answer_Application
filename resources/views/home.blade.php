@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">

            @if(!$questions->count())
                <div class="card my-2">
                    <div class="card-body text-center">
                          You do not have contributed yet.
                          <br>
                          To add Question, click the button.
                          <br>
                          <a class="btn btn-primary" href="{{route('question.create')}}">Add Question</a>                  
                    </div>
                </div>
            @endif
            
            @foreach($questions as $question)
                <div class="class my-2">
                    <div class="card-body">
                        <p>Question ID: {{ $question->id }}</p><br>
                        <p> {{ $question->body }} </p>

                        <a href="{{route('question.show', $question->id)}}" class="btn btn-dark">Show</a>    
                        <a href="{{route('question.edit', $question->id)}}" class="btn btn-primary">Edit</a>

                        <form action="{{route('quedtion.destroy', $question->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>
            @endforeach
        <div class="my-4 d-flex justify-content-center"> {{$question->links}} </div>    
    </div>
</div>
@endsection
