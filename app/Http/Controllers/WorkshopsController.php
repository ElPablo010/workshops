<?php

namespace App\Http\Controllers;

use App\Workshop;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkshopsController extends Controller
{
    public function home(REQUEST $request) {
        $today = date("Y-m-d");
        if($request->has('doelgroep')) {
            $workshops = DB::table('workshops')
            ->where('doelgroep',$request->doelgroep)
            ->whereDate('datum','>',$today)
            ->orderBy('datum', 'asc')
            ->get();
        } else {
            $workshops = DB::table('workshops')
            ->whereDate('datum','>',$today)
            ->orderBy('datum', 'asc')
            ->get();
        }
        $deelnemers = DB::table('participants')->get();
        return view('frontpage', compact('workshops', 'deelnemers'));
    }

    public function admin() {
        return view('admin');
    }

    public function create() {
        return view('create');
    }

    public function store(REQUEST $request) {
        $request->validate([
            'naam' => 'required',
            'datum' => 'required|date',
            'uur' => 'required',
            'locatie' => 'required',
            'doelgroep' => 'required',
            'kostprijs' => 'required|numeric',
            'deelnemers' => 'required|numeric',
            'beschrijving' => 'required'
        ]);
        $new_workshop = new Workshop;
        $new_workshop->naam = $request->naam;
        $new_workshop->datum = $request->datum;
        $new_workshop->uur = $request->uur;
        $new_workshop->locatie = $request->locatie;
        $new_workshop->doelgroep = $request->doelgroep;
        $new_workshop->kostprijs = $request->kostprijs;
        $new_workshop->deelnemers = $request->deelnemers;
        $new_workshop->beschrijving = $request->beschrijving;
        $new_workshop->save();
        return redirect()->route('workshops.create');
    }

    public function details($id) {
        $workshop = Workshop::find($id);
        return view('details', compact('workshop'));
    }

    public function overview(REQUEST $request) {
        if(request()->has('doelgroep')) {
            if($request->doelgroep == 'alle') {
                $workshops = DB::table('workshops')
                ->orderBy('datum', $request->volgorde)
                ->get();  
            } else {
                $workshops = DB::table('workshops')
                ->orderBy('datum', $request->volgorde)
                ->where('doelgroep', $request->doelgroep)
                ->get();
            } 
        } else {
            $workshops = DB::table('workshops')->get();
        }
        $deelnemers = DB::table('participants')->get();
        return view('overview', compact('workshops', 'request', 'deelnemers'));
    }

    public function overview_filter(REQUEST $request) {
        dd($request->doelgroep);
    }

    public function edit($id) {
        $workshop = Workshop::find($id);
        return view('update', compact('workshop'));
    }

    public function update(REQUEST $request, $id) {
        $request->validate([
            'naam' => 'required',
            'datum' => 'required|date',
            'uur' => 'required',
            'locatie' => 'required',
            'doelgroep' => 'required',
            'kostprijs' => 'required|numeric',
            'deelnemers' => 'required|numeric',
            'beschrijving' => 'required'
        ]);
        // formulier data seven in databank
        $workshop = Workshop::find($id);
        $workshop->naam = $request->naam;
        $workshop->datum = $request->datum;
        $workshop->uur = $request->uur;
        $workshop->locatie = $request->locatie;
        $workshop->doelgroep = $request->doelgroep;
        $workshop->kostprijs = $request->kostprijs;
        $workshop->deelnemers = $request->deelnemers;
        $workshop->beschrijving = $request->beschrijving;
        $workshop->save();
        // terug naar overzicht
        return redirect()->route('workshops.overview');
    }

    public function delete($id)
    {
        $workshop = Workshop::find($id);
        $workshop->delete();
        return redirect()->route('workshops.overview');
    }

    public function workshop_register($id) {
        $workshop_id = $id;
        return view('workshop_register', compact('workshop_id'));
    }

    public function workshop_register_confirm(REQUEST $request, $workshop_id) {
        $request->validate([
            'naam' => 'required',
            'email' => 'required|email',
            'tel_nr' => 'required',
            'fact_adres' => 'required',
            'btw_nr' => 'required'
        ]);

        $deelnemer = new Participant;
        $deelnemer->naam = $request->naam;
        $deelnemer->email = $request->email;
        $deelnemer->tel_nr = $request->tel_nr;
        $deelnemer->fact_adres = $request->fact_adres;
        $deelnemer->btw_nr = $request->btw_nr;
        $deelnemer->workshop_id = $workshop_id;
        $deelnemer->save();

        return redirect()->route('workshops.confirmation.message');
    }

    public function workshop_confirmation_message() {
        return view('thankyou');
    }

    public function remove_participant($id) {
        $deelnemer = Participant::find($id);
        $workshop_id = $deelnemer->workshop_id;
        $deelnemer->delete();
        return redirect()->route('workshops.details', $workshop_id);
    }
}
