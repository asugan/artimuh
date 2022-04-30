@extends('layout')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/calismalarimiz" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">İçerik Edit</h1>
                    <p>İçerik Edit Sayfası</p>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete Post</button>
                    </form>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Kategori</label>
                                <input type="text" id="category" class="form-control" name="category"
                                    placeholder="Enter Post Title" value="{{ $post->category }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">İçerik Başlığı</label>
                                <input type="text" id="baslik" class="form-control" name="baslik"
                                    placeholder="Enter Post Title" value="{{ $post->baslik }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">İçerik Yazısı</label>
                                <textarea id="text" class="form-control" name="text" placeholder="Enter Post Body" rows="5"
                                    required>{{ $post->text }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Database'i Güncelle
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
