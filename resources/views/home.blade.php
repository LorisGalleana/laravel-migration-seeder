{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
<div class="container my-5">
    <h1>I miei viaggi</h1>

    <table class="table">
        <thead>
            <tr>
                <th class="col">ID</th>
                <th class="col">Azienda</th>
                <th class="col">Binario</th>
                <th class="col">Stazione di partenza</th>
                <th class="col">Stazione di arrivo</th>
                <th class="col">Data di partenza</th>
                <th class="col">Orario di partenza</th>
                <th class="col">Orario di arrivo</th>
                <th class="col">Codice Treno</th>
                <th class="col">Numero Carrozze</th>
                <th class="col">In orario</th>
                <th class="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($trains as $train )
            <tr>
                <td>{{ $train->id }}</td>
                <td>{{ $train->company }}</td>
                <td>{{ $train->track }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_date }}</td>
                <td>{{ substr($train->departure_time, 0, 5) }}</td>
                <td>{{ substr($train->arrival_time, 0, 5) }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->number_of_carriages }}</td>
                <td>{{ $train->on_time ? 'Sì' : 'No' }}</td>
                <td>{{ $train->cancelled ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach


        </tbody>
    </table>


</div>

@endsection


@section('titlePage')
    home
@endsection
