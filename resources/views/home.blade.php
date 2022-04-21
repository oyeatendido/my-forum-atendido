@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                   <img src="/storage/app/avatars/{{ auth()->user()->id }}/{{ auth()->user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                   <img src="{{ URL::to('/') }}/avatars/{{ auth()->user()->id }}/{{ auth()->user()->avatar }}" alt="{{ auth()->user()->avatar }}" />

                </div>
                <div class="card-body">
                        <h2 class="text-center">Welcome to the Dashboard {{ auth()->user()->name }}!!!!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
