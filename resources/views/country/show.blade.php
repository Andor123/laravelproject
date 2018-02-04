@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Country Information</div>

                <div class="panel-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($countries->id)
                        <p>Country name: {{$countries->country_name}}</p>
                        <p>Capital city/cities: {{$countries->capital_city}}</p>
                        <p>Population: {{$countries->population}}</p>
                        <p>Continent: {{$countries->continent}}</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection