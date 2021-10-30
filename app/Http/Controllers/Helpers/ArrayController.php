<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use stdClass;

class ArrayController extends Controller
{
    public function accessible()
    {
        /**
         * Documentação:
         * - The Arr::accessible method determines if the given value is array
         * accessible:
         *
         * Anotação:
         * - O método Arr::accessible determina se valor passado por parâmetro
         * é acessivel como um array.
         * - Basicamente verifica se a variável passada como valor é um array.
         * - Verifica se é um array ou se é uma instância de ArrayAccess.
         *
         * - Retorna: bool
         */

        // Documentação
        $isAccessible = Arr::accessible(['a' => 1, 'b' => 2]);
        // true
        // dd($isAccessible);

        $isAccessible = Arr::accessible(new Collection());
        // true
        // dd($isAccessible);

        $isAccessible = Arr::accessible('abc');
        // false
        // dd($isAccessible);

        $isAccessible = Arr::accessible(new stdClass);
        // false
        // dd($isAccessible);

        return 'Arr::accessible()';
    }


    public function add()
    {
        /**
         * Documentação:
         * - The Arr::add method adds a given key / value pair to an array if
         * the given key doesn't already exist in the array or is set to null:
         *
         * Anotação:
         * - O método Arr::add adiciona um determinado par de chave/valor a um
         * array, se esta chave fornecida ainda não existir ou estiver definida
         * como NULL.
         *
         * - Retorna: array
         */

        // Documentação
        $array = Arr::add(['name' => 'Desk'], 'price', 100);
        // ['name' => 'Desk', 'price' => 100]
        // dd($array);

        $array = Arr::add(['name' => 'Desk', 'price' => null], 'price', 100);
        // ['name' => 'Desk', 'price' => 100]
        // dd($array);


        //Testes
        $meuArray = Arr::add(['name' => 'Desk', 'price' => 50], 'price', 100);
        dd($array);


        return 'Arr::add()';
    }
}
