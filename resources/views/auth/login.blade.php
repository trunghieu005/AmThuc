<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
@section('content')

    <div class="row g-0 flex-grow-1">
<div class="col-lg-6 d-flex align-items-center justify-content-center py-5">
<div class="w-100 p-4" style="max-width: 28rem;">
<div class="d-flex align-items-center gap-3 mb-5">
<span class="material-symbols-outlined text-primary" style="font-size: 2.25rem;">ramen_dining</span>
<span class="fs-4 fw-bold">Ẩm Thực Việt</span>
</div>
<div class="mb-5">
<h1 class="h2 fw-bolder mb-2">Chào mừng trở lại</h1>
<p class="text-secondary">Đăng nhập để khám phá tinh hoa ẩm thực Việt</p>
</div>
<form class="d-flex flex-column gap-4">
<div>
<label class="form-label fw-medium" for="email">Email hoặc Tên đăng nhập</label>
<div class="input-group input-group-lg">
<span class="input-group-text bg-body border-end-0">
<span class="material-symbols-outlined text-secondary">person</span>
</span>
<input class="form-control border-start-0" id="email" placeholder="Nhập email của bạn" type="email"/>
</div>
</div>
<div>
<label class="form-label fw-medium" for="password">Mật khẩu</label>
<div class="input-group input-group-lg">
<span class="input-group-text bg-body border-end-0">
<span class="material-symbols-outlined text-secondary">lock</span>
</span>
<input class="form-control border-start-0" id="password" placeholder="Nhập mật khẩu của bạn" type="password"/>
</div>
</div>
<div class="d-flex justify-content-end">
<a class="link-success small fw-medium text-decoration-underline" href="#">Quên mật khẩu?</a>
</div>
<div class="d-grid gap-3">
<button class="btn btn-primary btn-lg fw-bold" type="submit">Đăng nhập</button>
<p class="text-center text-secondary mb-0 small">
                            Chưa có tài khoản? <a class="fw-bold link-success text-decoration-underline" href="#">Đăng ký ngay</a>
</p>
</div>
<div class="d-grid gap-3 mt-3">
<div class="d-flex align-items-center">
<hr class="w-100"/>
<span class="px-3 text-secondary small">Hoặc đăng nhập với</span>
<hr class="w-100"/>
</div>
<div class="row g-3">
<div class="col">
<button class="btn btn-outline-secondary w-100" type="button">
<svg class="me-2" height="20" viewBox="0 0 48 48" width="20"><path d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" fill="#FFC107"></path><path d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" fill="#FF3D00"></path><path d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.222,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" fill="#4CAF50"></path><path d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.574l6.19,5.238C42.01,35.638,44,30.138,44,24C44,22.659,43.862,21.35,43.611,20.083z" fill="#1976D2"></path></svg>
                                    Google
                                </button>
</div>
<div class="col">
<button class="btn btn-outline-secondary w-100" type="button">
<svg class="me-2" height="20" viewBox="0 0 24 24" width="20"><path d="M22,12c0-5.523-4.477-10-10-10S2,6.477,2,12c0,4.99,3.657,9.128,8.438,9.879V15.12h-2.54V12h2.54V9.797c0-2.506,1.492-3.89,3.777-3.89c1.094,0,2.238,0.195,2.238,0.195v2.46h-1.26c-1.24,0-1.628,0.772-1.628,1.562V12h2.773l-0.443,3.12h-2.33V21.879C18.343,21.128,22,16.99,22,12z" fill="#1877F2"></path></svg>
                                    Facebook
                                </button>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="d-none d-lg-flex col-lg-6 align-items-center justify-content-center p-4" style="background-color: rgba(var(--bs-primary-rgb), 0.1);">
<div class="w-100 h-100 rounded-3 bg-image-cover" data-alt="A delicious bowl of Vietnamese Pho with fresh herbs and lime." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDyZN0q8Gu0y7_qDLFnsJ_BETRzwpsivivAPm_cU-9qDCiXMDDhH4iM32cjL3onTArJxyjoTeZaOpvigBmHCU6wYH900eQWe_GkinpOVWXVtO16sDfYIS5ZE5zQC3defr-TyNb4yhnXUZ2vBkUJRYV3x0y-s6HU1k1muPyNvNSpy3HgUN82vmElMILtvUCV1DyMgaAB9_fvWWba9o8F0Ehk-D3pvZr6TR_NBSsaUnuOita1HzL0XQUI8YNxkuYoGX7g6VQNlfSzbK0");'></div>
</div>
</div>
@endsection
    
</x-guest-layout>
