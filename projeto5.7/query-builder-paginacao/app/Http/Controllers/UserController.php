<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
/*        $users = DB::table('users')
            ->select('users.id', 'users.name', 'users.status')
            ->where('users.status', '=', '1')
            ->orderBy('name')
            //->oldest('name') // ASC order
            //->latest('name') // DESC order
            //->inRandomOrder() // RAND order
            ->limit(10)
            ->offset(10)
            ->get();
        foreach ($users as $user) {
            echo "#{$user->id} | {$user->name} | {$user->status}<br>";
        }*/

        $users = DB::table('users')
            ->selectRaw('users.id, users.name, CASE WHEN users.status = 1 then "ATIVO" else "INATIVO" END as status_description')
            ->whereRaw('(SELECT COUNT(1) FROM addresses a WHERE a.user = users.id) > 3')
            ->orderByRaw('updated_at - created_at', 'ASC')
            ->get();
        foreach ($users as $user) {
            echo "#{$user->id} | {$user->name} | {$user->status_description}<br>";
        }
        var_dump($users);
    }
}
