<?php

use App\StoreSub;
use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       factory(User::class,1000)->create();
       //factory(StoreSub::class,10)->create();
        // $this->call(SeederSubjectTable::class);
       // $this->call(Courseseeder::class);
//        $faker=\Faker\Factory::create();
//        for($i=4; $i<=200;$i++)
//        {
   // php artisan queue:work

//            \App\User::create([
// 'name'=>$faker->name,
// 'address'=>$faker->address,
// 'city'=>$faker->city,
// 'email'=>$faker->email,
// 'password'=>bcrypt('password')

//  ]);
//        }

    }
}
