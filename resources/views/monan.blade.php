<!DOCTYPE html>
<html lang="vi">
@extends('layouts.app') 

@section('title', 'Phở Hà Nội - Món Ăn Nổi Bật') 
@section('content')
    <main>
        <div class="hero">
            <h1>Phở Hà Nội</h1>
            <p>Món ăn truyền thống của thủ đô.</p>
        </div>
        
        <section class="food-card">
            <h3>Công Thức</h3>
            <p>Nguyên liệu: Thịt bò, bánh phở, nước dùng hầm xương.</p>
        </section>
    </main>

    <aside>
        <h3>Món Khác</h3>
        <ul>
            <li>Bún Chả</li>
            <li>Nem Cua Bể</li>
        </ul>
    </aside>
    
@endsection

</html>