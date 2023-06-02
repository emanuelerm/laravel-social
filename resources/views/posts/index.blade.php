@extends('layouts.app')

@section('content')
    <main>
        <h1>Posts</h1>
        @foreach ($posts as $post)
            <div class="col-3">
                <div class="card">
                    <div class="card-title">
                        <h3 class="text-capitalize">{{$post->title}}</h3>
                    </div>
                    <div class="card-img">
                        <img class="img-fluid" src="{{$post->image}}" alt="{{$post->title}}">
                    </div>
                    <div class="card-body">
                        <p>{{$post->description}}</p>
<<<<<<< HEAD
                        <small>{{$post->updated_at}}</small>
=======
                        <small>{{$post->created_at->format('Y-m-d')}}</small>
>>>>>>> 54ce7293e10deeb5b0fd71629594c263529420c5
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
