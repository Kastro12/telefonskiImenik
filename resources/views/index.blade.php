@extends('layouts.app')
@section('content')

@include('default.navbar')





<section class="lista container">

        <?php
        $sviPodaci = $podaci;

        foreach ($podaci as $g => $sviPodaci) {

            echo "<h1>$g</h1>";
            $podaciPoGradu = $sviPodaci;

            foreach ($sviPodaci as $p =>$podaciPoGradu)
            {
                echo "<h4>$p</h4>";

                foreach ($podaciPoGradu as $podatak) {
                    echo "<p>-$podatak->ime, $podatak->ulica $podatak->broj, $podatak->telefonski_broj</p>";
                }

            }
        }
        ?>

</section>



@include('default.footer')


@endsection