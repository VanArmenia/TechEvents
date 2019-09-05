<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Category;
use App\Event;
use App\User;
use App\ZipCode;
use App\State;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('events')->truncate();

        $categories = Category::all();
        $users = User::all();
        $states = State::all();
        $faker = Faker::create();

        foreach(range(1,50) as $index)
        {

            $user = $users->random();

            $zipCode = ZipCode::where('zip', $user->zip)->first();

            $category = $categories->random();

            Event::create([
                'user_id'       => $user->id,
                'category_id'   => $category->id,
                'name'          => $faker->sentence(5),
                'oneliner'      => $faker->sentence(5),
                'published'     => rand(0,1),
                'start_date'    => $faker->dateTimeBetween('now', '+45 days')->format("Y-m-d H:i:s"),
                'start_time'    => $faker->dateTimeBetween('now', '+45 days')->format("Y-m-d H:i:s"),
                'max_attendees' => rand(2,5),
                'venue'         => $faker->company,
                'street'        => $faker->streetAddress,
                'city'          => $user->city,
                'state_id'      => $user->state_id,
                'zip'           => $user->zip,
                'lat'           => $zipCode->lat,
                'lng'           => $zipCode->lng,
                'description'   => $faker->paragraphs(3, true),
            ]);

        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
