@extends('template.index')
@section('content')
    {{-- {{ dd($front) }} --}}
    <div class="d-flex">
        @foreach ($back as $person)
            <div class="card">
                <img src="{{ $person['img'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $person['nom'] }}</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
