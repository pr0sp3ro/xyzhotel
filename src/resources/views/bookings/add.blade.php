@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dodaj rezerwacje</h1>
        <form action="{{ route('dodaj-rezerwacje') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="place">Place:</label>
                <input type="text" name="place" id="place">
            </div>
            <div class="mb-3">
                <label for="checkin_date" class="form-label">Check-in Date</label>
                <input type="date" name="checkin_date" id="checkin_date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="checkout_date" class="form-label">Check-out Date</label>
                <input type="date" name="checkout_date" id="checkout_date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="room_type" class="form-label">Room Type</label>
                <input type="text" name="room_type" id="room_type" class="form-control">
            </div>
            <div class="mb-3">
                <label for="group_adults" class="form-label">Number of Adults</label>
                <input type="number" name="group_adults" id="group_adults" class="form-control">
            </div>
            <div class="mb-3">
                <label for="group_children" class="form-label">Number of Children</label>
                <input type="number" name="group_children" id="group_children" class="form-control">
            </div>
            <div class="mb-3">
                <label for="travel_purpose" class="form-label">Travel Purpose</label>
                <textarea name="travel_purpose" id="travel_purpose" class="form-control" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Booking</button>
        </form>
    </div>
@endsection
