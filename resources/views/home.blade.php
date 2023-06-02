@extends('layouts.app')
@section('content')
	<div class="wrapper d-flex justify-content-center align-items-center">
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
		<
@endsection


{{-- /image/chri-omo.jpg 
    /image/teo_agu.jpg
    /image/emanuelem-gay.jpg
    /image/matteo-il-figo.jpg
    /image/emanuelem-barba.jpg --}}
