<?php

namespace App\Http\Controllers;

use App\Models\Jewelry;
use Illuminate\Http\Request;

class JewelryController extends Controller
{
    // عرض جميع المجوهرات
    public function index()
    {
        $jewelries = Jewelry::all();
        return view('jewelries.index', compact('jewelries'));
    }

    // عرض نموذج إضافة مجوهرات جديدة
    public function create()
    {
        return view('jewelries.create');
    }

    // تخزين المجوهرات الجديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image',
        ]);

        // تخزين الصورة في المجلد المناسب
        $imagePath = $request->file('image')->store('public/images');

        Jewelry::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('jewelries.index');
    }

    // عرض نموذج التعديل للمجوهرات
    public function edit($id)
    {
        $jewelry = Jewelry::findOrFail($id);
        return view('jewelries.edit', compact('jewelry'));
    }

    // تحديث المجوهرات بعد التعديل
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        // العثور على المجوهرات
        $jewelry = Jewelry::findOrFail($id);

        // تحديث البيانات
        $jewelry->name = $request->name;
        $jewelry->description = $request->description;
        $jewelry->price = $request->price;

        // إذا كانت هناك صورة جديدة، نقوم بتخزينها
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $jewelry->image = $imagePath;
        }

        // حفظ التغييرات
        $jewelry->save();

        return redirect()->route('jewelries.index');
    }

    // حذف المجوهرات
    public function destroy($id)
    {
        $jewelry = Jewelry::findOrFail($id);
        $jewelry->delete();

        return redirect()->route('jewelries.index');
    }
}
