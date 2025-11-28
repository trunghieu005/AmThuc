<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ẩm Thực Vùng Miền</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Ẩm Thực Vùng Miền" style="height:60px;vertical-align:middle;">
            <span style="font-size:2em;font-weight:bold;color:#ff9900;vertical-align:middle;">amthucvm.com</span>
        </div>
        <nav>
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/mien-bac">Ẩm thực miền Bắc</a></li>
                <li><a href="/mien-trung">Ẩm thực miền Trung</a></li>
                <li><a href="/mien-nam">Ẩm thực miền Nam</a></li>
                <li><a href="/mon-ngon">Món ngon mỗi ngày</a></li>
                <li><a href="/tin-tuc">Tin tức</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <section style="flex:3;">
            <div class="hero">
                <img src="{{ asset('images/banner.jpg') }}" alt="Ẩm Thực Vùng Miền" style="width:100%;max-height:350px;object-fit:cover;">
            </div>
            <div class="food-card">
                <h2>Viên Giải Rượu: Bí Quyết Khỏe Mạnh Hơn Sau Mỗi Cuộc Vui</h2>
                <img src="{{ asset('images/ruou.jpg') }}" alt="Viên Giải Rượu" style="width:100%;max-width:600px;">
                <p>Viên giải rượu giúp bạn tỉnh táo, bảo vệ gan và sức khỏe sau mỗi cuộc vui. Xem chi tiết...</p>
            </div>
        </section>
        <aside>
            <ul>
                <li>
                    <img src="{{ asset('images/ruou.jpg') }}" alt="Viên Giải Rượu" style="width:100px;">
                    <a href="#">Viên Giải Rượu: Bí Quyết Khỏe Mạnh Hơn Sau Mỗi Cuộc Vui</a>
                </li>
                <li>
                    <img src="{{ asset('images/giai-ruou.jpg') }}" alt="Cách giải rượu" style="width:100px;">
                    <a href="#">Chia sẻ 10+ cách giải rượu nhanh nhất và hiệu quả</a>
                </li>
            </ul>
        </aside>
    </main>
    <footer>
        <p>&copy; 2025 Ẩm Thực Vùng Miền. All rights reserved.</p>
    </footer>
</body>
</html>