@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-start">
                    Question&Answer Section
                <div class="ml-auto "><a href="{{route('questions.index')}}" class="btn btn-outline-primary">All Question</a></div>
                </div>
               <div class="card-body">    
                @include('includes.error_message')
                    
                    <form action="{{route('questions.store')}}" method="POST">
                        @include('includes.common_form',['buttonName'=>'Submit Question'])
                
                
                
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
