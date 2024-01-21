@extends('layouts.app')

@section('content')
    <form action="{{ route('ongkir.process') }}" method="post">
        @csrf
        <label for="destination">Kota Tujuan:</label>
        <input type="text" name="destination" required>
        <button type="submit">Cek Ongkir</button>
    </form>
@endsection
