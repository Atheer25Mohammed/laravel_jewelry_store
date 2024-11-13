@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <!-- بطاقة اسم المستخدم -->
            <div class="col-md-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">اسم المستخدم</div>
                    <div class="card-body">
                        <p class="card-text">{{ Auth::user()->name }}</p>
                    </div>
                </div>
            </div>

            <!-- بطاقة البريد الإلكتروني للمستخدم -->
            <div class="col-md-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">البريد الإلكتروني</div>
                    <div class="card-body">
                        <p class="card-text">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>

            <!-- بطاقة الدور -->
            <div class="col-md-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">الدور</div>
                    <div class="card-body">
                        <p class="card-text">{{ Auth::user()->role }}</p>
                    </div>
                </div>
            </div>

            <!-- بطاقة تاريخ التسجيل -->
            <div class="col-md-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">تاريخ التسجيل</div>
                    <div class="card-body">
                        <p class="card-text">{{ Auth::user()->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- بطاقة عدد المجوهرات -->
            <div class="col-md-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">عدد المجوهرات</div>
                    <div class="card-body">
                        <p class="card-text">{{ $jewelriesCount }}</p>
                    </div>
                </div>
            </div>

            <!-- بطاقة عدد العملاء -->
            <div class="col-md-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">عدد العملاء</div>
                    <div class="card-body">
                        <p class="card-text">{{ $customersCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
