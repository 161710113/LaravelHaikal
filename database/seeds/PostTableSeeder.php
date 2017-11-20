<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        	['title'=>'Tips Cepat Jomblo', 'content'=>'lorem ipsum'],
        	['title'=>'Haruskah Anda Jomblo?', 'content'=>'lorem ipsum'],
        	['title'=>'Membangun Visi Misi Jomblo', 'content'=>'lorem ipsum']
        ];
        //masukan data ke database
        DB::table('post')->insert($posts);
    }
}
