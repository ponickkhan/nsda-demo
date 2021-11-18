<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use database\seeds\NotesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersAndNotesSeeder::class,
            MenusTableSeeder::class,
            FolderTableSeeder::class,
            ExampleSeeder::class,
            BREADSeeder::class,
            EmailSeeder::class,
        ]);
    }
}
