@extends('layouts/frontend')

@section('main-content')
    <h1 class="text-center">{{ $workshop->naam }}</h1>

    <p class="col-max back"><a href="{{ route('workshops.overview') }}"><i id="back" title="Ga terug naar vorige pagina" class="far fa-arrow-alt-circle-left"></i> Terug</a>
    </p>

    <div class="wrapper">
        <div class="workshop-detail">
            <div class="workshop-item">
                <p class="titel">
                    <span>Titel:</span> {{ $workshop->naam }}
                </p>
                <p class="datum">
                    <span>Datum:</span> <?php echo date('d/m/Y', strtotime($workshop->datum)); ?>
                </p>
                <p class="uur">
                    <span>Begin:</span> <?php echo date('G:i', strtotime($workshop->uur)); ?> uur
                </p>
                <p class="locatie">
                    <span>Locatie:</span> {{ $workshop->locatie }}
                </p>
                <p class="doelgroep">
                    <span>Doelgroep:</span> {{ $workshop->doelgroep }}
                </p>
                <p class="prijs">
                    <span>Prijs:</span> {{ $workshop->kostprijs }}€
                </p>
                <p class="deelnemers">
                    <span>Max. aantal deelnemers:</span> {{ $workshop->deelnemers }}
                </p>
                <p class="beschikbaar">
                        <span>Beschikbare plaatsen:</span> {{ $workshop->deelnemers }}
                    </p>
                <p class="beschrijving">
                    <span>Korte inhoud:</span> {{ $workshop->beschrijving }}
                </p>
            </div>
        </div>
        <aside>
            <h2 class="registraties text-center col-max">Registraties</h2>
            <div class="cards workshop-items">
                @foreach($workshop->participants as $participant)
                <div class="card workshop-item">
                    <p class="naam">
                        <span>Naam:</span> {{ $participant->naam }}
                    </p>
                    <p class="email">
                        <span>Email adres:</span> {{ $participant->email }}
                    </p>
                    <p class="tel-nr">
                        <span>Telefoonnr.:</span> {{ $participant->tel_nr }}
                    </p>
                    <p class="adres">
                        <span>Adres:</span> {{ $participant->fact_adres }}
                    </p>
                    <p class="btw-nr">
                        <span>BTW-nr.:</span> {{ $participant->btw_nr }}
                    </p>
                    <div class="button-group">
                        {{-- <a href="#" class="btn btn-primary">Contact bewerken</a> --}}
                        <a href="{{ route('remove.participant', $participant->id) }}" class="btn btn-primary">Deelnemer verwijderen</a>
                    </div>
                </div>
                @endforeach
            </div>
        </aside>
    </div>
@endsection