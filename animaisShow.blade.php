@extends('layout')
@section('content')

<form action="{{route('petshop.destroy',['animal'=>$animal->id])}}" method="POST">
@csrf
@method('DELETE')
<legend>Carro</legend>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tipo animal</label>
    <input type="text" id="disableTextInput" name="Tipo_animal" class="form-control" placeholder="{{ $animal->marca }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tipo atendimento</label>
    <input type="text" id="disableTextInput" name="Tipo_atendimento" class="form-control"placeholder="{{ $animal->marca }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Preço</label>
    <input type="text" id="disableTextInput" name="Preco" class="form-control"placeholder="{{ $animal->marca }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Data atendimento</label>
    <input type="text" id="disableTextInput" name="Data_atendimento" class="form-control"placeholder="{{ $animal->marca }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tutor</label>
    <input type="text" id="disableTextInput" name="Tutor" class="form-control"placeholder="{{ $animal->marca }}">
</div>

<a href="{{route('petshop.index')}}"><button type="button" class="btn btn-primary">Voltar</button></a>
        <button type="submit" class="btn btn-danger">Excluir</button>


</div>
</form>
@endsection