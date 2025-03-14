@extends('layouts.app')

@section('content')
<!--Create post-->

<div class="container">
    <h1 class="text-center">Hello, <span class="fw-bold">{{Auth::user()->name}}</span>👋🏻</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body shadow">
                    <form action="{{ route('createpost')}}" method="POST">
                        @csrf
                        <input name="content" class="form-control" type="text" placeholder="What's on your mind? 🗨️" required>
                        <button type="submit" class="btn btn-dark float-end mt-3">Create post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body shadow">
                        <span class="fw-bold">{{ $post->user->name }} 
                            @if($post->user->id === Auth::user()->id)
                            <a href="{{ route('deletepost', $post->id) }}" class="btn btn-dark-subtle btn-sm float-end">Delete</a> 
                            @endif
                        </span>
                        
                        <br><small>{{$post->created_at->diffForHumans()}}</small>
                        <br>
                        <p>{{ $post->content }}</p>

                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('createcomment') }}" method="POST">
                                        @csrf
                                        <input name="content" class="form-control" type="text" placeholder="Write a comment..." required>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit" class="btn btn-dark float-end mt-3">Submit</button>
                                    </form>
                                    
                                </div>
                            </div>
                            @foreach($post->comments->reverse() as $comment)
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <span class="fw-bold">{{ $comment->user->name }}</span>
                                        <small>{{$comment->created_at->diffForHumans()}}</small>
                                        <br>
                                        <div class="p-1">
                                            <p>{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>

<!--post-->

@endsection