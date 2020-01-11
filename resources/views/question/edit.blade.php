@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Question</div>
                <div class="card-body">
                <form method="POST" action="{{ route('questions.update', $question->id) }}">
                      {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        @method('PUT')
                            @include('question._form', ['buttonName' => 'Update'])
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection