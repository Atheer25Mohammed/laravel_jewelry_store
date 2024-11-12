@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>عرض المجوهرات</h2>

        <!-- الزر داخل d-grid لتكون محاذاته لليمين -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('jewelries.create') }}" class="btn btn-outline-primary" type="button">إضافة مجوهرات جديدة</a>
        </div>

        <div class="row mt-4">
            @foreach ($jewelries as $jewelry)
                <div class="col-md-4 mb-4">
                    <div class="card mb-3">
                        <!-- الجزء الخاص بالصورة -->
                        <div class="col-md-12 d-flex justify-content-center">
                            <!-- عرض الصورة بناءً على المسار المخزن في قاعدة البيانات -->
                            <img src="{{ asset('storage/' . $jewelry->image) }}" class="img-fluid rounded-start" alt="Jewelry Image" style="height: 200px; object-fit: cover;">
                        </div>

                        <!-- الجزء الخاص بالمحتوى -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $jewelry->name }}</h5>
                            <p class="card-text">{{ Str::limit($jewelry->description, 100) }}</p>
                            <p class="card-text"><strong>السعر:</strong> {{ $jewelry->price }} ريال سعودي</p>

                            <!-- مجموعة الأزرار (تعديل، حذف) -->
                            <div class="btn-group w-100 mt-3" role="group" aria-label="Action buttons">
                                <a href="{{ route('jewelries.edit', $jewelry->id) }}" class="btn btn-outline-warning">تعديل</a>

                                <form action="{{ route('jewelries.destroy', $jewelry->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه المجوهرات؟')">حذف</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
