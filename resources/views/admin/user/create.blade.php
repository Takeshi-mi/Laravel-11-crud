@extends('admin.layouts.app')
@section('title', 'Criar novo usuário')

@section('content')

<h1>Novo usuário</h1>

{{-- @include('admin.include.errors')  Com isso você inclui o conteúdo de outra view dentro dessa. É útil em casos específicos, como uma view muito grande e não queremos repeti-la--}}
<x-alert>
    
</x-alert> {{-- para chamar o componente basta colocar um x- e o nome--}}

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