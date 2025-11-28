@extends('layouts.app')
 
@section('title', 'Page Title')
 

@section('content')
    <section class="container mx-auto p-4 @container">
                <div class="@[480px]:p-4">
                    <div class="flex min-h-[60vh] flex-col items-center justify-center gap-6 rounded-xl bg-cover bg-center bg-no-repeat p-4 @[480px]:gap-8"
                        data-alt="A vibrant collage of various Vietnamese dishes, including pho, banh mi, and spring rolls, presented beautifully."
                        style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAWUUxa0KbaSdyQc2jFxhRbRMRRPcThm7pPWpFVK8xv7SuNOzWp3HoiCyU32juHEQgVk2QWQUBuVnCV6BHdTaDpVhqqiZWhYH2bc4nTOLaclHjvS_62oiYZn4LvSJb4uDwl4HS7uCP20Adi4FSm4aXr8RLO_OuI4oBmCzFhFgui2eNuhzwxllfDU-3jpPjXAL9lqM6Sr0uhrCNvrZuvHU8imTHSWyHCtJcB09AWvFLFRkmyRVBCkuOZFys6fnxN170JTEDT-hmkrRg");'>
                        <div class="flex flex-col gap-2 text-center">
                            <h1
                                class="text-4xl font-black leading-tight tracking-[-0.033em] text-white @[480px]:text-6xl">
                                Tinh hoa Ẩm thực Việt</h1>
                            <h2 class="text-base font-normal leading-normal text-white @[480px]:text-lg">Hành trình khám
                                phá hương vị ba miền Bắc - Trung - Nam</h2>
                        </div>
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-primary px-4 text-sm font-bold leading-normal tracking-[0.015em] text-[#0d1b11] h-10 @[480px]:h-12 @[480px]:px-5 @[480px]:text-base hover:bg-opacity-90 transition-colors">
                            <span class="truncate">Khám Phá Ngay</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Section Giới thiệu 3 Miền -->
            <section class="container mx-auto py-12">
                <div class="px-4 pb-3 pt-5">
                    <h2
                        class="text-[22px] font-bold leading-tight tracking-[-0.015em] text-[#0d1b11] dark:text-white text-center sm:text-left">
                        Khám phá ẩm thực 3 miền</h2>
                </div>
                <div class="grid grid-cols-1 gap-6 p-4 md:grid-cols-3">
                    <div
                        class="flex flex-col gap-3 rounded-xl bg-background-light p-4 dark:bg-background-dark border border-primary/10 dark:border-primary/20">
                        <div class="w-full aspect-[4/3] rounded-lg bg-cover bg-center bg-no-repeat"
                            data-alt="A steaming bowl of Pho, the quintessential dish of Northern Vietnam, with fresh herbs and lime wedges."
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDOAP2zwY4asALYlt32O9S_Ckr-jOMlMrBQ3thQX-Rq-s2PuXK2jl0ajixxDZ0rScjMf8n7_ntcoE8e0W4-1o3fpV6cxrkjLDIoSr30uAKZGKUrOxvboyiQgZR0GwpjvTPTTA3hoI9CNzReJdJk-ADzhBpBdp5nUplBeF25tI-CA9G-ebKXxcWY_PIrwuUTYRhkBN_hHelqA6MdAFwmqzIm0Y6iUiOhkJN_PLWmWMMSUxwlzfSAsa6ckPY-cnBt9ETL27Gt7cXLWyg");'>
                        </div>
                        <div>
                            <p class="text-lg font-medium leading-normal text-[#0d1b11] dark:text-white">Ẩm thực Miền
                                Bắc</p>
                            <p class="text-sm font-normal leading-normal text-gray-600 dark:text-gray-400">Hương vị
                                thanh tao, tinh tế, nhấn mạnh sự tươi ngon nguyên bản của nguyên liệu.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col gap-3 rounded-xl bg-background-light p-4 dark:bg-background-dark border border-primary/10 dark:border-primary/20">
                        <div class="w-full aspect-[4/3] rounded-lg bg-cover bg-center bg-no-repeat"
                            data-alt="A colorful bowl of Bun Bo Hue, a spicy noodle soup from Central Vietnam, garnished with chili and vegetables."
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAPMUI4CuJ-OLWfhcdXuAtIk32hbW9oY-4uQKTXCkrQAKU-GxFwqJQyA7BrxH9Sf8HtyPIxMtKTruJDJkTXkCV1hxQdDL0eiF3JwO3pulO4BU6-WadakDncVuZoOIZ-lyFiRT_jKneMc-WvXCF4CfNuygqzB8qDI6St9KQlMJxVfEKNxofNL0VxRL1SLGbI3j40Ro4qb8-a6rzItv7UuSp9W8MgFIMptQ70mg8WufqEfhT5B1INsaIUXLvOncV1cH4vBgJHW-1xPI0");'>
                        </div>
                        <div>
                            <p class="text-lg font-medium leading-normal text-[#0d1b11] dark:text-white">Ẩm thực Miền
                                Trung</p>
                            <p class="text-sm font-normal leading-normal text-gray-600 dark:text-gray-400">Đậm đà, cay
                                nồng với sự kết hợp màu sắc và gia vị phong phú, độc đáo.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col gap-3 rounded-xl bg-background-light p-4 dark:bg-background-dark border border-primary/10 dark:border-primary/20">
                        <div class="w-full aspect-[4/3] rounded-lg bg-cover bg-center bg-no-repeat"
                            data-alt="A golden, crispy Banh Xeo (Vietnamese savory pancake) filled with shrimp and bean sprouts, characteristic of Southern Vietnam."
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCMRgWWYeAyLqVhDtwQEdp1ZYlIm4hOigj-0iM5MspqRqmTA_Y0AS4DuCJt6lqafHzg9C3X2NZkKQVK81sOLf_rsef02jUCzRLNMd4AmUssR1zlnKSDQwppnVSUmliccUAh8bXeWLsPxVUQlECBHhnXkkgXN-K4Br28njmEAAG9LtawsWgsFQaw-LkYIA_ZKsyM_VDm2cQShHzgDdmNIRBGxBD1498MguU8Amwn9gQkzAFsoDs4duTEHOKHlwc_NKSJdkrga-mv0XQ");'>
                        </div>
                        <div>
                            <p class="text-lg font-medium leading-normal text-[#0d1b11] dark:text-white">Ẩm thực Miền
                                Nam</p>
                            <p class="text-sm font-normal leading-normal text-gray-600 dark:text-gray-400">Vị ngọt, béo
                                đặc trưng, sử dụng đa dạng rau thơm và sản vật miền sông nước.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section Món Ăn Nổi Bật -->
            <section class="container mx-auto py-12">
                <div class="px-4 pb-3 pt-5">
                    <h2
                        class="text-[22px] font-bold leading-tight tracking-[-0.015em] text-[#0d1b11] dark:text-white text-center sm:text-left">
                        Món ăn nổi bật</h2>
                </div>
                <div class="grid grid-cols-2 gap-4 p-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-6">
                    <div class="group relative flex flex-col overflow-hidden rounded-xl">
                        <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <img class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-110"
                            data-alt="Bún Chả - Grilled pork and noodle dish."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDM8E2itig6bUmU6T7ryH0yAIpx7RIX4jBuCWjC34llljP0CAdDdcCQZms4hM-PINKN8w3OxDbr9ezPiVgUPh8ZcybsZlTmsVDqJriGiYjC6I9umK0GxrBJbcE30tuFTshn-kAbpn0WegY0CIMSBIVuXkpLXHCP2M67DUQmCfxMlMGyUqfoQx-gj03rW0QSjiupJPyokfOzsPSKInjZVmVDbm9dtYBMmfdAuqzpWuW2aPnNfs_7qwtFtAfoeBv3H0N0h05scH06vdY" />
                        <div class="absolute bottom-0 z-20 w-full p-4">
                            <p class="font-bold text-white">Bún Chả</p>
                            <p class="text-sm text-gray-300">Miền Bắc</p>
                        </div>
                    </div>
                    <div class="group relative flex flex-col overflow-hidden rounded-xl">
                        <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <img class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-110"
                            data-alt="Phở Bò - Beef noodle soup."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSb-xSP7pky4iD7mecMcSw3r7cAGYna9kM61Qj-Wqs0UHsvcXB4M2-QEIsKGPI48y03yDG1fhn8mJjaeMh_C4FrmQY6-GzTMMa_SWbDCE6chPN9GI9YAioLx8tqatVugxr3KmzoI9nAJOXZ-6I6OQ6OjkMdOrH_TsVonK0ezFhgH9yO03OhkrizAFZvyQmS447wLXfVpXWqhiRnYQRroBwTZIbShG710N8R1fh3OVtPmUsK8JqdFzUYXrOVoYsRCQpWGBmd1r3rvs" />
                        <div class="absolute bottom-0 z-20 w-full p-4">
                            <p class="font-bold text-white">Phở Bò</p>
                            <p class="text-sm text-gray-300">Miền Bắc</p>
                        </div>
                    </div>
                    <div class="group relative flex flex-col overflow-hidden rounded-xl">
                        <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <img class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-110"
                            data-alt="Mì Quảng - Turmeric noodle dish from Central Vietnam."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCom-qCS93y6WVuOXA3hn2bz76xhbkXifdFMJSjvUMNYJq6obrRG04ZbHSIB_YYm8gT5yoPwgsaRiJf7KzCGcJXtJus9j9_WT2ZvXA4LveovDxgaXofTFuqy_HUeE4DjB7YYiab7ymanrlIbme6qeli3dKgk-YUQIT10Tx4NnmT2XNFz3ZvPNoa3tLP8L-WHOIPdju3akRLjWguSKil0xKi0IZnqQ6jO9MdvhvGxoKyI3-zGHg6pPklyUKxuPeyk8yAn8D4-H_RhpY" />
                        <div class="absolute bottom-0 z-20 w-full p-4">
                            <p class="font-bold text-white">Mì Quảng</p>
                            <p class="text-sm text-gray-300">Miền Trung</p>
                        </div>
                    </div>
                    <div class="group relative flex flex-col overflow-hidden rounded-xl">
                        <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <img class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-110"
                            data-alt="Cơm Tấm - Broken rice with grilled pork chop."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_dw9Cffrz4oxk4f8uxTU11Ad1DdHcAzddM76eaRd1ffJ33gTQQ2a1Sy8IbaFTdahnzS4Hf4eb_gydffv-iIAwrz7aqEIhYIYXXq8Zx_g-uKpdH6ZFcXysAhcct3PLQxIcia73sNLsMD_g-nTi0c38g2hCpv1i9Mo-osvwTh3IeoQq3d-z9gApDalW4t2nyM-A9x55b7-CON-GImHoW_VBdz9B6J7l9IjGeBealAZyOL7h3h_DURg-cJlkzMDXXGmUb7udcOR30H0" />
                        <div class="absolute bottom-0 z-20 w-full p-4">
                            <p class="font-bold text-white">Cơm Tấm</p>
                            <p class="text-sm text-gray-300">Miền Nam</p>
                        </div>
                    </div>
                </div>
            </section>
@endsection