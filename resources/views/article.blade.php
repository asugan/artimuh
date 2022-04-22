@extends('layout')

@section('content')
    <div class="article">
        <div class="articbaslik">
            <h1 class="hiztext">{{ $post->baslik }}</h1>
        </div>
        <div class="artictext">
            <p>{{ $post->text }}</p>
        </div>
        <div class="owl-carousel owl-three owl-theme">
            <div class="item"><img src="{{ url('Image/' . $post->image1) }}" alt="" class="articleimg" />
            </div>
            <div class="item"><img src="{{ url('Image/' . $post->image2) }}" alt="" class="articleimg" />
            </div>
            <div class="item"><img src="{{ url('Image/' . $post->image3) }}" alt="" class="articleimg" />
            </div>
            <div class="item"><img src="{{ url('Image/' . $post->image4) }}" alt="" class="articleimg" />
            </div>
        </div>
    </div>
@endsection
