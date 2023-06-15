@extends('layouts.main_layout')

@section('content')
@yield('content')

<div class="container">
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
<h1 class="ms-5 mt-5">Álbuns</h1>

<br>
<div class="row">

<div class="col">
    
   <form method="GET" class="ms-5">
        <select class="custom-select" name="nome_album" onchange="this.form.submit()">
            <option value="" selected>Todos os Álbuns</option>
            @foreach ($allAlbuns as $item)
                <option @if ($item->nome_album == request()->query('nome_album')) selected @endif value="{{ $item->nome_album }}">
                    {{ $item->nome_album }}</option>
            @endforeach
        </select>
    </form>  
</div>
    <div class="col">
        <form method="GET" class="ms-5">
        <input class="" name="search" value="{{ request()->query('search') }}" placeholder="Procurar">
        <button class="btn btn-secondary">Procurar</button>
    </form>
    </div>
    </div>
</div>

<br>

<table class="table ms-5 me-5">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Álbum</th>
        <th scope="col">Imagem</th>
        <th scope="col">Data de Lançamento</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
<tbody>
    @foreach ($allAlbuns as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>

            <td>
                {{ $item->nome_album }}
            </td>
            <td>
                <img width="100px" height="100px"
                    src="{{ $item->imagem_algum ? asset($item->imagem_algum) : asset('Não disponível') }}"
                    alt="">
                </td>

            <td>{{ $item->data_lancamento }}</td>
            <td>
                <a href="{{ route('criar_album', $item->id) }}"><button class="btn btn-info">Criar</button></a>
                <a href="{{ route('atualizar_album', $item->id) }}"><button class="btn btn-info">Atualizar</button></a>
                <a href="{{ route('eliminar_album', $item->id) }}"><button class="btn btn-danger">Eliminar</button></a>
            </td>
        </tr>
    @endforeach


</tbody>
</table>

@yield('endcontent')
@endsection


