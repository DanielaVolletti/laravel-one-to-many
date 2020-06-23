<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Location;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Location::class, 20)
              -> create()
              -> each(function($location){
                  $employee = Emplooyee::inRandomOrder() -> take(rand(1-5)) -> get();
                  $location -> employee() -> attach($employee);
              })
    }
}
