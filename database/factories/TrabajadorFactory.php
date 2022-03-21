<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trabajador;

class TrabajadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreTra'=>$this->faker->name,
            'primerApellidoTra'=>$this->faker->lastname,
            'segundApellidoTra'=>$this->faker->lastname,
            'edadTra'=>$this->faker->numberbetween(18, 55),
            'dniTra'=>$this->faker->numerify('####-####-#####'),
            'clientesAtendidos'=>$this->faker->numberbetween(3, 15),
            'jornadaDeTrabajo'=>$this->faker->randomElement($array = array ('Matutino','Vespertino')),
            'salario'=>$this->faker->numberbetween(5000, 6500),
        ];
    }
}
