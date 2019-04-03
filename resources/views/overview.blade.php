@extends('layouts/frontend')

@section('main-content')
    <h1 class="text-center">Workshops</h1>

    <div class="filter overview-filter">
        <div class="buttons">
                <a href="{{ route('workshops.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Toevoegen</a>
        </div>
        <form action="{{ route('workshops.overview') }}" method="GET">
            <p class="doelgroep">
                <label for="doelgroep">Doelgroep:</label>
                <select name="doelgroep" id="doelgroep">
                    <option value="alle" <?php if($request->doelgroep == "Alle") { echo "selected"; } ?>>Alle</option>
                    <option value="Personen met dementie" <?php if($request->doelgroep == "Personen met dementie") { echo "selected"; } ?>>Personen met dementie</option>
                    <option value="Mantelzorgers" <?php if($request->doelgroep == "Mantelzorgers") { echo "selected"; } ?>>Mantelzorgers</option>
                    <option value="Professionals" <?php if($request->doelgroep == "Professionals") { echo "selected"; } ?>>Professionals</option>
                </select>
            </p>
            <p class="volgorde">
                <label for="volgorde">Volgorde:</label>
                <select name="volgorde" id="volgorde">
                    <option value="asc" <?php if($request->volgorde == "asc") { echo "selected"; } ?>>Nieuwste eerst</option>
                    <option value="desc" <?php if($request->volgorde == "desc") { echo "selected"; } ?>>Laatste eerst</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Filter" class="btn btn-primary">
            </p>
            
        </form>
    </div>

    <div class="workshops-overview">
        {{-- <div class="buttons">
            <a href="{{ route('workshops.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Toevoegen</a>
        </div> --}}
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
            <div class="button-group">
                <a href="{{ route('workshops.details', $workshop->id) }}" class="btn btn-primary">Details bekijken</a>
                <a href="{{ route('workshops.edit', $workshop->id) }}" class="btn btn-primary">Bewerken</a>
                <a href="{{ route('workshops.delete', $workshop->id) }}" class="btn btn-primary">Verwijderen</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection