@extends('layouts.app')

@section('title', 'Detalhe do usuários')

@section('content')
<h1>Detalhes do usuário </h1>
<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->created_at }}</li>
</ul>

<form action="{{route('users.destroy', $user->id)}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>

@endsection
