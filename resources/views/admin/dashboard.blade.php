@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="links">
                        <ul>
                            <li><a href="{{route('admin.posts.index')}}">Posts</a></li>
                            <li><a href="{{route('admin.posts.create')}}">Create</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper d-flex justify-content-center align-items-center mt-3">
		<div class="carousel front" id="carousel">
			<button class="my-top-btn" name="topBtn">
				<i class="fa-solid fa-chevron-up text-white"></i>
			</button>
			<img class="my-active" src="/image/chri-omo.jpg" alt="">
			<img class="my-none" src="/image/teo_agu.jpg" alt="">
			<img class="my-none" src="/image/emanuelem-gay.jpg" alt="">
			<img class="my-none" src="/image/matteo-il-figo.jpg" alt="">
			<img class="my-none" src="/image/emanuelem-barba.jpg" alt="">
			<button class="my-bot-btn" name="botBtn">
				<i class="fa-solid fa-chevron-down text-white"></i>
			</button>
		</div>
		<div class="carousel-rigth r-front" id="carousel-rigth">
			<div class="r-active">
				<img src="/image/chri-omo.jpg" alt="">
			</div>
			<div class="op">
				<img src="/image/teo_agu.jpg" alt="">
			</div>
			<div class="op">
				<img src="/image/emanuelem-gay.jpg" alt="">
			</div>
			<div class="op">
				<img src="/image/matteo-il-figo.jpg" alt="">
			</div>
			<div class="op">
				<img src="/image/emanuelem-barba.jpg" alt="">
			</div>
		</div>
    </div>
</div>
@endsection
