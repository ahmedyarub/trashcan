@extends('layouts.app')

@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Trashcans Collection Report</h3>
            </div>
        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Last Truck Collection Delay</th>
                        <th>Last Collected</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trashcans as $trashcan)
                        <tr>
                            <th scope="row">{{$trashcan->id}}</th>
                            <td>{{$trashcan->last_collection_delay}}</td>
                            <td>{{$trashcan->last_collection_time}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- end:: Content -->

@endsection
