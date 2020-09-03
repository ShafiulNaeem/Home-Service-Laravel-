@extends('admin.master')
@section('title','Service Provider Type')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px;">
        <h3 style="text-decoration: underline; text-align: center;">Service provider information</h3><br>
        @include('message')
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Wages</th>
                    <th>Service Type</th>
                    <th>Delete || Edit</th>
                </tr>
                </thead>
                <tbody>

                @foreach($serviceprovider as $serprovider)
                <tr>
                    <td>{{$serprovider->id}}</td>
                    <td><img src="{{url('images',$serprovider->image)}}" alt="" width="80"></td>
                    <td>{{$serprovider->name}}</td>
                    <td>{{$serprovider->wages}} $</td>
                    <td>{{$serprovider->service->service_type}}</td>
                    <td>
                        <form style="float: left;margin: 0px 3px;" action="{{route('service_provider.destroy',$serprovider->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                        <form style="float: left" action="{{route('service_provider.edit',$serprovider->id)}}" method="post">
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