@extends('front.master')
@section('title','Index Page')
@section('content')
    <div class="index">
        {{--start carousel--}}
        <div id="wowslider-container1">
            @include('front.carousel')
        </div>
        {{--end carousel--}}

        {{--start about--}}
        <div class="about">
            @include('front.about')
        </div>
        {{--end about--}

        {{--start take service--}}
        <div class="service-image-section">
            <div class="container">

                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-3 col-sm-6 service-image-colum">
                            <div class="service-image">
                                <img class="img-fluid" src="{{url('images',$service->image)}}">
                            </div>
                            <div class="service-image-title">
                                <p>{{$service->service_type}}</p>
                            </div>
                            <div class="service-image-text text-center">
                                <p>{{$service->service_info}}</p>
                            </div>
                            <div class="service-image-btn">
                                <a href="{{route('frontService.show',$service->id)}}">
                                    <button class="btn service-img-btn">Take Service</button>
                                </a>
                            </div>

                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        {{--end take service--}}

        {{--start what we offer--}}
        <div class="offer-tab">
            @include('front.offer')
        </div>
        {{--end what we offer--}}

        {{--start customer_vedio--}}
        <div class="customers-vedio">
            @include('front.customer_vedio')
        </div>
        {{--end customer_vedio--}}

        {{--start -contact--}}
        <div class="contact">
            @include('front.contact')
        </div>
        {{--end -contact--}}

        {{--start -Sign up to newsletter for get special offer--}}
        <div class="newsletter">
            @include('front.newsletter')
        </div>
        {{--start -Sign up to newsletter for get special offer--}}

    </div>
@endsection