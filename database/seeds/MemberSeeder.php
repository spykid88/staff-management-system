<?php

use Illuminate\Database\Seeder;
use App\member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(member::class, 10)->create(); 
    }
}
