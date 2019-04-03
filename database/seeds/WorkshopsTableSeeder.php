<?php

use App\Workshop;
use Illuminate\Database\Seeder;

class WorkshopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshops')->truncate();

        $workshop = new Workshop;
        $workshop->naam = "Workshop 1";
        $workshop->datum = "2019-04-22";
        $workshop->uur = "18:00:00";
        $workshop->locatie = 'Café De Vuilen Hoek, Tramweglei 23, 2000 Antwerpen';
        $workshop->doelgroep = 'Personen met dementie';
        $workshop->kostprijs = 20;
        $workshop->deelnemers = 10;
        $workshop->beschrijving = 'Lorem ipsum dolers amet init.';
        $workshop->save();
    }
}
