@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    @foreach ($questions as $question)

                        <div class="card my-2">
                            <div class="card-body">
                                <p>Question ID:  {{ $question->id }}</p><br>
                                <p>{{ $question->title }}</p>
                                <p>{{ $question->description }}</p>
                                <div class="text-right" >
                                    <p>
                                        Posted by: <strong> {{$question->user->name}} </strong><br>
                                        {{$question->created_at}} 
                                    </p>
                                </div>
                                
                                    <div class=" row py-2 ">    
                                         <a href="{{route('questions.show', $question->id)}}" class="btn btn-dark">Show</a>    
                                        <a href="{{route('questions.edit', $question->id)}}" class="btn btn-primary">Edit</a>
                                        
                                        <form action="{{route('questions.destroy', $question->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                            </div>
                        </div>

                    @endforeach

        <div class="my-4 d-flex justify-content-center">   {{ $questions->links() }} </div>
    </div>
</div>
@endsection