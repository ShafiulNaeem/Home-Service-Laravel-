@extends('admin.master')
@section('title','Service Update')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px;">
        @include('message')
        <h3 style="text-decoration: underline; text-align: center;">Update Service</h3><br>



        <form action="{{route('service.update',$services->id)}}" enctype="multipart/form-data" method="post" role="form">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="service_type">Service Type:</label>
                <input type="text" class="form-control" name="service_type" id="service_type" placeholder="{{$services->service_type}}" required>
            </div>
            <div class="form-group">
                <label for="service_info">Service Info:</label>
                <textarea class="form-control" name="service_info" id="service_info" placeholder="{{$services->service_info}}" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="labour_id">Service Info:</label>
                <input type="text" class="form-control" name="labour_id" id="labour_id" placeholder="{{$services->labour_id}}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>

                    <input id="image" type="file" class="form-control" name="image" placeholder="{{$services->image}}" required>

            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>



    </main>
@endsection