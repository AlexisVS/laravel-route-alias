@extends('template.index')
@section('content')
    <div class="d-flex">
        @foreach ($front as $person)
            <div class="card">
                <img src="{{ $person['img'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $person['nom'] }}</h5>
                    <p class="card-text">{{ $person['fonction'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
