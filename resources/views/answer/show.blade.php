@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="p-4">
                        <h1>
                            {{$question->title}}
                        </h1>
                        <hr>
                        <p>
                            {{$question->description}}
                        </p>


                        <div class="text-right">
                            <span>
                            Posted by: <strong> {{$question->user->name}} </strong> |
                            </span>

                            <span>
                                Posted: <strong>{{$question->created_at}}</strong>
                            </span>
                        </div>


                        <form method="POST" action="{{ route('answers.store') }}">
                            @include('answer._form', ['buttonName' => 'Submit Answer'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
