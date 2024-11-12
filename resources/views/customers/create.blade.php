<!-- resources/views/customers/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>إضافة عميل جديد</h1>
        
        <!-- عرض الرسائل (إن وجدت) مثل النجاح أو الأخطاء -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- عرض الأخطاء في حال وجودها -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- نموذج إضافة عميل جديد -->
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf <!-- حماية من هجمات CSRF -->
            
            <div class="form-group">
                <label for="name">الاسم</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="phone">رقم الهاتف</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>

            <div class="form-group">
        <label for="address">العنوان</label>
        <input type="text" class="form-control" name="address" id="address">
    </div>

            <button type="submit" class="btn btn-primary mt-3">حفظ</button>
        </form>
    </div>
@endsection
