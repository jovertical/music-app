<?php

use App\User;
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
        $artists = factory(User::class, 20)
            ->create(['artist_verified_at' => now()]);

        foreach ($artists as $key => $artist) {
            $artist->addMediaFromUrl("https://loremflickr.com/240/240/singers?random=${key}")
                ->toMediaCollection('avatars');

            $artist->addMediaFromUrl("https://loremflickr.com/640/320/abstract?random=${key}")
                ->toMediaCollection('covers');
        }
    }
}
