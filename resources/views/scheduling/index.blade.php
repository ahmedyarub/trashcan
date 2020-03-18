@extends('layouts.app')

@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Scheduling</h3>
            </div>
        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div>
                    <label for="latitude">Latitude</label><input type="text" id="latitude" name="latitude"
                                                                 value="25.169222"/>
                    <label for="longitude">Longitude</label><input type="text" id="longitude" name="longitude"
                                                                   value="55.227032"/>
                    <label for="trashcan">Trashcan</label><select id="trashcan" name="trashcan">
                        @foreach($trashcans as $trashcan)
                            <option value="{{$loop->index}}">{{$trashcan->id}}</option>
                        @endforeach
                    </select>

                    <button name="navigate" id="navigate" onclick="navigateTrash()">Navigate</button>
                </div>
                <div id="map"></div>
                <script>
                    var map, directionsService, directionsDisplay, trashcans =@json($trashcans);

                    function navigateTrash() {
                        origin = new google.maps.LatLng($('#latitude').val(), $('#longitude').val());
                        destination = new google.maps.LatLng(trashcans[$('#trashcan').val()].latitude, trashcans[$('#trashcan').val()].longitude);

                        calculateAndDisplayRoute(directionsService, directionsDisplay, origin, destination);
                    }

                    function initMap() {
                        var myOptions = {
                                zoom: 11,
                                center: new google.maps.LatLng(25.166142, 55.217193)
                            },
                            map = new google.maps.Map(document.getElementById('map'), myOptions);

                        directionsService = new google.maps.DirectionsService;
                        directionsDisplay = new google.maps.DirectionsRenderer({
                            map: map
                        });

                        trashcans.forEach(function (trashcan) {
                            new google.maps.Marker({
                                position: new google.maps.LatLng(trashcan.latitude, trashcan.longitude),
                                title: trashcan.id.toString(),
                                label: trashcan.id.toString(),
                                map: map
                            });

                        });

                    }


                    function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
                        directionsService.route({
                            origin: pointA,
                            destination: pointB,
                            travelMode: google.maps.TravelMode.DRIVING
                        }, function (response, status) {
                            if (status === google.maps.DirectionsStatus.OK) {
                                directionsDisplay.setDirections(response);
                            } else {
                                window.alert('Directions request failed due to ' + status);
                            }
                        });
                    }
                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXxDOrwA3iFkpNoFCr_UKlK2O2nMxlEfU&callback=initMap"
                    async defer></script>
            </div>
        </div>
    </div>

    <!-- end:: Content -->

@endsection
