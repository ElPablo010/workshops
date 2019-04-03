@extends('layouts/frontend')

@section('main-content')
    <div class="thankyou-wrapper">
        <div class="ty-text">
            <h1 class="text-center">
                Bedankt voor je inschrijving!
            </h1>
            <p class="text-center col-max">
                We hebben je inschrijving voor deze workshop goed ontvangen en we houden je uiteraard verder op de hoogte. Je ontvangt van ons zeer binnenkort een email met meer informatie. 
            </p>
            <p class="text-center col-max">
                Groetjes,<br>
                <span>het Dementieoaching team</span>
            </p>
        </div>
        <div class="admin-buttons">
            <a href="{{ route('home') }}" class="btn btn-primary">Naar het overzicht<br><i class="far fa-arrow-alt-circle-right"></i></a>
            <a href="https://www.dementiecoaching.be" class="btn btn-primary">Naar de hoofdwebsite<br><i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
    </div>
@endsection