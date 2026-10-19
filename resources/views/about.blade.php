@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
    <section class="container py-5 py-lg-6">
        <p class="eyebrow text-secondary">Profil proyek</p>
        <h1 class="display-title text-dark mb-4">Tentang Dapur Nusantara</h1>
        <p class="about-copy">Dapur Nusantara adalah proyek UTS pengembangan aplikasi web. Proyek ini mempraktikkan pengelolaan data dengan Laravel dan database relasional, kemudian menyajikannya melalui Blade Template dan Bootstrap.</p>

        <div class="row g-4 mt-3">
            <section class="col-12 col-lg-6">
                <div class="border-top border-3 border-success pt-3">
                    <h2 class="section-title h3">Tujuan</h2>
                    <p class="text-secondary">Menyusun katalog resep yang mudah dijelajahi, dengan data resep yang berasal dari database dan diisi menggunakan seeder.</p>
                </div>
            </section>
            <section class="col-12 col-lg-6">
                <div class="border-top border-3 border-warning pt-3">
                    <h2 class="section-title h3">Ruang lingkup</h2>
                    <p class="text-secondary">Pengunjung dapat melihat daftar dan detail resep, mencari resep, menelusuri kategori, serta melihat bahan, langkah memasak, waktu, dan perkiraan biaya.</p>
                </div>
            </section>
        </div>

        <p class="border rounded-2 bg-light p-3 mt-4 mb-0 text-secondary">Situs ini dibuat untuk tujuan pembelajaran dan berfungsi sebagai katalog informatif, bukan layanan pemesanan makanan.</p>
    </section>
@endsection