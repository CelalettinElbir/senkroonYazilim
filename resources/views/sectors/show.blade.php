@extends('layout.master')

@php
    $imagePath = $sector->image_path ?? null;
    $imageUrl = $imagePath && file_exists(public_path($imagePath))
        ? asset($imagePath)
        : asset('images/modules/all.jpg');
@endphp

@section('content')
    <section class="page-header page-header-modern section position-relative border-0 m-0"
        style="background-image: url({{ $imageUrl }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-5 mb-5">
            <div class="row align-items-end" style="min-height: 260px;">
                <div class="col-lg-8">
                    <span class="badge bg-primary text-uppercase mb-2">Sektör</span>
                    <h1 class="text-white mb-0">{{ $sector->name }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="h4 mb-3">Sektör Hakkında</h2>
                    <p class="text-muted">
                        Bu sayfa, {{ $sector->name }} için proje içi tanıtım ve içerik alanıdır. Buraya sektöre özel
                        açıklamalar, referanslar, ürün kapsamı ve süreç detaylarını ekleyebilirsiniz.
                    </p>

                    <div class="mt-4">
                        <h3 class="h5">Öne Çıkan Başlıklar</h3>
                        <ul class="text-muted mb-0">
                            <li>İhtiyaca göre modül ve süreç akışları</li>
                            <li>Örnek başarı hikayeleri ve referanslar</li>
                            <li>Teklif, demo ve iletişim aksiyonları</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h3 class="h6 text-uppercase text-muted">Hızlı Aksiyon</h3>
                            <a href="{{ route('sectors.index') }}" class="btn btn-outline-primary w-100 mt-3">Sektör Listesine Dön</a>
                            <a href="{{ route('home.index') }}" class="btn btn-primary w-100 mt-2">Anasayfa</a>
                        </div>
                    </div>

                    <div class="card shadow-sm border-0 mt-3 overflow-hidden">
                        <div class="position-relative" style="height: 160px; background: center / cover no-repeat url({{ $imageUrl }});"></div>
                        <div class="card-body">
                            <p class="text-muted mb-0">Görselleri değiştirmek için ilgili resmi public/images/sectors klasörüne ekleyin veya sektör kaydında yolu güncelleyin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
