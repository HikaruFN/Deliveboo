@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center margin-top-bottom">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header title-section">{{ __('Dashboard') }}</div>

                <div class="card-body padding">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <a href="{{ route('admin.restaurants.index')}}" class="btn-coloured blue wthmargin">Vai al tuo ristorante</a>

                <a href="{{ route('admin.dishes.index')}}" class="btn-coloured yellow wthmargin">Gestisci i tuoi piatti</a>
            </div>
        </div>
    </div>
</div>
@endsection
