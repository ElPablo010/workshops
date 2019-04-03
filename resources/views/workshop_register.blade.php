@extends('layouts/frontend')

@section('main-content')
    <h1 class="text-center">Inschrijven</h1>

    <p class="col-max text-center">
        Om je in te schrijven voor deze workshop, vul dan onderstaand formulier in. Na je inschrijving ontvang je van ons nog een email met meer info en verdere instructies.
    </p>

    <p class="col-max back"><a href="{{ route('home') }}"><i id="back" title="Ga terug naar vorige pagina" class="far fa-arrow-alt-circle-left"></i> Terug</a>
    </p>

    <form action="{{ route('workshops.register.confirm', $workshop_id) }}" method="POST" class="inschrijven">
        {{ csrf_field() }}
        <div class="naam">
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" value="{{ old('naam') }}">
            @if($errors->has('naam'))
                <span class="error">{{ $errors->first('naam') }}</span>
            @endif
        </div>

        <div class="email">
            <label for="email">Email adres:</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="tel-nr">
            <label for="tel-nr">Telefoonnr:</label>
            <input type="text" id="tel-nr" name="tel_nr" value="{{ old('tel_nr') }}">
            @if($errors->has('tel_nr'))
                <span class="error">{{ $errors->first('tel_nr') }}</span>
            @endif
        </div>

        <div class="fact-adres">
            <label for="fact-adres">Facturatie adres:</label>
            <input type="text" id="fact-adres" name="fact_adres" value="{{ old('fact_adres') }}">
            @if($errors->has('fact_adres'))
                <span class="error">{{ $errors->first('fact_adres') }}</span>
            @endif
        </div>

        <div class="btw-nr">
            <label for="btw-nr">BTW-nr:</label>
            <input type="text" id="btw-nr" name="btw_nr" value="{{ old('btw_nr') }}">
            @if($errors->has('btw_nr'))
                <span class="error">{{ $errors->first('btw_nr') }}</span>
            @endif
        </div>

        <input type="submit" value="Inschrijven" class="btn btn-primary">

    </form>
@endsection