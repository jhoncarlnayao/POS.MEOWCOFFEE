@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Cart</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item->item_name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
