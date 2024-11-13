@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>العملاء</h1>

        <!-- زر إضافة عميل جديد -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">إضافة عميل جديد</a>
        </div>

        <!-- جدول عرض العملاء -->
        <div class="card border-dark mb-3">
            <div class="card-header">قائمة العملاء</div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>الهاتف</th>
                            <th>العنوان</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>
                                    <!-- زر تعديل وحذف -->
                                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-outline-warning btn-sm">تعديل</a>
                                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العميل؟')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
