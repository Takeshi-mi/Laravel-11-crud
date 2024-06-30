@extends('admin.layouts.app')
@section('title', "Listagem de Usuários")

@section('content')

<h1>Usuários</h1>

<a href="{{ route('users.create')}}">Novo</a>
<!-- Eu poderia passar href="/users/create. Mas é muito melhor passar a referência pelo nome, pois se um dia eu mudar a url é mais fácil de dar manutenção no código-->

//Ao invés de deixar aqui vou colocar dentro dos components para poder reutilizá-lo
{{-- @if (session()->has('success')){{-- session também é um helper. A mensagem do tipo success eu criei no UserController. --}}
    {{-- <div>{{session('success')}}</div>     --}}
{{-- @endif //Essa impressão trabalha com a função do php html edge less. Não permite fazer o ataque xss (Cross Site Scripting) --}}

<x-alert/>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user) {{-- Essa variável $users veio da classe UserController com o compact--}}
        
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

{{ $users->links() }} {{-- paginação. Foi definida no UserController com $users = User::paginate(10);--}}

@endsection