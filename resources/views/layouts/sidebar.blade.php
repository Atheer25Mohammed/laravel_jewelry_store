<!-- resources/views/layouts/sidebar.blade.php -->
<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark text-white">
    <div class="d-flex flex-column align-items-start align-items-sm-start px-3 pt-2 text-white min-vh-100">
        
        <!-- القائمة الجانبية -->
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start align-items-sm-start" id="menu">
            
            <!-- رابط إلى الصفحة الرئيسية -->
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link align-start text-white px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">الرئيسية</span>
                </a>
            </li>

            <!-- رابط إلى قائمة المجوهرات -->
            <li class="nav-item">
                <a href="{{ route('jewelries.index') }}" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-gem"></i> <span class="ms-1 d-none d-sm-inline">المجوهرات</span>
                </a>
            </li>

            <!-- رابط إلى قائمة العملاء -->
            <li class="nav-item">
                <a href="{{ route('customers.index') }}" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-person"></i> <span class="ms-1 d-none d-sm-inline">العملاء</span>
                </a>
            </li>

            <!-- رابط إلى إضافة منتج -->
            <li class="nav-item">
                <a href="{{ route('jewelries.create') }}" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-plus-square"></i> <span class="ms-1 d-none d-sm-inline">إضافة منتج</span>
                </a>
            </li>
            
        </ul>

        <hr>

        <!-- حساب المستخدم (Dropdown) -->
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span> <!-- هنا يتم عرض اسم المستخدم الحالي -->
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">مشروع جديد...</a></li>
                <li><a class="dropdown-item" href="#">الإعدادات</a></li>
                <li><a class="dropdown-item" href="#">الملف الشخصي</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">تسجيل الخروج</a></li>
            </ul>
        </div>
    </div>
</div>
