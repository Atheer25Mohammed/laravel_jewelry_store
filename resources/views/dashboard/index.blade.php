@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
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
