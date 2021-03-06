@extends('master')

@section('title', 'SaaS Hub')

@section('meta')
    <meta name="keywords" content="saas apps, saas, free"/>
    <meta name="description" content="Helping connect you with free SaaS apps"/>
@endsection

@section('content')
    <div id="banner">
        <div class="container intro_wrapper">
            <div class="inner_content">

                <!--welcome-->
                <div class="welcome_index animated fadeInDown">
                    Whether it's for a side project or just an experiment, SaaS apps are always better when they're <span>free</span>
                </div>
                <!--//welcome-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner_content">
            <div class="row pad30">
                @foreach($popularServices as $service)
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        @include('partials.service-card')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="footer">
        <h1>We're picky about the services we list</h1>
        <h3 class="center follow">They must be web-based and be offer a forever free tier of service</h3>
    </div>
@endsection