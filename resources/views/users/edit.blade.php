@extends('layouts.app')

@section('title', 'Editar usuário {{ $user->name }}')
    
@if ($errors->any)
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="name" value="{{  $user->name }}">
        <input type="email" name="email"  value="{{  $user->email }}">
        <input type="password" name="password" id="">
        <button type="submit">Cadastrar</button>
    </form>
@endsection