@extends('admin.master')
@section('title','Add Service Provider')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px;">
        <h3 style="text-decoration: underline; text-align: center;">Add Service</h3><br>
        @include('message')

        <form action="{{route('service_provider.store')}}" enctype="multipart/form-data" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Service provider name..." required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Service provider email..." required>
            </div>

            <div class="form-group">
                <label for="phone">Contact:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Service provider phone..." required>
            </div>
            <div class="form-group">
                <label for="adress">Work Location:</label>
                <input type="text" class="form-control" name="adress" id="adress" placeholder="Service provider adress..." required>
            </div>
            <div class="form-group">
                <label for="wages">Wages</label>
                <input type="text" class="form-control" name="wages" id="wages" placeholder="Service provider wages..." required>
            </div>
            <div class="form-group">
                <label for="service_id">Service Type:</label>
                <select class="custom-select" id="service_id" name="service_id">
                    <option selected>Select Service Type...</option>
                    @foreach($services as $service)

                    <option value="{{$service->id}}">{{$service->service_type}}</option>

                        @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="image">Image</label>

                    <input id="image" type="file" class="form-control" name="image" required>

            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>


    </main>
@endsection