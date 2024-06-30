@if (session()->has('success')){{-- session também é um helper. A mensagem do tipo success eu criei no UserController.--}}
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{session('success')}}
    </div>  
@endif {{--Essa impressão trabalha com a função do php html edge less. Não permite fazer o ataque xss (Cross Site Scripting)--}}



@if (session()->has('message')){{-- session também é um helper. A mensagem do tipo success eu criei no UserController.--}}
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
        {{session('message')}}
    </div>  

@endif
@if (session()->has('error')){{-- session também é um helper. A mensagem do tipo success eu criei no UserController.--}}
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        {{session('error')}}
    </div>  
@endif

@if ($errors->any()) {{--Essa variável $errors já vem no laravel --}}
    <ul>
        @foreach ($errors->all() as $error)
            <li class="text-red-500">{{ $error}}</li>
        @endforeach

    </ul>
@endif