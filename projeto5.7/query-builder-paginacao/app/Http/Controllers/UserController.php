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

/*        $users = DB::table('users')
            ->selectRaw('users.id, users.name, CASE WHEN users.status = 1 then "ATIVO" else "INATIVO" END as status_description')
            ->whereRaw('(SELECT COUNT(1) FROM addresses a WHERE a.user = users.id) > 3')
            ->orderByRaw('updated_at - created_at', 'ASC')
            ->get();
        foreach ($users as $user) {

        }
        var_dump($users);*/

/*        DB::table('users')->where('id', '<', '500')->chunkById(100, function($users) {
            foreach ($users as $user) {
                echo "#{$user->id} | {$user->name} | {$user->status}<br>";
            }
            echo "<hr>";
        });*/

        $users = DB::table('users')
            //->whereIn('users.status', [0,1])
            //->whereNotIn('users.status', [0, 1])
            //->whereNull()
            //->whereNotNull('users.name')
            //->whereColumn('created_at', '=', 'updated_at')
            //->whereDate('created_at', '>', '2021-21-06 18:33')
            ->whereDay('created_at', '=', '01')
            ->whereMonth('created_at', '=', '01')
            ->whereYear('created_at', '=', '01')
            ->whereTime('created_at', '=', '17:33')
            ->get();
        foreach ($users as $user) {
            echo "#{$user->id} | {$user->name} | {$user->status}<br>";
        }

    }
}
