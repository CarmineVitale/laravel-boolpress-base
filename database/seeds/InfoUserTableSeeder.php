<?php

use Illuminate\Database\Seeder;
use App\InfoUser;
use App\User;
use Faker\Generator as Faker;

class InfoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            $newInfo = new InfoUser();

            $newInfo->phone = $faker->phoneNumber();
            $newInfo->image = $faker->imageUrl(200, 200);
            $newInfo->address = $faker->streetAddress();
            $newInfo->user_id = $user->id;

            $newInfo->save();
        }
    }
}
