@extends('layout.master')





@section('content')
    <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-2 mb-2">
            <h2 class="font-weight-bold text-white text-9 mb-0">Hizmetlerimiz </h2>
        </div>
    </section>


    <div class="container mt-5">
        <h3 class="font-weight-bold text-5 mb-4">{{ $advisor->title }}</h3>
        <p class="text-muted">{!! $advisor->description !!}</p>
    @endsection
