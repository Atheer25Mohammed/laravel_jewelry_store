<!-- resources/views/jewelries/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>إضافة مجوهرات جديدة</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('jewelries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">اسم المجوهرات</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">الوصف</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">السعر</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">الصورة</label>
                <input type="file" id="image" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
@endsection

