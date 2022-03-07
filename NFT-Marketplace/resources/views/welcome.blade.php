@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                        <!-- Welcome message in the user with a link
                            of the view all NFT-Marketplace table-->

                    @endif

                    Welcome to Trendz Website!

                    Read more <a href="{{route('about')}}">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
