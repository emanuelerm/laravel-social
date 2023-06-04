@extends('layouts.app')
@section('content')
	<div class="my-container">
		<svg class="my-svg" viewBox="0 0 960 300">
			<symbol id="s-text">
				<text 
				text-anchor="middle" x="50%" y="80%">
				Laravel Social
				</text>
			</symbol>
		
			<g class="g-ants">
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
			</g>
		</svg>
	</div>
@endsection
