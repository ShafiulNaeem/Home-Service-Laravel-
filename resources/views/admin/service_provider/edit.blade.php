@extends('admin.master')
@section('title','Service Provider Update')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px;">
        <h3 style="text-decoration: underline; text-align: center;">Update Service  Provider Details</h3><br>
        @include('message')
        <form action="{{route('service_provider.update',$serviceprovider->id)}}" enctype="multipart/form-data" method="post" role="form">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="{{$serviceprovider->name}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="{{$serviceprovider->email}}" required>
            </div>
            <div class="form-group">
                <label for="adress">Work Location:</label>
                <input type="text" class="form-control" name="adress" id="adress" placeholder="{{$serviceprovider->adress}}" required>
            </div>
            <div class="form-group">
                <label for="wages">Wages:</label>
                <input type="text" class="form-control" name="wages" id="wages" placeholder="{{$serviceprovider->wages}}" required>
            </div>
            <div class="form-group">
                <label for="phone">Contact:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="{{$serviceprovider->phone}}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>

                    <input id="image" type="file" class="form-control" name="image" placeholder="{{$serviceprovider->image}}" required>

            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>



    </main>
@endsection