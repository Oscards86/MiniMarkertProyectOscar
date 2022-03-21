<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Provedor;
use App\Models\Producto;
use App\Models\Trabajador;

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
            ClienteSeeder::class,
            ProvedorSeeder::class,
            ProductoSeeder::class,
            TrabajadorSeeder::class
        ]);
    }
}
