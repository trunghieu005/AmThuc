@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Danh sách món ăn vùng miền</h1>
    <form method="GET" action="{{ route('monan.index') }}" class="mb-3">
        <select name="vung_mien" onchange="this.form.submit()" class="form-select w-auto d-inline-block">
            <option value="">Tất cả vùng miền</option>
            <option value="Bắc" {{ (request('vung_mien')=='Bắc') ? 'selected' : '' }}>Miền Bắc</option>
            <option value="Trung" {{ (request('vung_mien')=='Trung') ? 'selected' : '' }}>Miền Trung</option>
            <option value="Nam" {{ (request('vung_mien')=='Nam') ? 'selected' : '' }}>Miền Nam</option>
        </select>
        <a href="{{ route('monan.create') }}" class="btn btn-success ms-2">Thêm món ăn</a>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên món ăn</th>
                <th>Vùng miền</th>
                <th>Mô tả</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monans as $monan)
            <tr>
                <td>
                    @if($monan->hinh_anh)
                        <img src="{{ asset('storage/'.$monan->hinh_anh) }}" width="80" />
                    @endif
                </td>
                <td>{{ $monan->ten }}</td>
                <td>{{ $monan->vung_mien }}</td>
                <td>{{ $monan->mo_ta }}</td>
                <td>
                    <a href="{{ route('monan.show', $monan->id) }}" class="btn btn-info btn-sm">Chi tiết</a>
                    <a href="{{ route('monan.edit', $monan->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('monan.destroy', $monan->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
