@extends('app')

@section('content')
    @include('nav')
    <div class="container">
        @include('articles.card')
    </div>
@endsection