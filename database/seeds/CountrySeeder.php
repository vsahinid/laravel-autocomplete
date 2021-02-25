<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $json = File::get("database/data/Countries.json");
        $data = json_decode($json);
        
        foreach ($data as $obj) {
            Country::create(array(
                'name' => $obj->name
            ));
        }
    }
}