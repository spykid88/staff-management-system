<?php

use Illuminate\Database\Seeder;
use App\contract;


class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(contract::class, 10)->create(); 
    }
}
