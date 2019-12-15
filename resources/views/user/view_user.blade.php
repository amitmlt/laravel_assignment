@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src='{{ url("/thumbnail/$user->picture")}}' alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            {{ $user->name }}  {{ $user->surname }}</h4>
                            <h5><i>Rating: {{ $user->rating }}</i></h5> 
                        
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{ $user->email }}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i>Last Login On: {{ date('M d,Y H:i:s',strtotime($user->last_login)) }}
                            <br />
                            <i class="glyphicon glyphicon-calendar"></i>Created on On: {{ date('M d,Y',strtotime($user->last_login)) }}
                        <!-- Split button -->
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{ url('home') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection