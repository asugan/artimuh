@extends('layout')

@section('content')
    <section class="services2 section-padding pb-90" data-scroll-index="3">
        <div class="container">
            <div class="row">
                @foreach ($postdata as $post)
                    <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <h6>Mesajınız</h6>
                        <h6>{{ $post->name }}</h6>
                        <h4>{{ $post->subject }}</h4>
                        <p>
                            {{ $post->message }}
                        </p>
                        <p>
                            {{ $post->phone }}
                        </p>
                        <p>
                            {{ $post->email }}
                        </p>
                    </div>
                @endforeach
                <div class="col-12 text-center mt-5">{{ $postdata->links() }}</div>
            </div>
        </div>
    </section>
@endsection
