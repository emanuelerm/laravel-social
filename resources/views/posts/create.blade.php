@extends('layouts.app')

@section('content')
	<div class="w-50 m-auto py-3">

		@if ($errors->any())
			<div class="allert allert-danger">
				<ul>
					@foreach ($errors as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form action="{{ route('admin.posts.store') }}" method="POST" class="d-flex flex-column align-items-center">
			@csrf

			<div class="p-1  flex-column align-items-center">
				<label class="text-uppercase fw-bold" for="title">title</label>

				<input type="text" name="title" id="title" aria-describedby="titleHelp"
					class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">

				<div id="titleHelp" class="form-text">
					<span>inserisci un titolo valido, minimo 3 caratteri</span>
				</div>

				@error('title')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>

			<div class="p-1  flex-column align-items-center">
				<label class="text-uppercase fw-bold" for="image">image</label>
				<input type="text" name="image" id="image" aria-describedby="imgHelp"
					class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">

				<div id="imgHelp" class="form-text">
					<span>inserisci un link valido</span>
				</div>

				@error('image')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>

			<div class="p-3 flex-column align-items-center">
				<label class="text-uppercase fw-bold" for="description">description</label>
				<input type="text" name="description" id="description" aria-describedby="descriptionHelp"
					class=" form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">

				<div id="descriptionHelp" class="form-text">
					<span>prima del valore numerico usa '$'</span>
				</div>

				@error('description')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>

            <input type="date" name="created" id="created">

            <div class="d-flex gap-1 justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>

		</form>
