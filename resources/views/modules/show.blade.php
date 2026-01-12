@extends('layout.master')

@section('content')
    @php
        $iconClass = $module->icon ?: 'fas fa-cubes';
    @endphp
    <section class="page-header page-header-modern section position-relative border-0 m-0"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-2 mb-1 d-flex align-items-center justify-content-center">
            <h1 class="text-color-white font-weight-bold mb-2">{{ $module->title }}</h1>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="clearfix">
                            <img src="{{ asset('storage/' . $module->cover_image) }}" alt="{{ $module->title }}"
                                class="img-fluid float-start me-3 mb-3"
                                style="max-width: 45%; height: auto; object-fit: cover;" />

                            <div class="text-content">
                                {!! $module->content !!}
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Alt Modüller Bölümü --}}
                @if ($module->children->count() > 0)
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-layer-group me-2"></i>Alt Modüller</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="row g-0">
                                @foreach ($module->children as $childModule)
                                    <div class="col-md-6 col-lg-4 p-3 border-end border-bottom">
                                        <div class="d-flex align-items-center h-100">
                                            @if ($childModule->cover_image)
                                                <div class="me-3">
                                                    <img src="{{ asset($childModule->cover_image) }}"
                                                        alt="{{ $childModule->title }}" width="45" height="45"
                                                        style="object-fit:contain;">

                                                </div>
                                            @endif
                                            <div>
                                                <h5 class="mb-1">
                                                    <a href="#" class="text-decoration-none text-dark">
                                                        {{ $childModule->title }}
                                                    </a>
                                                </h5>
                                                @if ($childModule->short_description)
                                                    <p class="text-muted mb-0 small">
                                                        {{ Str::limit($childModule->short_description, 80) }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
