@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>إضافة عميل جديد</h1>

        <!-- عرض الرسائل (إن وجدت) مثل النجاح أو الأخطاء -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
        <div class="card border-dark mb-3" style="max-width: 40rem;">
            <div class="card-header">تفاصيل العميل</div>
            <div class="card-body">
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group mb-3">
                        <label for="name">الاسم</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">رقم الهاتف</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="address">العنوان</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">حفظ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
