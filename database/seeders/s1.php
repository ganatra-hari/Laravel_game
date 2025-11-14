<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\bolt;

class s1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        bolt::table('users')->insert([
                'name'=>'yash',
                'email'=>'yash@gmail.com',
                'password'=>'yash12',
        ]);

    $f=Faker::create();
    for ($i=0; $i < 10; $i++) { 
        bolt::table('users')->insert([
            'name'=>$f->name,
            'email'=>$f->email,
            'password'=>$f->password,
        ]);
    }       
}
}