@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-start">
                   <h3> Question&Answer Section</h3>
                <div class="ml-auto "><a href="{{route('questions.create')}}" class="btn btn-outline-secondary">Ask Question</a></div>
                </div>

                <div class="card-body">
                   @foreach ($questions as $question)
                       <div class="media">
                            <div class="d-flex flex-column counters mr-3">
                                <div class="vote"><strong>{{$question->votes}}</strong>{{Str::plural('vote',$question->votes)}}</div>
                                <div class="answer"><strong>{{$question->answers}}</strong>{{Str::plural('answer',$question->answers)}}</div> 
                                <div class="view">{{$question->views ." ". Str::plural('view',$question->views)}}</div>
                            </div>
                                                   
                        
                           <div class="media-body">
                               <div class="d-flex aligns-center">
                                    <h4 class="mt-0 text-primary"><a href={{ $question->url }} }}>{{$question->title}}</a></h4>
                                    <a href="{{route('questions.edit', $question->id)}}" class="btn btn-outline-primary ml-auto">Edit</a>
                                <div class="d-flex aligns-end ml-1">
                                    <form action="{{route('questions.destroy' ,$question->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                    <button type ="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete')">
                                        Delete
                                    </button>
                                </form>
                                </div>    
                               
                               </div>
                               
                               <p class="lead">
                               Asked by <a href="{{ $question->user->url}}"> {{ $question->user->name   }}</a>
                               <small class="text-mute">{{$question->created_date}}</small>
                               </p>
                               {{ Str::limit($question->body,250) }}
                              
                           </div>
                        
                       </div>
                       <hr>
                   @endforeach
                    
                   {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
