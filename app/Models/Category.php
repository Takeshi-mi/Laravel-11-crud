<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model

//Boa prática pra o nome da tabela é pegar o nome do model e coloca no plural. Exemplo: Category - categories

// comando: php artisan make:model Catagory
{
    use HasFactory;

    //protected $table = 'categories';
    // o que você colocar aqui é bom mudar na pasta migrations
}
