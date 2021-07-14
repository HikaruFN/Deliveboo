@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>HOMEPAGE ristoratori loggati</h1>
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <a href="{{ route('admin.restaurants.index')}}" class="btn btn-primary">Vai al tuo ristorante</a>
            </div>
        </div>
    </div>
</div>
@endsection
