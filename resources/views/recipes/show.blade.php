@extends('layouts.app')

@section('title', $recipe->name)

@section('content')
	<div class="container py-4 py-lg-5">
		<a class="link-secondary text-decoration-none" href="{{ route('recipes.index') }}">&larr; Kembali ke daftar resep</a>

		<article class="row g-4 g-lg-5 mt-2">
			<div class="col-12 col-lg-5">
				@if ($recipe->image && is_file(public_path('assets/images/' . $recipe->image)))
					<img class="detail-photo rounded-2" src="{{ asset('assets/images/' . $recipe->image) }}" alt="{{ $recipe->name }}">
				@else
					<div class="detail-art rounded-2" role="img" aria-label="Foto {{ $recipe->name }} akan ditambahkan">
						<span class="recipe-art-label">Foto resep menyusul</span>
					</div>
				@endif
			</div>

			<div class="col-12 col-lg-7">
				<p class="eyebrow text-secondary mb-2">{{ $recipe->category }} · {{ $recipe->cook_time }} menit</p>
				<h1 class="display-5 recipe-title mb-3">{{ $recipe->name }}</h1>
				<p class="lead text-secondary">{{ $recipe->description }}</p>
				<p class="recipe-price fs-4 mb-4">Perkiraan biaya: Rp{{ number_format($recipe->price, 0, ',', '.') }}</p>

				<section class="detail-section">
					<h2 class="section-title h4 mb-3">Bahan-bahan</h2>
					<ul class="mb-0 ps-4">
						@foreach (explode(',', $recipe->ingredients) as $ingredient)
							<li class="ingredient-item py-1">{{ trim($ingredient) }}</li>
						@endforeach
					</ul>
				</section>

				<section class="detail-section border-bottom-0">
					<h2 class="section-title h4 mb-3">Cara membuat</h2>
					<p class="recipe-instructions mb-0">{{ $recipe->steps }}</p>
				</section>
			</div>
		</article>
	</div>
@endsection
