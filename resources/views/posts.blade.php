@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraNews - Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success">Inserir</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <th width="6%">ID</th>
                    <th width="6%">Ativo</th>
                    <th width="25%">Título</th>
                    <th width="18%">Categoria</th>
                    <th width="15%">Data</th>
                    <th width="30%">Ações</th>
                </tr>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ ($post->active) ? 'Sim' : 'Não' }}</td>
                        <td>{{ $post->title }}</td>
                        @if(isset($post->category))
                            <td>{{ $post->category->name }}</td>
                        @else
                            <td>Nenhuma</td>
                        @endif
                        <td>{{ date_format($post->created_at, "d/m/Y - H:i") }}</td>
                        <td>
                            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-info">Editar</a>
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection