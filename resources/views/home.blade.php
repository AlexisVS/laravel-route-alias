@extends('template.index')

@section('content')
    <div class="d-flex">
        @foreach ($front as $person)
            {{-- {{dd($loop)}} --}}
            @if ($loop->iteration <= 3)
                <div class="card">
                    <img src="{{ $person['img'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $person['nom'] }}</h5>
                        <p class="card-text">{{ $person['fonction'] }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="d-flex">
        @foreach ($back as $person)
            {{-- {{dd($loop)}} --}}
            @if ($loop->iteration <= 3)
                <div class="card">
                    <img src="{{ $person['img'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $person['nom'] }}</h5>
                        <p class="card-text">{{ $person['fonction'] }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <form>
        <fieldset disabled>
            <legend>Disabled fieldset example</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                    <option>Disabled select</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
    <p class="w-50 mx-auto text-center fs-2">Ce site internet a pour bute de nous exposer au view composer afin de pouvoir
        partager des variable a l'ensemble des views. Et de la méthode with() contenue dans composer ainsi que les foreach
        et la variable $loop à l'intérieur de celle-ci.</p>
@endsection