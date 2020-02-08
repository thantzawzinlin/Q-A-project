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
                     @if(count($errors)>0)

                     <div>
                         @foreach ($errors->all as $error)
                         <div class="alert alert-danger">
                            {{ $error }}     
                        </div>    
                         @endforeach
                     </div>

                    @endif
                    
                    <form action="{{route('questions.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                           <label for="question_title">Question Title</label>
                           <input type="text" name="title" id="question_title" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="question_body">Question Title</label>
                           <textarea name="body" id="question_body" cols="30" rows="10" class="form-control"></textarea>
                          
                        </div>
                        <div class="form-group">
                           
                           <button type="submit" class="btn btn-success">Submit Question</button>
                        </div>
                
                
                
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
