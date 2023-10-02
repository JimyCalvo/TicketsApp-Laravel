<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createMultipleRoles = [
            ['rol'=>'Técnicos '],
            ['rol'=>'Tickets'],
            ['rol'=>'Clientes']
        ];
        DB::table('rols')->insert($createMultipleRoles);
    }
}
