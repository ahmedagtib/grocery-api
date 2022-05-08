<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
class UserSeeder extends Seeder
{
    protected $users;

    public function __construct(){
        $this->users = [
            [
                'name'     => 'Olive Yew',
                'email'    => 'exmple1@gmail.com',
                'password' => Hash::make(123456),
                'phone'    =>' 0690000888',
                'avatr'    =>  asset('storage/avatr/user1.jpg'),
                'address'  => '1954 Denver Avenue Riverside California',
                'points'   => 12
            ],
            [
                'name'     => 'Allie Grater',
                'email'    => 'exmple2@gmail.com',
                'password' => Hash::make(123456),
                'phone'    => '0690000888',
                'avatr'    =>  asset('storage/avatr/user2.jpg'),
                'address'  => '968 Rhode Island Avenue Washington Washington DC',
                'points'   => 0
            ]
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert($this->users);

        foreach(User::all() as $key=>$item){
              if($key == 1){
                $role = new Role();
                $role->role = 'admin';
                $item->role()->save($role);
              }else{
                $role = new Role();
                $role->role = 'user';
                $item->role()->save($role);
              }
        }
    }
}
