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
        DB::table('speakers')->insert(
            [
            'name' => 'Pablo Javier Pioli',
            'slug' => 'pablo-javier-pioli',
            'category_name'=> 'it',
            'picture' => 'http://images5.fanpop.com/image/photos/24800000/Gabriel-supernatural-24849754-100-100.jpg',
            'tagline' => 'Ingeniero en sistemas',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
            'video' => 'WYX0sjP6Za8',
            'score' => 20
            ]
        );

        DB::table('speakers')->insert(
            [
            'name' => 'Juan Pablo Ferreyra',
            'slug' => 'juan-pablo-ferreyra',
            'category_name' => 'business',
            'picture' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSafU9ifALucQgBlSjMqD-tS5cD-Ffz64dRI_Ad0Zhx52yZjPFZ',
            'tagline' => 'Docente investigador',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
            'video' => 'WYX0sjP6Za8',
            'score' => 15
            ]
        );

        DB::table('conferences')->insert(
            [
            'title' => 'Southwest Fox',
            'description' => 'Conferencia dedicada a desarrolladores a Visual Fox Pro',
            'date' => '2017-08-10 15:00:00',
            'duration' => 40,
            'speaker_id' => 1,
            'category_name' => 'it'
            ]
        );
            
        DB::table('conferences')->insert(
            [
            'title' => 'Business Process Managment',
            'description' => 'Implementación de tecnologias para la optimización del negocio',
            'date' => '2017-08-11 16:00:00',
            'duration' => 30,
            'speaker_id' => 2,
            'category_name' => 'business'
            ]
        );
    }
}
