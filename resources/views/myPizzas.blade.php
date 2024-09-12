{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>Le mie pizze</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Ingredients</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pizzas as $pizza)
                    <tr>
                        <th>{{ $pizza->id }}</th>
                        <td>{{ $pizza->name }}</td>
                        <td>{{ $pizza->price }}</td>
                        <td>{{ $pizza->ingredients }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('titlePage')
    le_mie_pizze
@endsection

@section('hero')
    <div>HERO CONTACTS</div>
@endsection
