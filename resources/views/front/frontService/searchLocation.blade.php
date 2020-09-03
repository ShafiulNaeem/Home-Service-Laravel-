@extends('front.master')
@section('title','Service provider location')
@section('content')

    <div class="index">
        <div class="service-man">
            <div class="container">
                <br>
                <br>
                <br>

                <div class="row service-man-row">
                    <h1>Searrch result for: {{ request()->input('adress') }}</h1>

                </div>

            </div>
        </div>
    </div>

@endsection
