@extends('layouts.main_layout')

@section('content')
@yield('content')

<h1>Criar álbum</h1>
<form method="POST" action="{{ route('criar_album') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="idAlbum" class="form-label">Id</label>
        <input type="text" class="form-control" name="n_album" value="" id="id_album"
            aria-describedby="idAlbumHelp">
    </div>

    <div class="mb-3">
        <label for="nomeAlbum" class="form-label">Álbum</label>
        <input type="text" class="form-control" name="nome_album" value="" id="nome_album"
            aria-describedby="albumHelp">
    </div>

    <div class="mb-3">
        <label for="photo" class="form-label">Imagem</label>
        <input value="" name="imagem_album" type="file" accept="images/*" class="form-control" id="imagem album">
        <input type="hidden" name="imagem_album">
    </div>
    <div class="mb-3">
        <label for="dataLancamento" class="form-label">Data de lançamento</label>
        <input type="date" name="date"  class="form-control" id="data_lancamento">
    </div>

    <a href="{{ route('albuns_page') }}"><button type="submit" class="btn btn-primary">Submit</button></a>
</form>

@yield('endcontent')
@endsection



