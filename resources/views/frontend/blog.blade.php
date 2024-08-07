@extends('layout.app')

@section('content')

<section>
    <div class="container">
        @foreach($posts as $post)
        <div class="row my-5 border bg-light shadow">
            <div class="col-md-6 bg-img" style="background-image:url({{ asset('images/' . $post->image) }})">
            </div>
            <div class="col-md-6 align-self-center p-4 ">
                <h3 class="text-success">{{ $post->title }}</h3>
                <p class="lead">{!! $post->description !!}</p>
                <a href="#" class="btn btn-outline-success btn-sm">Learn More</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection