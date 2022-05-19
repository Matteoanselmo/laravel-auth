@extends('layouts.main');

@section('main-content')
<main>
    <div class="container-fluid">
        <div class="row">
            <h1>List of trains </h1>
            <div class="col-12 d-flex flex-wrap">
                @foreach ($posts as $post)
                    <div class="col-3">
                        <div class="card mb-2" style="width: 18rem;">
                            <img src="{{$post->image_url}}" class="card-img-top" alt="{{$post->title}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <h6 class="card-title">{{$post->author}}</h6>
                                <p class="card-text">{{$post->description}}</p>
                                <a href="{{route('andim.posts.show', $post)}}" class="btn btn-primary">Visualizza </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
