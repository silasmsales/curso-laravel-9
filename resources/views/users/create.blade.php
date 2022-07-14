@extends('layouts.app')

@section('title', 'Cadastrar novo usuário')
    
@if ($errors->any)
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@section('content')
    <h1>Novo Usuário</h1>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="email" name="email"  value="{{ old('email') }}">
        <input type="password" name="password" id="">
        <button type="submit">Cadastrar</button>
    </form>
@endsection