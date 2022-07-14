@extends('layouts.app')

@section('title', 'Editar usuário {{ $user->name }}')
    
@include('includes.validations-forms')

@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('put')
        @include('users._partials.form')
    </form>
@endsection