@extends('layout.master')

@section('content')
    @php
        $iconClass = $module->icon ?: 'fas fa-cubes';
    @endphp

    <section class="page-header page-header-modern section position-relative border-0 m-0"
        style="background-image: url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-5 mb-5">
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <h2 class="text-color-dark font-weight-bold mb-3">{{ $module->title }}</h2>

                        <div class="row">

                            <div class="col-md-6">
                                <img src="{{ asset($module->cover_image) }}" alt="{{ $module->title }}"
                                    class="img-fluid mb-4" />
                            </div>
                            <div class="col-md-6">
                                @if (!empty($module->content))
                                    {!! $module->content !!}
                                @else
                                    <p class="text-3 opacity-8 mb-0">Bu modül için içerik yakında eklenecektir.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
