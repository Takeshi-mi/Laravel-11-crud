@extends('admin.layouts.app')
@section('title', "Listagem de Usuários")

@section('content')
<h1>Usuários</h1>
<a href="{{ route('users.create')}}">Novo</a>
<!-- Eu poderia passar href="/users/create. Mas é muito melhor passar a referência pelo nome, pois se um dia eu mudar a url é mais fácil de dar manutenção no código-->
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td></td>
            </tr>

        @empty <!--caso esteja vazio. Funciona por causa do forelse. Ao invés de ter usado o foreach.-->
        <tr>
            <td colspan="100">Nenhum usuário no banco</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $users->links() }}

@endsection