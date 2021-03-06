@extends('layout')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

@section('content')
    @foreach ($posts as $data)
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
                <a href="{{ url($data->id) }}"><button class="button button3">Detaylı Göz At</button></a>
            </div>
        </div>
    @endforeach
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center mt-5">{{ $posts->links() }}</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
@endsection
