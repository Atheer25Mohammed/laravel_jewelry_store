<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // عرض جميع العملاء
    public function index()
    {
        $customers = Customer::all(); // جلب جميع العملاء
        return view('customers.index', compact('customers'));
    }

    // عرض صفحة إضافة عميل جديد
    public function create()
    {
        return view('customers.create');
    }

    // تخزين العميل الجديد في قاعدة البيانات
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|string',
            'address' => 'nullable|string',
        ]);

        // حفظ العميل في قاعدة البيانات
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('customers.index')->with('success', 'تم إضافة العميل بنجاح');
    }
}
