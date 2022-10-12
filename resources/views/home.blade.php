@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            @foreach ($trains as $train)
                <div class="card">
                    <div class="details">
                        <p>
                            <strong> Titolo: </strong>
                            <span>{{ $train->company }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Titolo Originale: </strong>
                            <span>{{ $train->departure_station }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong>Nazionalità: </strong>
                            <span>{{ $train->arrival_station }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Data: </strong>
                            <span>{{ $train->departure_time }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Voto: </strong>
                            <span>{{ $train->arrival_time }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Voto: </strong>
                            <span>{{ $train->train_code }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Voto: </strong>
                            <span>{{ $train->carriages_number }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Cancellato: </strong>
                            <span>{{ $train->canceled ? 'Sì' : 'No' }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> In orario: </strong>
                            <span>{{ $train->in_time ? 'Sì' : 'No'  }}</span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
