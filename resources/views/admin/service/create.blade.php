@extends('admin.master')
@section('title','Service')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px;">
        <h3 style="text-decoration: underline; text-align: center;">Add Service</h3><br>
        @include('message')
        <form action="{{route('service.store')}}" enctype="multipart/form-data" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="service_type">Service Type:</label>
                <input type="text" class="form-control" name="service_type" id="service_type" placeholder="service type..." required>
            </div>
            <div class="form-group">
                <label for="service_info">Service Info:</label>
                <textarea class="form-control" name="service_info" id="service_info" placeholder="service info..." rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="labour_id">Service Info:</label>
                <input type="text" class="form-control" name="labour_id" id="labour_id" placeholder="Labour id...">
            </div>

            <div class="form-group">
                <label for="image">Image</label>

                    <input id="image" type="file" class="form-control" name="image" required>

            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>


    </main>
@endsection