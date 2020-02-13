<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $i) {
            factory(\App\Models\User::class)->create([
                'email' => "user{$i}@example.com",
            ]);
        }
    }
}
