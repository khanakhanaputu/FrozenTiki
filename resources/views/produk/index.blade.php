@extends('layouts.main')
@section('title', 'Produk')
@section('content')
    <div class="grid-cols-7 mx-5 grid gap-2">
    @foreach ($produk as $item)
        <div class="border p-1">
            <img src="{{ $item['url'] }}" alt="" class="inline-flex justify-center items-center">
            <p>{{ $item['nama'] }}</p>
            <p>{{ $item['jenis'] }}</p>
            <p>{{ $item['harga'] }}</p>
        </div>
    @endforeach
    </div>
@endsection