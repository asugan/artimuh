@extends('layout')

@section('content')
    @foreach ($postdata as $data)
        <div class="calcontainer">
            <div class="first">
                <h1>{{ $data->id }}</h1>
            </div>
            <div class="second">
                <img src="{{ url('Image/' . $data->basimage) }}" alt="" class="calimage">
            </div>
            <div class="third">
                <h1 class="hiztext"><a href="{{ url($data->id) }}">{{ $data->baslik }}</a></h1>
                <p>{{ $data->text }}</p>
                <button class="button button3"><a href="{{ url($data->id) }}">Detaylı Göz At</a></button>
            </div>
        </div>
    @endforeach
@endsection
