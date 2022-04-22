@extends('layout')

@section('content')
    <div class="belgediv">
        <h1 class="hiztext">Belgelerimiz</h1>
        <div class="owl-carousel owl-four owl-theme">
            <div class="item"><img src="{{ asset('images/belge1.jpeg') }}" alt="" /></div>
            <div class="item"><img src="{{ asset('images/belge2.jpeg') }}" alt="" /></div>
            <div class="item"><img src="{{ asset('images/belge3.jpeg') }}" alt="" /></div>
            <div class="item"><img src="{{ asset('images/belge4.jpeg') }}" alt="" /></div>
            <div class="item"><img src="{{ asset('images/belge5.jpeg') }}" alt="" /></div>
        </div>
    </div>
@endsection
