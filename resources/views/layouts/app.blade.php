<!DOCTYPE html>

<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ẩm Thực Việt - Hành trình khám phá hương vị ba miền</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec49",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102215",
                    },
                    fontFamily: {
                        "display": ["Be Vietnam Pro", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-[#0d1b11] dark:text-gray-200">
    <div class="relative flex min-h-screen w-full flex-col">
        <!-- TopNavBar -->
        <header
            class="sticky top-0 z-50 w-full border-b border-solid border-primary/20 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm">
            <div class="container mx-auto flex items-center justify-between whitespace-nowrap px-4 py-3">
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-3 text-[#0d1b11] dark:text-white">
                        <div class="size-6 text-primary">
                            <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z"
                                    fill-rule="evenodd"></path>
                                <path clip-rule="evenodd"
                                    d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg font-bold tracking-[-0.015em]">Ẩm Thực Việt</h2>
                    </div>
                    <nav class="hidden items-center gap-8 lg:flex">
                        <a class="text-sm font-medium text-primary dark:text-primary" href="#">Trang Chủ</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-primary" href="#">Miền Bắc</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-primary" href="#">Miền
                            Trung</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-primary" href="#">Miền Nam</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-primary" href="#">Công Thức</a>
                        <a class="text-sm font-medium hover:text-primary dark:hover:text-primary" href="#">Giới
                            Thiệu</a>
                    </nav>
                </div>
                <div class="flex flex-1 justify-end">
                    <label class="flex h-10 w-full max-w-xs flex-col">
                        <div class="flex h-full w-full flex-1 items-stretch rounded-lg">
                            <div
                                class="text-[#4c9a5f] dark:text-primary flex items-center justify-center rounded-l-lg border-y border-l border-primary/20 bg-primary/10 dark:bg-primary/20 dark:border-primary/30 pl-3">
                                <span class="material-symbols-outlined !text-2xl">search</span>
                            </div>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-primary/20 bg-primary/10 dark:bg-primary/20 dark:border-primary/30 dark:text-white dark:placeholder:text-gray-400 focus:outline-0 focus:ring-2 focus:ring-primary/50 h-full placeholder:text-[#4c9a5f] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal"
                                placeholder="Tìm kiếm món ăn..." value="" />
                        </div>
                    </label>
                </div>
            </div>
        </header>
        @section('sidebar')
        This is the master sidebar.
        @show
        @section('navigation')
        This is the master navigation.
        @show
        <main class="flex-grow">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <footer class="mt-auto border-t border-primary/20 bg-background-light dark:bg-background-dark">
            <div class="container mx-auto grid grid-cols-1 gap-8 px-8 py-12 text-sm md:grid-cols-4">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-3">
                        <div class="size-6 text-primary">
                            <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z"
                                    fill-rule="evenodd"></path>
                                <path clip-rule="evenodd"
                                    d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg font-bold text-[#0d1b11] dark:text-white">Ẩm Thực Việt</h2>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">Khám phá tinh hoa ẩm thực Việt Nam qua từng vùng miền.
                    </p>
                </div>
                <div class="flex flex-col gap-3">
                    <h3 class="font-bold text-[#0d1b11] dark:text-white">Khám Phá</h3>
                    <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary" href="#">Miền
                        Bắc</a>
                    <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary" href="#">Miền
                        Trung</a>
                    <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary" href="#">Miền
                        Nam</a>
                </div>
                <div class="flex flex-col gap-3">
                    <h3 class="font-bold text-[#0d1b11] dark:text-white">Thông Tin</h3>
                    <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary" href="#">Công
                        thức</a>
                    <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary" href="#">Giới
                        thiệu</a>
                    <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary" href="#">Liên
                        hệ</a>
                </div>
                <div class="flex flex-col gap-3">
                    <h3 class="font-bold text-[#0d1b11] dark:text-white">Theo dõi chúng tôi</h3>
                    <div class="flex items-center gap-4">
                        <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary"
                            href="#">Facebook</a>
                        <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary"
                            href="#">Instagram</a>
                        <a class="text-gray-600 hover:text-primary dark:text-gray-400 dark:hover:text-primary"
                            href="#">Youtube</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-primary/20 bg-background-light dark:bg-background-dark py-4 text-center">
                <p class="text-xs text-gray-500">© 2024 Ẩm Thực Việt. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>