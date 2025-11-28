<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonAn;

class MonAnController extends Controller
{
    // Hiển thị danh sách món ăn, có thể lọc theo vùng miền
    public function index(Request $request)
    {
        $vung_mien = $request->get('vung_mien');
        $query = MonAn::query();
        if ($vung_mien) {
            $query->where('vung_mien', $vung_mien);
        }
        $monans = $query->get();
        return view('monan.index', compact('monans', 'vung_mien'));
    }

    // Hiển thị form tạo món ăn mới
    public function create()
    {
        return view('monan.create');
    }

    // Lưu món ăn mới
    public function store(Request $request)
    {
        $data = $request->validate([
            'ten' => 'required',
            'vung_mien' => 'required',
            'mo_ta' => 'nullable',
            'hinh_anh' => 'nullable|image'
        ]);
        if ($request->hasFile('hinh_anh')) {
            $data['hinh_anh'] = $request->file('hinh_anh')->store('images', 'public');
        }
        MonAn::create($data);
        return redirect()->route('monan.index');
    }

    // Hiển thị chi tiết món ăn
    public function show($id)
    {
        $monan = MonAn::findOrFail($id);
        return view('monan.show', compact('monan'));
    }

    // Hiển thị form sửa món ăn
    public function edit($id)
    {
        $monan = MonAn::findOrFail($id);
        return view('monan.edit', compact('monan'));
    }

    // Cập nhật món ăn
    public function update(Request $request, $id)
    {
        $monan = MonAn::findOrFail($id);
        $data = $request->validate([
            'ten' => 'required',
            'vung_mien' => 'required',
            'mo_ta' => 'nullable',
            'hinh_anh' => 'nullable|image'
        ]);
        if ($request->hasFile('hinh_anh')) {
            $data['hinh_anh'] = $request->file('hinh_anh')->store('images', 'public');
        }
        $monan->update($data);
        return redirect()->route('monan.index');
    }

    // Xóa món ăn
    public function destroy($id)
    {
        $monan = MonAn::findOrFail($id);
        $monan->delete();
        return redirect()->route('monan.index');
    }
}
