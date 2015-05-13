<?php namespace Boss\Services;
/*
* Fakers.php for bosspos1.3
* By: natetheaverage
* created: 4/5/15
*/
use Faker\Factory as Faker;

class Fakers {




    /**
     * Generate faker input for registering fake users
     *
     * @return array
     */
    public function userRegistration()
    {
        $faker = Faker::create();

        $fakeInfo = [
            'id' => '',
            'username' => $faker->userName,
            'email' => $faker->safeEmail,                        //->unique();
            'password' => bcrypt('password'),                    //60
            'first_name' => $faker->firstName,                //20
            'last_name' => $faker->lastName,                    //20
            'phone' => $faker->phoneNumber,
            'address_street' => $faker->streetAddress,            //25
            'address_city' => $faker->city,                    //25
            'address_state' => $faker->state,                    //25
            'address_zip' => $faker->numberBetween(11111, 99999),
            'last_four_ss' => $faker->numberBetween(1000, 9999),
            'title' => $faker->safeColorName,                    //30
            'user_type' => 'super',                                //30
            'wage' => $faker->numberBetween(10, 30),
            'dob' => $faker->numberBetween(12341234, 98989876),
            'ss' => 111222333,
            'promotion_approval' => $faker->boolean(),
            'point_member_id' => $faker->numberBetween(111111111111, 999999999999),
            'mmreg_id' => $faker->numberBetween(11111111111, 999999999999),
            'identification_id' => $faker->numberBetween(111111111, 999999999),
            'identification_type' => $faker->safeColorName,
            'identification_state'  => $faker->state,
            'identification_expiration' => $faker->numberBetween(111111111, 999999999),
            'location_id' => $faker->numberBetween(111111111, 999999999),
            'created_date' => $faker->numberBetween(12341234, 98989876),
            'created_by' => $faker->numberBetween(111111111, 999999999),
            'active_member' => $faker->numberBetween(0, 3),
            'archive' => $faker->numberBetween(111111111, 999999999),
            'taggable_type' => $faker->numberBetween(111111111, 999999999),
            'taggable_id' => $faker->numberBetween(111111111, 999999999),
            'deleted_at' => $faker->numberBetween(111111111, 999999999),
            //'remember_token' => $faker->numberBetween(111111111, 999999999),
            'created_at' => $faker->numberBetween(111111111, 999999999),
            'updated_at' => $faker->numberBetween(111111111, 999999999),
        ];

        //dd($fakeInfo);
        return $fakeInfo;
    }

}