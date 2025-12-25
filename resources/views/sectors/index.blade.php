@extends('layout.master')



@section('content')
    <section class="page-header page-header-modern section position-relative border-0 m-0"
        style="background-image: url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-5 mb-5">
        </div>
    </section>


    @include('sector-cards', ['sectors' => $sectors])





@endsection
