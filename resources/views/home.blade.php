{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
    <div class="container my-5">
        <h1>Home</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex, ea dolor repellat quibusdam distinctio,
            provident facilis deleniti ab aliquid error soluta maiores aspernatur unde nisi dolorum ducimus et perferendis!
        </p>
    </div>
@endsection


@section('titlePage')
    home
@endsection
