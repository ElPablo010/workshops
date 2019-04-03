@extends('layouts/frontend')

@section('main-content')
    <h1 class="text-center">Workshop toevoegen</h1>

    <p class="col-max back"><a href="{{ route('workshops.overview') }}"><i id="back" title="Ga terug naar vorige pagina" class="far fa-arrow-alt-circle-left"></i> Terug</a>
    </p>

    <form action="{{ route('workshops.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="titel">
            <label for="naam">Titel:</label>
            <input type="text" id="naam" name="naam" value="{{ old('naam') }}">
            @if($errors->has('naam'))
            <span class="error">
                {{ $errors->first('naam') }}
            </span>
            @endif
        </div>

        <div class="datum">
            <label for="datum">Datum:</label>
            <input type="date" id="datum" name="datum" {{ old('datum') }}">
            @if($errors->has('datum'))
            <span class="error">
                {{ $errors->first('datum') }}
            </span>
            @endif
        </div>

        <div class="uur">
            <label for="uur">Uur:</label>
            <input type="time" id="uur" name="uur" {{ old('uur') }}">
            @if($errors->has('uur'))
            <span class="error">
                {{ $errors->first('uur') }}
            </span>
            @endif
        </div>

        <div class="locatie">
            <label for="locatie">Locatie:</label>
            <input type="text" id="locatie" name="locatie" {{ old('locatie') }}">
            @if($errors->has('locatie'))
            <span class="error">
                {{ $errors->first('locatie') }}
            </span>
            @endif
        </div>

        <div class="doelgroep">
            <label for="doelgroep">Doelgroep:</label>
            <select id="doelgroep" name="doelgroep">
                <option value="Personen met dementie" <?php if(old('doelgroep') == "Personen met dementie") { echo "selected"; } ?>>Personen met dementie</option>
                <option value="Mantelzorgers" <?php if( old('doelgroep') == "Mantelzorgers") { echo "selected"; } ?>>Mantelzorgers</option>
                <option value="Professionals" <?php if( old('doelgroep') == "Professionals") { echo "selected"; } ?>>Professionals</option>
            </select>
            @if($errors->has('doelgroep'))
            <span class="error">
                {{ $errors->first('doelgroep') }}
            </span>
            @endif
        </div>

        <div class="prijs">
            <label for="kostprijs">Prijs:</label>
            <input type="text" id="kostprijs" name="kostprijs" {{ old('kostprijs') }}">
            @if($errors->has('kostprijs'))
            <span class="error">
                {{ $errors->first('kostprijs') }}
            </span>
            @endif
        </div>

        <div class="deelnemers">
            <label for="deelnemers">Aantal deelnemers:</label>
            <input type="number" id="deelnemers" name="deelnemers" {{ old('deelnemers') }}">
            @if($errors->has('deelnemers'))
            <span class="error">
                {{ $errors->first('deelnemers') }}
            </span>
            @endif
        </div>

        <div class="beschrijving">
            <label for="beschrijving">Korte inhoud:</label>
            <textarea id="beschrijving" name="beschrijving" {{ old('beschrijving') }}"></textarea>
            @if($errors->has('beschrijving'))
            <span class="error">
                {{ $errors->first('beschrijving') }}
            </span>
            @endif
        </div>

        <input type="submit" value="Toevoegen" class="btn btn-primary">

    </form>
@endsection