<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

//Criei esse controller assim: php artisan make:controller Admin/UserController
class UserController extends Controller
{
    public function index()
    {
        //Chamando um só pra testar.
        //$user = User::first();
        //return "Olá {$user->name}! ({$user->email})";  
        //Não é certo retornar string. Salvo raras exceções. Vamos então retornar uma view
        // Um dos jeitos é passando um array com as variáveis, para não dar erro. O outro é usando um método pronto compact que já faz isso
        //return view ('admin.user.index' , ['user' => $user]);

        //Agora vamos fazer do jeito real, listando todos os usuários com paginação
        $users = User::paginate(20); // User::all(); O laravel já te entrega a paginação de bandeija. Depois é só ir no index e colocar  {{ $users->links() }}
        //dd($users); // Dump and die. É pra debugar. Joga e mata o processo

        return view ('admin.user.index', compact('users'));

    }

    public function create()
    {
        //Convenção deixar a view com o mesmo nome do método
        return view('admin.user.create');
    }

    public function store(StoreUserRequest $request)  //tá trabalhando com dependência injection
    {

        //Com o laravel eu evito ter que fazer isso de forma verbosa. Posso colocar injeção de dependência direto na função
        // $request = new Request;
        /* Uma forma de fazer é assim:
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();
        */
        //Mas o Laravel tem uma forma mais fácil de fazer isso, com o método create, que pede um array com os dados que você quer.
      //  dd($request->all());//dump and die
        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!'); // acesso ao flash
    }
}
