@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Question</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('questions.store') }}">
                        @include('question._form', ['buttonName' => 'Create Question'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
