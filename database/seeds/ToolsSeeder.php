<?php

use Illuminate\Database\Seeder;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tools')->insert(
          [
          'name' -> random(5),
          'description' -> random(50)

        ]);
    }
}
