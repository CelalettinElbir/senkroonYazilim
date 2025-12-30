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
                            <img src="{{ asset("storage/{$module->cover_image}") }}" alt="{{ $module->title }}"
                                class="img-fluid float-start me-3 mb-3"
                                style="max-width: 45%; height: auto; object-fit: cover;" />

                            <div class="text-content">
                                {!! $module->content !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
