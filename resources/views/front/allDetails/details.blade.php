@extends('front.master')
@section('title','Details')
@section('content')

    <div class="index">
        <div class="service-man">
            <div class="container">
                <br>
                <br>
                   <h1 class="alert-info text-center">Your Order Details </h1>
                <br>
                <br>
                @php
                @endphp
                        @if(!(Auth::guest()))
                            @if(empty(Auth::user()->admin))

                                    <form action="{{route('allDetails.store')}}" enctype="multipart/form-data" method="post" role="form">
                                        {{csrf_field()}}

                                            <div class="form-group">

                                                <input hidden type="text" class="form-control" name="pro_name" id="pro_name" value="{{$usrprovider->name}}" required>
                                            </div>
                                            <div class="form-group">

                                                <input hidden type="text" class="form-control" name="pro_email" id="pro_email" value="{{$usrprovider->email}}" required>
                                            </div>
                                            <div class="form-group">

                                                <input hidden type="text" class="form-control" name="pro_phone" id="pro_phone" value="{{$usrprovider->phone}}" required>
                                            </div>
                                            <div class="form-group">

                                                <input hidden type="text" class="form-control" name="pro_service" id="pro_service" value="{{$usrprovider->service->service_type}}" required>
                                            </div>
                                            <div class="form-group">

                                                <input hidden type="text" class="form-control" name="pro_adress" id="pro_adress" value="{{$usrprovider->adress}}" required>
                                            </div>
                                            <div class="form-group">
                                                <input hidden type="text" class="form-control" name="pro_wages" id="pro_wages" value="{{$usrprovider->wages}}" required>
                                            </div>
                                            <div class="form-group">

                                                <input hidden type="text" class="form-control" name="user_name" id="user_name" value=" {{ Auth::user()->name}}"required>
                                            </div>
                                            <div class="form-group">

                                                <input hidden type="text" class="form-control" name="user_email" id="user_email" value=" {{ Auth::user()->email}}" required>
                                            </div>


                                        <div class="row">
                                            <div class="col-md-6 service-man-card">
                                                <div class="service-man-card-border">
                                                    <br>
                                                    <div class="service-man-description text-center">
                                                        <h1>Service Provider Details </h1>
                                                    </div>
                                                    <br>
                                                    <div class="service-man-card-img text-center">
                                                        <img style="height: 300px;" class="img-fluid text-center" src="{{url('images',$usrprovider->image)}}">
                                                    </div>
                                                    <br>
                                                    <div class="service-man-description">
                                                        <p><strong>Name: </strong> {{$usrprovider->name}}</p>
                                                    </div>
{{--                                                    <div class="service-man-description">--}}
{{--                                                        <p hidden ><strong>Email: </strong> {{$usrprovider->email}}</p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="service-man-description">--}}
{{--                                                        <p hidden><strong>Contact: </strong> {{$usrprovider->phone}}</p>--}}
{{--                                                    </div>--}}
                                                    <div class="service-man-description">
                                                        <p><strong>Service: </strong> {{$usrprovider->service->service_type}}</p>
                                                    </div>
                                                    <div class="service-man-description">
                                                        <p><strong>Work Area: </strong> {{$usrprovider->adress}}</p>
                                                    </div>
                                                    <div class="service-man-description">
                                                        <p><strong>Wages: </strong>  $ {{$usrprovider->wages}}.00 per hr</p>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col-md-6 service-man-card">
                                                <div class="service-man-card-border">
                                                    <br>
                                                    <div class="service-man-description text-center">
                                                        <h1>Your Details </h1>
                                                    </div>
                                                    <br>
                                                    <div class="service-man-card-img text-center">
                                                        <img style="height: 300px;"  class="img-fluid text-center" src="{{url('images',Auth::user()->image)}}">
                                                    </div>
                                                    <br>
                                                    <div class="service-man-description">
                                                        <p><strong>Name: </strong> {{ Auth::user()->name}}</p>
                                                    </div>
                                                    <div class="service-man-description">
                                                        <p><strong>Email: </strong>  {{ Auth::user()->email}}</p>
                                                    </div>
                                                    <div class="service-man-description">
                                                        <p><strong>Service: </strong> {{$usrprovider->service->service_type}}</p>
                                                    </div>
                                                    <div class="service-man-description">
                                                        <p><strong>Work Area: </strong> {{$usrprovider->adress}}</p>
                                                    </div>
                                                    <div class="service-man-description">
                                                        <p><strong>Cost: </strong>  $ {{$usrprovider->wages}}.00 per hr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <h1 class="alert-warning text-center">Confirm Your Order... </h1>
                                        <br>
                                        <h2 class="text-center"><button type="submit" class="btn btn-primary text-center">Confirm Order</button></h2>
                                        <br>
                                        <br>
                                    </form>
                                @endif
                            @endif

            </div>
        </div>
    </div>

@endsection