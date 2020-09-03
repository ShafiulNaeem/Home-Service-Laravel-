@extends('admin.master')
@section('title','Service Type')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <h3>Service Type List</h3>
        @include('message')
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Delete || Edit</th>
                </tr>
                </thead>
                <tbody>

                @foreach($services as $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td><img src="{{url('images',$service->image)}}" alt="" width="80"></td>
                    <td>{{$service->service_type}}</td>
                    <td>
                        <form style="float: left;margin: 0px 3px;" action="{{route('service.destroy',$service->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                        <form style="float: left" action="{{route('service.edit',$service->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('GET')}}
                            <input type="submit" class="btn btn-sm btn-primary" value="Edit">
                        </form>

                    </td>
                </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </main>
@endsection