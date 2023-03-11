@extends('layouts.main-layout')

@section('pageTitle') Home | Laravel Comics @endsection

@section('pageContent')
    <div class="jumbo"></div>
    <div class="content">
        <div class="container">
            <div class="title-box">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="card-box">
                @foreach ($comics as $card)
                    <div class="card">
                        <div class="img-box">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                        </div>
                        <h4>{{ $card['title'] }}</h4>
                    </div>
                @endforeach

            </div>
            <button>LOAD MORE</button>
        </div>
    </div>
@endsection