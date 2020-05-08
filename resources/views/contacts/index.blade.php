@extends('layout.master')

@section('content')

    <h2>All Contacts</h2>

    <a href="/contact" class="btn btn-primary">Add New Contact</a>

    <table class="table" style="width:100%">
        <thead>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>Phone Number</th>
        <th></th>
        </thead>
        <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name }}</td>
                <td>{{ $contact->middle_name }}</td>
                <td>{{ $contact->last_name }}</td>
                <td>{{ $contact->address_1 }}</td>
                <td>{{ $contact->address_2 }}</td>
                <td>{{ $contact->phone_number }}</td>
                <td><a href="/contact/{{$contact->id}}">EDIT</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
