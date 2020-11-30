@extends('partials.layout')

<?php //var_dump($posts); die; ?>

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraNews</h1>
            <p class="lead">Veja aqui somente as notícias que o Andrei quer te mostrar.</p>
        </div>
    </div>
    <div class="row mt-3">
        @foreach($posts as $post)
        <div class="col-12">
            <h3>{{ $post->title }}</h3><br>
            <p><strong>{{ $post->summary }}</strong></p><br>
            <p>{{ $post->text }}</p><br>
            @if($post->url_image)
                <img style="max-width:200px" src="{{ asset('storage/posts/' . $post->url_image) }}" class="img-thumbnail mb-2">
            @endif
            <br><br><hr><br>
        </div>
        @endforeach
    </div>
</div>
@endsection
