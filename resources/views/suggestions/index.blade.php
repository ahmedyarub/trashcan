@extends('layouts.app')

@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Suggestions</h3>
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
                        <th>Date</th>
                        <th>Suggestion</th>
                        <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suggestions as $suggestion)
                        <tr>
                            <td>{{$suggestion->created_at}}</td>
                            <td>{{$suggestion->suggestion}}</td>
                            <td>{{$suggestion->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- end:: Content -->

@endsection
