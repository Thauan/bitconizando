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
                                    <h1>
                                                @if($item['type'] === 'buy')
                                                    <p class="badge badge-dark">
                                                        Comprar
                                                    </p>
                                                @endif

                                                @if($item['type'] === 'sell')
                                                    <p style="background-color:green" class="badge badge-primary">
                                                        Vender
                                                    </p>
                                                @endif      
                                    </h1>
                                    <p class="text-currency"><i style="color:darkgreen" class="fas fa-dollar-sign"></i> {{ $item['price'] }}</p>
                                    <p class="text-currency"><i style="color:darkslateblue;" class="fas fa-sort"></i> {{ $item['amount'] }}</p>
                                </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
