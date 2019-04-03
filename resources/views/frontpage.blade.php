@extends('layouts/frontend')

@section('main-content')
    <h1 class="text-center">Workshops</h1>

    <div class="filter text-center">
        Doelgroep:
        <a href="/?doelgroep=Personen met dementie">Personen met dementie</a> |
        <a href="/?doelgroep=Mantelzorgers">Mantelzorgers</a> |
        <a href="/?doelgroep=Professionals">Professionals</a> |
        <a href="/">Reset</a>
    </div>

    <div class="workshops-overview">
        @foreach($workshops as $workshop)
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
                    <span>Beschikbare plaatsen:</span>
                    <?php
                        $aantalDeelnemers = sizeof($deelnemers->where('workshop_id', $workshop->id));
                        $beschikbarePlaatsen = $workshop->deelnemers - $aantalDeelnemers;
                        echo $beschikbarePlaatsen;
                    ?>
                </p>
                <p class="beschrijving">
                    <span>Inhoud:</span> {{ $workshop->beschrijving }}
                </p>
                <p class="register">
                    <a @if($beschikbarePlaatsen > 0)href="{{ route('workshops.register', $workshop->id) }}"@endif class="btn btn-primary"
                        <?php if($beschikbarePlaatsen == 0) { echo 'disabled'; } ?>
                        >
                        @if($beschikbarePlaatsen > 0) Inschrijven voor deze workshop
                        @else Deze workshop is helaas volzet!
                        @endif
                    </a>
                </p>
        </div>
        @endforeach
    </div>
@endsection