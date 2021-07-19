<?php
use Faker\Generator as Faker;
use App\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $package = new Package();
            $package->city = $faker->city();
            $package->description = $faker->paragraph();
            $package->destination_img = $faker->imageUrl(360, 360, 'destination', true,);
            $package->days = $faker->numberBetween(7, 21);
            $package->price = $faker->numberBetween(500, 3000);
            $package->date = $faker->dateTimeBetween('-1 week', '+10 week');
            $package->save();
        }
    }
}
