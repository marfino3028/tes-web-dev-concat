@extends('layouts.app')

@section('content')
    <h2>Hasil Ongkos Kirim</h2>
    @foreach ($ongkir as $result)
        <p>{{ $result['name'] }}: {{ $result['cost'][0]['value'] }} ({{ $result['cost'][0]['etd'] }} hari)</p>
    @endforeach
@endsection
