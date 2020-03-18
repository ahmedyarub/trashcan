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
                <div class="card">
                    <div class="card-header">We are happy to hear your suggestions and/or complaints</div>

                    <div class="card-body">
                        <form method="POST" action="{{ action('SuggestionController@add') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <textarea id="suggestion" type="text"
                                              class="form-control" name="suggestion" required autofocus>
                                        {{ old('suggestion') }}
                                    </textarea>

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content -->

@endsection
