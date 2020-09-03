@extends('admin.master')
@section('title','Add Service Provider')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px;">
        <h3 style="text-decoration: underline; text-align: center;">Order details</h3><br>




{{--            <div class="form-group">--}}

{{--                <input hidden type="text" class="form-control" name="pro_name" id="pro_name" value="{{$usrprovider->name}}" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}

{{--                <input hidden type="text" class="form-control" name="pro_email" id="pro_email" value="{{$usrprovider->email}}" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}

{{--                <input hidden type="text" class="form-control" name="pro_phone" id="pro_phone" value="{{$usrprovider->phone}}" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}

{{--                <input hidden type="text" class="form-control" name="pro_service" id="pro_service" value="{{$usrprovider->service->service_type}}" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}

{{--                <input hidden type="text" class="form-control" name="pro_adress" id="pro_adress" value="{{$usrprovider->adress}}" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <input hidden type="text" class="form-control" name="pro_wages" id="pro_wages" value="{{$usrprovider->wages}}" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}

{{--                <input hidden type="text" class="form-control" name="user_name" id="user_name" value=" {{ Auth::user()->name}}"required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}

{{--                <input hidden type="text" class="form-control" name="user_email" id="user_email" value=" {{ Auth::user()->email}}" required>--}}
{{--            </div>--}}


            <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Worker Name</th>
                                    <th>Worker Email</th>
                                    <th>Worker Contact</th>
                                    <th>Wages</th>
                                    <th>Service Type</th>
                                    <th>Send Mail</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($orders as $order)
                                    <tr>
                                        <form action="{{route('confirem.store')}}" enctype="multipart/form-data" method="post" role="form">
                                            {{csrf_field()}}
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->user_name}}</td>
                                            <td>{{$order->user_email}}</td>
                                            <td>{{$order->pro_name}}
                                                <input hidden type="text" class="form-control" name="pro_name" id="pro_name" value="{{$order->pro_name}}" required>
                                            </td>
                                            <td>{{$order->pro_email}}
                                                <input hidden type="text" class="form-control" name="pro_email" id="pro_email" value="{{$order->pro_email}}" required>
                                            </td>

                                            <td>{{$order->pro_service}}</td>
                                            <td><button type="submit" class="btn btn-primary">Send mail</button></td>
                                         </form>

                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                         </div>



    </main>
@endsection