@extends('layouts.frontend')

@section('main-content')
    <h1 class="text-center">Login</h1>

    <form action="{{ route('login.post') }}" method="POST" class="login">
        {{ csrf_field() }}
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            @if($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
            @endif
        </p>
        <p>
            <label for="password">Wachtwoord:</label>
            <input type="password" name="password" id="password">
            @if($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
            @endif
        </p>
        <p>
            <input type="submit" value="Inloggen" class="btn btn-primary">
        </p>
    </form>
@endsection