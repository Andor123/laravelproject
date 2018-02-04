@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">This is a list</div>

                <div class="panel-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table border="1" align="center" class="table-responsive">
                        <tr>
                            <th>Country Name</th>
                            <th>Continent</th>
                        </tr>
                        @foreach($countries as $country)
                            <tr>
                                <td><a href="/country/{{$country->id}}">{{$country->country_name}}</a></td>
                                <td>{{$country->continent}}</td>
                            </tr>
                        @endforeach
                    </table>
                    {{$countries->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
