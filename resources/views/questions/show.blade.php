@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-start">
                   {{$question->title}}
                <div class="ml-auto "><a href="{{route('questions.index')}}" class="btn btn-outline-primary">All Question</a></div>
                </div>
               <div class="card-body">    
                 {{ $question->body }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
