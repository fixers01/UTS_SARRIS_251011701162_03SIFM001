@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="home-hero" style="background-image: url('{{ asset('assets/images/nasi-goreng.jpg') }}')">
        <div class="container home-hero-content">
            <p class="eyebrow">Katalog kuliner Indonesia</p>
            <h1 class="home-title mb-3">Dapur Nusantara</h1>
            <p class="home-copy mb-4">Jelajahi resep rumahan, temukan hidangan berdasarkan kategori, dan lihat bahan serta langkah memasaknya.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('recipes.index') }}">Jelajahi semua resep</a>
        </div>
    </section>

    <section class="container py-5">
        <div class="section-heading d-flex flex-column flex-sm-row align-items-sm-end justify-content-between gap-2 mb-4 pb-3">
            <div>
                <p class="eyebrow text-secondary mb-2">Mulai menjelajah</p>
                <h2 class="section-title h2 mb-0">Pilih kategori</h2>
            </div>
            <a class="link-secondary" href="{{ route('recipes.index') }}">Lihat seluruh katalog</a>
        </div>

        <div class="row g-3">
            <div class="col-12 col-md-6">
                <a class="category-entry" href="{{ route('recipes.category', 'makanan-utama') }}">
                    <span class="eyebrow text-secondary">Hidangan mengenyangkan</span>
                    <h3 class="section-title h3 mt-2">Makanan Utama</h3>
                    <span class="text-secondary">Lihat resep nasi, lauk, dan hidangan utama lainnya.</span>
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a class="category-entry" href="{{ route('recipes.category', 'minuman') }}">
                    <span class="eyebrow text-secondary">Segar untuk menemani</span>
                    <h3 class="section-title h3 mt-2">Minuman</h3>
                    <span class="text-secondary">Jelajahi pilihan minuman sederhana untuk dibuat di rumah.</span>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container">
            <div class="section-heading d-flex align-items-end justify-content-between gap-3 mb-4 pb-3">
                <div>
                    <p class="eyebrow text-secondary mb-2">Pilihan untuk dicoba</p>
                    <h2 class="section-title h2 mb-0">Resep unggulan</h2>
                </div>
                <a class="link-secondary" href="{{ route('recipes.index') }}">Semua resep</a>
            </div>

            <div class="list-group list-group-flush">
                @foreach ($featuredRecipes as $recipe)
                    <a class="list-group-item list-group-item-action d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-2 py-3" href="{{ route('recipes.show', $recipe) }}">
                        <span>
                            <span class="recipe-meta d-block">{{ $recipe->category }} · {{ $recipe->cook_time }} menit</span>
                            <span class="fw-semibold">{{ $recipe->name }}</span>
                        </span>
                        <span class="recipe-price">Rp{{ number_format($recipe->price, 0, ',', '.') }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection