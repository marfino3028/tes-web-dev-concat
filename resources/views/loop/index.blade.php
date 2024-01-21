@extends('layouts.app')

@section('content')
    <form action="{{ route('loop.process') }}" method="post">
        @csrf
        <label for="jumlah_perulangan">Jumlah Perulangan:</label>
        <input type="number" name="jumlah_perulangan" required>
        <button type="submit">Proses</button>
    </form>
@endsection
