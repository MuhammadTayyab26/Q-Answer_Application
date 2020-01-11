@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

                   <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{request()->has('type')? '' : 'active'}}"
                             href="{{route('questions.index')}}">
                            All
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->get('type') == 'answered' ? 'active' : ''}}"
                             href="{{route('questions.index', ['type' => 'answered'])}}">
                            Answered
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->get('type') == 'unanswered' ? 'active' : ''}}"
                             href="{{route('questions.index', ['type' => 'unanswered'])}}">
                            Unanswered
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->get('type') == 'most voted' ? 'active' : ''}}"
                            href="{{route('questions.index', ['type' => 'most voted'])}}">
                            Most voted
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->get('type') == 'oldest' ? 'active' : ''}}"
                            href="{{route('questions.index', ['type' => 'oldest'])}}">
                            Oldest
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->get('type') == 'newest' ? 'active' : ''}}"
                            href="{{route('questions.index', ['type' => 'newest'])}}">
                            Newest
                        </a>
                      </li>
                  </ul>
                </div>
                <div class="card-body">
                    <div class="row m-4">
                        <div class="col">
                            <h1 class="card-title"> {{ request()->has('type')? ucwords(request()->get('type')) : 'All'}} Questions </h1>
                        </div>
                        <div class="col text-right">
                            <a href={{route('questions.create')}} class="btn btn-primary"> Ask Question </a>
                        </div>
                    </div>
                    <hr>
                    @foreach($questions as $question)
                    <div class="card mb-3">
                        <div class="card-body">
                          <h3 class="card-title">{{$question->title}}</h3>
                          <p class="card-text">{{$question->description}}</p>
                          <a href="{{route('questions.show', $question)}}" class="btn btn-sm btn-primary">Answer</a>
                        </div>
                     </div>
                     @endforeach
                    <div class="my-4 d-flex justify-content-center">
                         {{$questions->appends(request()->query())->links()}} 
                    </div>
                </div>


              </div>
        </div>
    </div>
</div>
@endsection