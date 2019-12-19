@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- <div class="card">
                <div class="card-header">
                    <h1 class="text-orange"><i class="fab fa-bitcoin"></i> BITCOIN</h1>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                <crypto-currency></crypto-currency>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
