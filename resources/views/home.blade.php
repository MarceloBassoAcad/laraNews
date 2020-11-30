@extends('partials.layout')

<?php //var_dump($posts); die; ?>

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraNews</h1>
            <p class="lead">Notícias em primeira mão.</p>
        </div>
    </div>
    <div class="row mt-3">
        @foreach ($posts as $post)
        <div class="col-12">
            <h3>{{ $post->title }}</h3><br>
            <p><strong>{{ $post->summary }}</strong></p><br>
            <p>{{ $post->text }}</p>
            <br><hr><br>
        </div>
        @endforeach
    </div>
</div>
@endsection
