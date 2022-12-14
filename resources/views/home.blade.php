@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            @foreach ($trains as $train)
                <div class="card">
                    <div class="details">
                        <p>
                            <strong> Azienda: </strong>
                            <span>{{ $train->company }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Stazione di partenza: </strong>
                            <span>{{ $train->departure_station }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong>Stazione di arrivo: </strong>
                            <span>{{ $train->arrival_station }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Orario di partenza: </strong>
                            <span>{{ $train->departure_time }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Orario di arrivo: </strong>
                            <span>{{ $train->arrival_time }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Cod. Treno: </strong>
                            <span>{{ $train->train_code }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Numero carrozze: </strong>
                            <span>{{ $train->carriages_number }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> Cancellato: </strong>
                            <span>{{ $train->canceled ? 'S??' : 'No' }}</span>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            <strong> In orario: </strong>
                            <span>{{ $train->in_time ? 'S??' : 'No'  }}</span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
