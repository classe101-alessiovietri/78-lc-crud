<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Pasta;

class PastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pastas = config('pasta');

        Pasta::truncate();

        foreach ($pastas as $pastaElement) {
            $pasta = new Pasta();
            $pasta->src = $pastaElement['src'];
            $pasta->title = $pastaElement['titolo'];
            $pasta->type = $pastaElement['tipo'];
            $pasta->cooking_time = $pastaElement['cottura'];
            $pasta->weight = $pastaElement['peso'];
            $pasta->description = $pastaElement['descrizione'];
            $pasta->save();
        }
    }
}
