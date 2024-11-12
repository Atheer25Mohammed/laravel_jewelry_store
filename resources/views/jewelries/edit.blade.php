<!-- resources/views/jewelries/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>تعديل المجوهرات</h2>

        <!-- نموذج التعديل -->
        <form action="{{ route('jewelries.update', $jewelry->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">الاسم</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $jewelry->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">الوصف</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $jewelry->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">السعر</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $jewelry->price) }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">الصورة</label>
                <input type="file" class="form-control" id="image" name="image">
                @if ($jewelry->image)
                    <img src="{{ asset('storage/' . $jewelry->image) }}" alt="Jewelry Image" style="max-width: 100px; margin-top: 10px;">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">تحديث</button>
        </form>
    </div>
@endsection
