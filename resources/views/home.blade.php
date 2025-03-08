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
                        <input name="content" class="form-control" type="text" placeholder="What's on your mind? 🗨️">
                        <button type="submit" class="btn btn-dark float-end mt-3">Create post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--post-->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <span class="fw-bold">Vincent Teng <button class="btn btn-dark-subtle btn-sm float-end">Delete</button> </span>
                    <br><small>a few minutes ago</small>
                    <br>
                    <p>Sa dami na maling nangyari hindi ko na rin masasabing kaya ko pa bang hindi ka iwan?
                        kasinungalingan</p>

                        <div class="card">
                            <div class="card-body">
                                <input class="form-control" type="text" placeholder="Write a comment...">
                                <button class="btn btn-dark float-end mt-3">Submit</button>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <span class="fw-bold">Sung jin woo</span>
                                <small>a few minutes ago</small>
                                <br>
                                <div class="border rounded p-1">
                                    <p>Drama mo boi!!!!!</p>
                                </div>
                            </div>
                        </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection