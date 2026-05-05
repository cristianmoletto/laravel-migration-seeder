@extends("layouts.master")

@section("title", "Elenco dei film migliori")

@section("content")
<h1>Lista dei film</h1>

<div class="container">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
         @foreach ($trains as $train)
        <div class="col">
            <div class="card my-2">
                <h5 class="card-header">
                    {{ $train['company'] }}
                </h5>
                <div class="card-body">
                    <p class="card-text"><i>partenza: {{ $train['start_station'] }}</i></p>
                    <p class="card-text">arrivo: {{ $train['arrival_station'] }}</p>
                    <p class="card-text">orario di partenza: {{ $train['start_time'] }}</p>
                    <p class="card-text">orario di arrivo: {{ $train['arrival_time'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection