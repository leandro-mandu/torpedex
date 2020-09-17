<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
         'name' => Str::random(4),
         'email' => Str::random(4).'@gmail.com',
         'password' => Hash::make('password'),
     ]);
//      User::factory(50)->create();
        DB::table('users')->insert([
           'name' => Str::random(4),
           'email' => Str::random(4).'@gmail.com',
           'password' => Hash::make('password'),
       ]);
       return;
        DB::table('categoria_sms')->insert([
          'title' => 'Grátis',
          'keywords' => 'sms, gratis',
          'description' => 'Mensagens enviadas gratuitamentes da index'
        ]);

        DB::table('categoria_sms')->insert([
          'title' => 'Marketing',
          'keywords' => 'sms, marketing',
          'description' => 'Mensagens enviadas com o intuito de marketing'
        ]);

        DB::table('categoria_sms')->insert([
          'title' => 'Aviso',
          'keywords' => 'sms, aviso',
          'description' => 'Mensagens enviadas com o intuito de aviso'
        ]);

        DB::table('categoria_sms')->insert([
          'title' => 'Segurança',
          'keywords' => 'sms, segurança',
          'description' => 'Mensagens enviadas com o intuito de segurança'
        ]);

        DB::table('categoria_sms')->insert([
          'title' => 'Info',
          'keywords' => 'sms, informações',
          'description' => 'Mensagens enviadas com o intuito de informar'
        ]);

        DB::table('sms')->insert([
          'number_ddd' => '21',
          'number' => '999999999',
          'name' => 'john',
          'content' => 'texto da Mensagem',
          'status' => '1',
          'categoria_id' => '1'
        ]);

        DB::table('sms')->insert([
          'number_ddd' => '22',
          'number' => '999998999',
          'name' => 'johns',
          'content' => 'texto da Mensagem',
          'status' => '0',
          'categoria_id' => '2'
        ]);

        DB::table('sms')->insert([
          'number_ddd' => '22',
          'number' => '999698999',
          'name' => 'johns',
          'content' => 'texto da Mensagem',
          'status' => '1',
          'categoria_id' => '2'
        ]);

        DB::table('sms')->insert([
          'number_ddd' => '42',
          'number' => '999698999',
          'name' => 'johnss',
          'content' => 'texto da Mensagem',
          'status' => '0',
          'categoria_id' => '1'
        ]);
        
    }
}
