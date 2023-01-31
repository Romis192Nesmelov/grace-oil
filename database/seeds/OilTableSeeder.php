<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Http\Controllers\ParserController;

class OilTableSeeder extends Seeder
{

    public function run()
    {
        $parser = new ParserController();
        $parser->catalogue();
    }
}