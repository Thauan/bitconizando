@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-orange"><i class="fab fa-bitcoin"></i> BITCOIN</h1>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($cryptos as $item)
                        <div class="card">
                                <div class="card-body">
                                <h3>
                                    <p class="badge badge-primary">
                                            {{ $item['exchange_id'] }}
                                    </p>
                                </h>
                                    <p class="text-currency"><i style="color:darkgreen" class="fas fa-dollar-sign"></i> {{ $item['volume_1day_usd'] }}</p>
                                    <p class="text-currency"><i style="color:darkslateblue;" class="fas fa-sort"></i> {{ $item['data_symbols_count'] }}</p>
                                </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
