@extends('front.master')
@section('title','Service provider Details')
@section('content')

    <div class="index">
        <div class="service-man">
            <div class="container">
                <br>
                <br>
                <br>
                <form action="" enctype="multipart/form-data" method="get" role="form">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="adress">Work Location:</label>
                        <input type="text" class="form-control" name="adress" id="adress" value="{{ request()->input('adress') }}" placeholder="Service provider adress..." required>
                    </div>

                </form>

                <div class="row service-man-row">

                    @if(!empty($services))

                         @forelse($services as $service)
                            @if($service->adress ==  request()->input('adress') )

                            <div class="col-md-3 service-man-card">
                            <div class="service-man-card-border">
                                <div class="service-man-card-img text-center">
                                    <img class="img-fluid text-center" src="{{url('images',$service->image)}}">
                                </div>
                                <div class="service-man-name-rating d-flex">
                                    <div class="service-man-name float-left">
                                        <p>{{$service->name}}</p>
                                    </div>
                                    <div class="service-man-rating d-flex float-right">
                                        <i class="far fa-star fa-1x" style="color: orange;"></i>
                                        <i class="far fa-star fa-1x" style="color: orange;"></i>
                                        <i class="far fa-star fa-1x" style="color: orange;"></i>
                                        <i class="far fa-star fa-1x" style="color: orange;"></i>
                                        <i class="far fa-star fa-1x" style="color: orange;"></i>
                                        <p class="float-right">5.0</p>
                                    </div>

                                </div>
                                <div class="service-man-description">
                                    <p>Work Area: {{$service->adress}}</p>
                                </div>
                                <div class="service-man-description">
                                    <p>Rank: {{$service->id}}</p>
                                </div>
                                <div class="service-man-description">
                                    <p>Wages: $ {{$service->wages}}.00 hr</p>
                                </div>
                                <div class="service-image-btn">
                                    <a href="{{route('allDetails.show',$service->id)}}">
                                        <button class="btn service-img-btn">Hire</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                            @endif

                        @empty
                            <h2 class="text-center"><strong class="alert-danger ">Service is not avaiable...</strong></h2>
                        @endforelse


                    @endif

                </div>
                <div style="position: absolute; top: 190px;">
                    <h3 class="text-center alert-success">

{{--                        Service Type: {{$service->service->service_type}}--}}

                    </h3>
                </div>
            </div>
        </div>
    </div>

@endsection