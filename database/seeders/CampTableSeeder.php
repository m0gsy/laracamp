<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camps;


class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $camps = [
           [
               'title' => 'PHP For Beginner',
               'slug' => 'php-for-beginner',
               'price' => 200,
               'created_at' => date('Y-m-d H:i:s', time()),
               'updated_at' => date('Y-m-d H:i:s', time()),
           ],
            [
                'title' => 'First Time',
                'slug' => 'first-time',
                'price' => 200,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
       ];

       //1st method
       foreach ($camps as $key => $camp) {
           Camps::create($camp);
       }

       //2nd method
       //Camps::insert($camps);
      
    }
}
