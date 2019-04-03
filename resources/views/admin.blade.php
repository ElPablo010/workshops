@extends('layouts/frontend')

@section('main-content')
    <h1 class="text-center">Hoi Admin, wat wil je doen?</h1>

    <div class="admin-buttons">
        <a href="{{ route('workshops.overview') }}" class="btn btn-primary">Workshops bekijken</a>
        <a href="{{ route('workshops.create') }}" class="btn btn-primary">Workshop aanmaken</a>
    </div>
@endsection
