<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersIdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach( self::$arrayUsersIdiomas as $userIdioma ) {
            DB::table('users_idiomas')->insert([
                'id' => $userIdioma['id'],
                'user_id' => $userIdioma['user_id'],
                'idioma_id' => $userIdioma['idioma_id']
            ]);
        }
        $this->command->info('¡Tabla users_idiomas inicializada con datos!');

    }
    public static $arrayUsersIdiomas = [
        ['id'=>1,'user_id' => 1, 'idioma_id' => 1],
        ['id'=>2,'user_id' => 1, 'idioma_id' => 2],
        ['id'=>3,'user_id' => 2, 'idioma_id' => 1],
        ['id'=>4,'user_id' => 3, 'idioma_id' => 3],
        ['id'=>5,'user_id' => 4, 'idioma_id' => 2],
        ['id'=>6,'user_id' => 4, 'idioma_id' => 3],
        ['id'=>7,'user_id' => 5, 'idioma_id' => 1],
        ['id'=>8,'user_id' => 5, 'idioma_id' => 2],
        ['id'=>9,'user_id' => 5, 'idioma_id' => 3],
        ['id'=>10,'user_id' => 6, 'idioma_id' => 1],
        ['id'=>11,'user_id' => 6, 'idioma_id' => 2],
        ['id'=>12,'user_id' => 6, 'idioma_id' => 3],
        ['id'=>13,'user_id' => 7, 'idioma_id' => 1],
        ['id'=>14,'user_id' => 7, 'idioma_id' => 2],
        ['id'=>15,'user_id' => 7, 'idioma_id' => 3],
        ['id'=>16,'user_id' => 8, 'idioma_id' => 1],
        ['id'=>17,'user_id' => 8, 'idioma_id' => 2],
        ['id'=>18,'user_id' => 8, 'idioma_id' => 8],
        ['id'=>19,'user_id' => 9, 'idioma_id' => 9],
        ['id'=>20,'user_id' => 9, 'idioma_id' => 10],
        ['id'=>21,'user_id' => 9, 'idioma_id' => 11],
        ['id'=>22,'user_id' => 10, 'idioma_id' => 12],
        ['id'=>23,'user_id' => 10, 'idioma_id' => 13],
        ['id'=>24,'user_id' => 10, 'idioma_id' => 14],
        ['id'=>25,'user_id' => 10, 'idioma_id' => 15],
        ['id'=>26,'user_id' => 10, 'idioma_id' => 16],
        ['id'=>27,'user_id' => 10, 'idioma_id' => 17]
    ];
}
