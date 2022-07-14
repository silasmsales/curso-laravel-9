@extends('layouts.app')

@section('title', 'Cadastrar novo usuário')
    
@include('includes.validations-forms')

@section('content')
    <h1>Novo Usuário</h1>
    <form action="{{ route('users.store') }}" method="post">
        @include('users._partials.form')
    </form>
@endsection