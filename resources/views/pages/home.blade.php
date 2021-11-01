@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center">Pencarian Properti</h1>
    <div class="row justify-content-center">
        @include('components.searchbox')
    </div>
</div>
<br>
<div class="container">
    <h1 class="text-center">Properti Terbaru</h1>
    <div class="row justify-content-center">
        @include('components.cards')
    </div>
    <div class="row justify-content-center mt-2">
        @include('components.cards')
    </div>
</div>

@endsection
