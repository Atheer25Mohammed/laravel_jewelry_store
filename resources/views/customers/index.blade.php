<!-- resources/views/customers/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>العملاء</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">إضافة عميل جديد</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>البريد الإلكتروني</th>
                <th>الهاتف</th>
                <th>العنوان</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
