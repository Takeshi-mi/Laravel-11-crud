@extends('admin.layouts.app')
@section('title', 'Criar novo usuário')

@section('content')

<h1>Novo usuário</h1>
@if ($errors->any()) {{--Essa variável $errors já vem no laravel --}}
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach

    </ul>
@endif

    <form action="{{ route('users.store') }}" method="POST">
        <!--<input type='text' name="_token" value="{{ csrf_token() }}"> -->
        <!-- Previne erros. Mas tem uma forma mais simples de fazer isso, com o @csrf
        Indica que é uma requisição válida o token. Senão dá o erro 419. O csrf é um helper do laravel que são métodos disponíveis em todo o projeto-->
        @csrf()
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}"/> {{-- Esse old é um helper do laravel que verifica se existe um valor nessa sessão. --}}
        <input type="email" name="email" placeholder="E-mail" {{ old('email')}} />
        <input type="password" name="password" placeholder="Senha" />
        <button type="submit">Enviar</button>

    </form>
@endsection