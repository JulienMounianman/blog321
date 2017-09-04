@extends('templates.default')

@section('title', 'Register')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}


        <div>
            <label for="pseudo">Pseudo</label>
            <input id="pseudo" type="text" name="pseudo" value="{{ old('pseudo') }}" required autofocus>

            @if ($errors->has('pseudo'))
                <strong>{{ $errors->first('pseudo') }}</strong>
            @endif
            <br>
            <label for="email">E-Mail Address</label>

            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   required>

            @if ($errors->has('email'))
                <strong>{{ $errors->first('email') }}</strong>
            @endif
            <br>
            <label for="password">Password</label>

            <input id="password" type="password" name="password" required>

            @if ($errors->has('password'))
                <strong>{{ $errors->first('password') }}</strong>
            @endif
            <br>
            <label for="password-confirm">Confirm Password</label>

            <input id="password-confirm" type="password" name="password_confirmation"
                   required>
            <br>
            <label for="first_name">First Name</label>
            <input id="first_name" type="text" name="first_name" required>

            @if ($errors->has('first_name'))
                <strong>{{ $errors->first('first_name') }}</strong>
            @endif
            <br>
            <label for="last_name">Last Name</label>
            <input id="last_name" type="text" name="last_name" required>

            @if ($errors->has('last_name'))
                <strong>{{ $errors->first('last_name') }}</strong>
            @endif
            <br>
            <label for="portfolio_url">Portfolio url</label>
            <input id="portfolio_url" type="text" name="portfolio_url" required>

            @if ($errors->has('portfolio_url'))
                <strong>{{ $errors->first('portfolio_url') }}</strong>
            @endif
            <br>
            <label for="website_url">Website url</label>
            <input id="website_url" type="text" name="website_url" required>

            @if ($errors->has('website_url'))
                <strong>{{ $errors->first('website_url') }}</strong>
            @endif


        </div>

        <button type="submit" class="btn btn-primary">
            Register
        </button>
    </form>
@endsection
