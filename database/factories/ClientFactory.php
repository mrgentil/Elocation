<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ville = $this->faker->city;
        $pays = $this->faker->country;
        return [
            "name" => $this->faker->lastName,
            "lastname"=> $this->faker->firstName,
            "sexe" => array_rand(["F", "H"], 1),
            "date_naissance" => $this->faker->dateTimeBetween("1980-01-01", "2001-12-30"),
            "lieu_naissance"=>  "{$pays}, {$ville}",
            "nationalite"=> $this->faker->country,
            "pays"=> $pays,
            "ville"=> $ville,
            "adresse"=> $this->faker->address,
            "telephone1"=> $this->faker->phoneNumber,
            "telephone2"=> $this->faker->phoneNumber,
            "pieceIdentite"=> array_rand(["CARTE ELECTEUR", "PASSPORT", "PERMIS DE CONDUIRE"], 1),
            "noPieceIdentite"=> $this->faker->creditCardNumber,
        ];
    }
}
