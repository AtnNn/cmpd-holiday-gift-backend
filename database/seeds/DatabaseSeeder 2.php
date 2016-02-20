<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(AffiliateTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HouseholdTableSeeder::class);
        $this->call(HouseholdAddressSeeder::class);
        $this->call(HouseholdPhoneSeeder::class);
        $this->call(ChildTableSeeder::class);

        Model::reguard();
    }
}