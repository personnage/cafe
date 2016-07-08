@extends('layouts.application')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Almost there...</h2>
            <p class="lead">Please check your email to confirm your account</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p class="lead">
                No confirmation email received? Please check your spam folder or
                <a href="{{ url('/confirmation') }}">request new confirmation email</a>
            </p>
        </div>
    </div>

</div>
@endsection
