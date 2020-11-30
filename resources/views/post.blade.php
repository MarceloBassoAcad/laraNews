@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraNews - Posts</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            @include('partials.errors')

            @if($post->id)
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            @else
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @endif

                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="title">Título</label>
                        <textarea name="title" id="title" rows="1" class="form-control" placeholder="Digite o título da notícia">{{ $post->title }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="summary">Lead</label>
                        <textarea name="summary" id="summary" rows="4" class="form-control" placeholder="Digite o lead da notícia">{{ $post->summary }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="text">Corpo do texto</label>
                        <textarea name="text" id="text" rows="8" class="form-control" placeholder="Digite o corpo do texto">{{ $post->text }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Selecione</option>
                            @foreach($categories as $category)
                                @if(isset($post->category_id))
                                    @if($category->id == $post->category_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Insira apenas se quiser mudar</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                            @if($post->active)
                                <input type="checkbox" name="active" id="active" class="custom-control-input" value="S" checked>
                            @else
                                <input type="checkbox" name="active" id="active" class="custom-control-input" value="S">
                            @endif
                            <label for="active" class="custom-control-label">Ativo</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection