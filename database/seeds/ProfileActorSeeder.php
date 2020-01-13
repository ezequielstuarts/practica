<?php

use Illuminate\Database\Seeder;

class ProfileActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('covers')->insert([
            'url_profile' => '',
            'actor_id' => 1,
        ]);
    }
}
