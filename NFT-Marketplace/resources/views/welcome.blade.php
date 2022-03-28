@extends('layouts.app')

@section('content')
<body class="trendz-homepage">
    <section>
<div class="container">
    <div class="row justify-content-center gx-0">
        {{-- <div class="col-md-8">
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
        </div> --}}

        <div class="col-sm order-sm-first">
            <div class="col-12 col-sm-12 offset-1 offset-sm-4 h-75 py-5 text-right d-flex flex-column justify-content-center align-items-center">
            <h1 class="trendz-title">Explore, Buy, Collect and Sell Unqiue NFT's</h1>
            <h3 class="trendz-sub-title">Trendz is a website where who can find any possible NFT's in the marketplace </h3>

            <a class="btn explore-button px-3 m-4 d-flex flex-column me-md-3" href="#">Explore</a>
        </div>
         </div>

        <div class="col-sm">
         <div class="col-md-6 order-md-6">
            <!--Image Section for the Homepage-->
                    <img class="img-fluid trendz-home-img" src="{{ asset('img/astronaut.png') }}" alt="">
        </div>
        </div>


</div>
</div>
    </section> <!--End of Homepage Image and Text Section-->
    <div class="container">
        <div class="row justify-content-center gx-0">
            <div class="col-sm order-sm-first">
                <div class="col-8 col-sm-8 offset-1 offset-sm-4 h-75 py-5 text-right d-flex flex-column justify-content-start align-items-right">
                    <h3>To find more about NFT's and how it works</h3>
                    <p>Click the button to explore more</p>
                </div>
            </div>
            <div class="col-sm">
                <div class="col-md-6 order-md-6">
                    <a class="btn NFT-button px-3 m-4 d-flex flex-column me-md-3" href="#">NFT's</a>
                </div>
            </div>
        </div>
    </div>
    <section>

    </section>
</body>
@endsection
