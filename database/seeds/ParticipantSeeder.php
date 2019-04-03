<?php

use Illuminate\Database\Seeder;
use App\Participant;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->truncate();

        $participant = new Participant;
        $participant->naam = 'Jos Van Gompel';
        $participant->tel_nr = '0487665543';
        $participant->email = 'jos@gmail.com';
        $participant->fact_adres = 'Atealaan 34a, 2200 Herentals';
        $participant->btw_nr = 'BE0873.566.776';
        $participant->workshop_id = 1;
        $participant->save();
    }
}
