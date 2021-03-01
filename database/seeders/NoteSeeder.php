<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

/**
 * Class NoteSeeder
 * @package Database\Seeders
 */
class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run ()
    {
        Note::factory()
            ->times(50)
            ->create();

    }
}
