<?php


use App\Employee;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB; 
//use App\Employee;



class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Employee::class, 50)->create();
    }
}
