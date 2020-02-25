@extends('layouts.app')

@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Trashcans</h3>
                <a class="btn btn-brand" href="{{action('TrashController@add')}}">Add</a>
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
                        <th>Position</th>
                        <th>Fill Level</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trashcans as $trashcan)
                        <tr>
                            <th scope="row">{{$trashcan->id}}</th>
                            <td>{{$trashcan->longitude}},{{$trashcan->latitude}}</td>
                            <td>{{$trashcan->fill_level}}</td>
                            <td><a href="{{action('TrashController@delete',$trashcan->id)}}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- end:: Content -->

@endsection
