<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        self::seedUsers();     
        $this->command->info('Tabla usuarios inicializada con datos!');
    }

    /**
     * Método seedUsers.
     *
     * @return void
     */
    public function seedUsers()
    {
        // \App\Models\User::factory(10)->create();
        
        DB::table('users')->delete();
        DB::table("users")->insert([
            "name" => "Sorjuana de Arco",
            "email" => "sorjuana@gmail.com",
            "password" => bcrypt('sorjuana123')
        ]);
    }

}
