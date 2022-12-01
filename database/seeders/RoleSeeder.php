<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new Role();
        $manager->name = 'Admin';
        $manager->slug = 'admin';
        $manager->save();

        $moderator = new Role();
        $moderator->name = 'Moderator';
        $moderator->slug = 'moderator';
        $moderator->save();

        $reader = new Role();
        $reader->name = 'Reader';
        $reader->slug = 'reader';
        $reader->save();
    }
}
