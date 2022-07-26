<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            ['name' => 'Masa 1'],
            ['name' => 'Masa 2'],
            ['name' => 'Masa 3'],
            ['name' => 'Masa 4'],
            ['name' => 'Masa 5'],
            ['name' => 'Masa 6'],
            ['name' => 'Masa 7'],
            ['name' => 'Masa 8'],
            ['name' => 'Masa 9'],
            ['name' => 'Masa 10'],
            ['name' => 'Loca 1'],
            ['name' => 'Loca 2'],
            ['name' => 'Loca 3'],
            ['name' => 'Loca 4'],
            ['name' => 'Loca 5']
        ]);
    }
}
