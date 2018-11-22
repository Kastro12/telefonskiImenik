@extends('layouts.app')
@section('content')
    @include('default.navbar')

<section class="container">

   {{--@foreach($adrese as $adresa)--}}
     {{--$address =  {{$adresa->grad}} {{$adresa->ulica}} {{$adresa->broj}};<br/>--}}

<?php

//$address= $adrese[0]->ulica.''.$adrese[0]->broj.''.$adrese[0]->grad;

    $address = 'BTM 2nd Stage, Bengaluru, Karnataka 560076';

        $geo = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($address)."&sensor=true&key=AIzaSyAMql7ofTgbnJrhzmLMQIysavWfJZMW5gw");
        $geo = json_decode($geo, true); // Convert the JSON to an array

        if (isset($geo['status']) && ($geo['status'] == 'OK')) {
        $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
        $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
        }


 ?>
       {{--@endforeach--}}

    <div  id="mapa">


    </div>

</section>



    @include('default.footer')

    <script type="application/javascript">


        $(document).ready(function(){

            var myLatLng = [
                {lat: 44.806281, lng: 20.485094},
                {lat: 44.789123, lng: 20.472500},
                {lat: 44.806319, lng: 20.485104},
                {lat: 44.80836, lng: 20.463560},
                {lat: 44.012276, lng: 20.912306},
                {lat: 44.010281, lng: 20.916483},
                {lat: 44.651435, lng: 20.195653},
                {lat: 44.650127, lng: 20.191701},
                {lat: 43.302502, lng: 22.002305},
                {lat: 43.302346, lng: 22.002391},
                {lat: 43.302338, lng: 22.002348},
                {lat: 43.000889, lng: 21.929580},
                {lat: 45.777116, lng: 20.605055},
                {lat: 44.870592, lng: 20.647338}
                ];


            var map = new google.maps.Map(
                document.getElementById('mapa'),
                {
                    zoom: 7,
                    center: new google.maps.LatLng(44.787197, 20.457273)
                }
            );

            //MARKER
            myLatLng.forEach(function (element) {
                var marker = new google.maps.Marker({
                    position: element,
                    map: map,
                    title: 'Hello World!'
                });
            });




        });

    </script>
@endsection

