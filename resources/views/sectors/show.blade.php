@extends('layout.master')

@php
    use Illuminate\Support\Facades\Storage;
    $iconClass = 'fas fa-building';
    $imagePath = $sector->image_path ? asset('storage/' . $sector->image_path) : asset('images/modules/all.jpg');
@endphp

@section('content')
    <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-2 mb-2 d-flex align-items-center justify-content-center  ">
            <h2 class="font-weight-bold text-white text-9 mb-0">{{ $sector->name }} </h2>
        </div>
    </section>


    <div class="container mt-5">

        <div class="card mb-4">
            <div class="card-body p-4">

                <div class="clearfix">
                    <img src="{{ $imagePath }}" alt="{{ $sector->name }}"
                        class="img-fluid float-start me-3 mb-3" style="max-width: 45%; height: auto; object-fit: cover;" />

                    <div class="text-content">
                        {!! $sector->body !!}
                    </div>
                </div>

            </div>
        </div>
    @endsection
