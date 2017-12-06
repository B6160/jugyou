<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert("insert into items (name,price,img) value (?,?,?)",[
            "キーボード", 6000,"/img/1.png"
        ]);
    }
}
