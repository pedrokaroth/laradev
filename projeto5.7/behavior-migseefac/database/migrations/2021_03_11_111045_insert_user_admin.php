<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertUserAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $email = env('ADMIN_EMAIL', 'admin@laraveldeveloper.com.br');
        $password = bcrypt(env('ADMIN_PASSWORD', 'admin@123'));
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => $email,
            'password' => $password
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $email = env('ADMIN_EMAIL', 'admin@laraveldeveloper.com.br');
        DB::delete('DELETE FROM users WHERE email = ?', [$email]);
    }
}
