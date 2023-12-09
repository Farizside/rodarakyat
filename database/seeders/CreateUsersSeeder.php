<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin',
               'nik'=>'0',
               'email'=>'admin@rodarakyat.com',
               'type'=> 1,
               'password'=> bcrypt('123456'),
               'alamat'=>'0',
               'no_hp'=>'0',
            ],
            [
               'name'=>'Fariz',
               'nik'=>'1',
               'email'=>'fariz@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
               'alamat'=>'1',
               'no_hp'=>'1',
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}