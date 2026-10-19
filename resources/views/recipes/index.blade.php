@extends('layouts.app')

@section('title', $categoryName ?? ($search !== '' ? 'Hasil Pencarian' : 'Semua Resep'))

@section('content')
    <section class="recipe-hero">
        <div class="container">
            <p class="eyebrow">Katalog Dapur Nusantara</p>
            <h1 class="display-title mb-3">{{ $categoryName ?? ($search !== '' ? 'Hasil pencarian' : 'Semua resep') }}</h1>
            <p class="hero-copy mb-4">Jelajahi resep, bahan, langkah memasak, dan perkiraan biaya dalam satu katalog.</p>

            <form class="search-form" action="{{ route('recipes.index') }}" method="GET" role="search">
                <label class="visually-hidden" for="recipeSearch">Cari resep</label>
                <div class="input-group">
                    <input id="recipeSearch" class="form-control" type="search" name="q" value="{{ $search }}" placeholder="Cari nama, bahan, atau kategori...">
                    <button class="btn btn-primary" type="submit">Cari resep</button>
                </div>
            </form>
        </div>
    </section>

    <section class="container py-5">
        <div class="section-heading d-flex flex-column flex-sm-row align-items-sm-end justify-content-between gap-2 mb-4 pb-3">
            <div>
                <p class="eyebrow text-secondary mb-2">Dari dapur kami</p>
                <h2 class="section-title h2 mb-0">{{ $categoryName ?? ($search !== '' ? 'Hasil pencarian' : 'Daftar resep') }}</h2>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-secondary small">{{ $recipes->total() }} resep</span>
                @if ($search !== '')
                    <a class="link-secondary small" href="{{ route('recipes.index') }}">Hapus pencarian</a>
                @endif
            </div>
        </div>

        @if ($recipes->isNotEmpty())
            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mb-4">
                <p class="small text-secondary mb-0">
                    Menampilkan {{ $recipes->firstItem() }}–{{ $recipes->lastItem() }} dari {{ $recipes->total() }} resep
                </p>
                @if ($recipes->hasPages())
                    {{ $recipes->onEachSide(1)->links('pagination::bootstrap-5') }}
                @endif
            </div>

            <div class="row g-4">
                @foreach ($recipes as $recipe)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="recipe-card">
                            @if ($recipe->image && is_file(public_path('assets/images/' . $recipe->image)))
                                <img class="recipe-photo" src="{{ asset('assets/images/' . $recipe->image) }}" alt="{{ $recipe->name }}">
                            @else
                                <div class="recipe-art" role="img" aria-label="Foto {{ $recipe->name }} akan ditambahkan">
                                    <span class="recipe-art-label">Foto resep menyusul</span>
                                </div>
                            @endif
                            <div class="card-body d-flex flex-column p-4">
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                                    <span class="badge category-tag rounded-pill px-3 py-2">{{ $recipe->category }}</span>
                                    <span class="recipe-meta">{{ $recipe->cook_time }} menit</span>
                                </div>
                                <h3 class="recipe-title h4 mb-2">{{ $recipe->name }}</h3>
                                <p class="recipe-description text-secondary mb-3">{{ $recipe->description }}</p>
                                <div class="d-flex align-items-center justify-content-between gap-2 mt-auto pt-3 border-top">
                                    <span class="recipe-price">Rp{{ number_format($recipe->price, 0, ',', '.') }}</span>
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('recipes.show', $recipe) }}">Lihat resep</a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

        @else
            <div class="border rounded-2 bg-white p-4 p-md-5 text-center">
                <p class="eyebrow text-secondary">Belum ketemu</p>
                <h2 class="section-title h3">Tidak ada resep yang cocok.</h2>
                <p class="text-secondary mb-4">Coba kata kunci lain, misalnya nama hidangan, bahan, atau kategori.</p>
                <a class="btn btn-primary" href="{{ route('recipes.index') }}">Lihat semua resep</a>
            </div>
        @endif
    </section>
@endsection