    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
        <title>HOC</title>
    </head>

    <body class="landingpage">
        <div id="home"></div>
        {{-- nav --}}
        <header
            class="fixed phone:hidden tablet:hidden desktop:hidden  laptop:hidden top-0 bg-transparent w-full h-[80px]   flex items-center justify-between desktop2:px-[50px] desktop3:px-[150px] py-[20px]">
            <img src={{ asset('image/logoanamexa.svg') }} class="w-auto h-auto" alt="">
            <div class="flex items-center gap-x-[36px]">
                <a href="#home" class="font-[600] text-[16px] active:bg-black   text-white uppercase">Home</a>
                <a href="#pionir" class="font-[600] text-[16px]  text-white uppercase">pionir</a>
                <a href="#tantangan" class="font-[600] text-[16px]  text-white uppercase">tantangan & kesempatan</a>
                <a href="#keuntungan" class="font-[600] text-[16px]  text-white uppercase">keuntungan</a>
                <a href="#manfaat" class="font-[600] text-[16px]  text-white uppercase">manfaat</a>
                <a href="#kontak">
                    <button class="bg-[#0081F7] py-[4px] px-[16px] text-white font-[600] rounded-[4px]">HUBUNGI
                        KAMI</button>
                </a>
            </div>
        </header>

        {{-- nav --}}
        <div
            class="bg-[#00182F] top-0  desktop2:hidden w-full fixed h-auto phone:hidden tablet:hidden  laptop:hidden flex items-center py-[1.5%] justify-between  px-[10px] desktop3:hidden">
            <img src={{ asset('image/logoanamexa.svg') }} class="w-auto h-auto" alt="">
            <div class="flex items-center desktop:gap-x-[16px] ">
                <a href="#home" class="font-[600] text-[16px]   text-white uppercase">Home</a>
                <a href="#pionir" class="font-[600] text-[16px]  text-white uppercase">pionir</a>
                <a href="#tantangan" class="font-[600] text-[16px]  text-white uppercase">tantangan & kesempatan</a>
                <a href="#keuntungan" class="font-[600] text-[16px]  text-white uppercase">keuntungan</a>
                <a href="#manfaat" class="font-[600] text-[16px]  text-white uppercase">manfaat</a>
                <a href="#kontak">
                    <button class="bg-[#0081F7] py-[4px] px-[16px] text-white font-[600] rounded-[4px]">HUBUNGI
                        KAMI</button>
                </a>
            </div>
        </div>
        <div class="bg-[#00182F] top-0  w-full   fixed h-auto z-10  desktop3:hidden desktop2:hidden desktop:hidden">
            <div x-data="{ open: false }">
                <div class=" flex items-center py-[1.5%]  justify-between  px-[10px]">
                    <img src={{ asset('image/logoanamexa.svg') }} class="w-auto h-auto" alt="">
                    <button @click="open = !open">
                        <span class=" material-symbols-outlined cursor-pointer text-white text-[40px]">
                            menu
                        </span>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="bg-[#00182F] grid px-[10px] nav-menu  w-full h-full border-t border-white">
                    <a href="#home"
                        class="font-[600] text-[16px] phone:text-[14px] phone:py-[3%] py-[2%]   text-white uppercase">Home</a>
                    <a href="#pionir"
                        class="font-[600] text-[16px] phone:text-[14px] phone:py-[3%] pb-[2%]  text-white uppercase">pionir</a>
                    <a href="#tantangan"
                        class="font-[600] text-[16px] phone:text-[14px] phone:py-[3%] pb-[2%] text-white uppercase">tantangan
                        &
                        kesempatan</a>
                    <a href="#keuntungan"
                        class="font-[600] text-[16px] phone:text-[14px] phone:py-[3%] pb-[2%]  text-white uppercase">keuntungan</a>
                    <a href="#manfaat"
                        class="font-[600] text-[16px] phone:text-[14px] phone:py-[3%] pb-[2%]  text-white uppercase">manfaat</a>
                    <a href="#kontak"
                        class="font-[600] text-[16px] phone:text-[14px] phone:py-[3%] pb-[2%]  text-white uppercase">Hubungi
                        Kami</a>
                </nav>
            </div>
        </div>
        {{-- Mobile --}}
        {{-- nav --}}
        <div
            class="homelanding desktop3:h-[1080px] desktop2:h-full desktop:h-full phone:h-full tablet:h-full laptop:h-full w-full">
            <div
                class="bghome desktop3:h-[1080px] desktop2:h-full desktop:h-full phone:h-full tablet:h-full  laptop:h-full w-full">
                <div id="home"
                    class="desktop3:pl-[150px] desktop:pl-[100px] desktop2:pl-[100px] desktop:pt-[13%] desktop2:pt-[13%] phone:px-[4%]  tablet:px-[4%]  laptop:px-[6%] laptop:pt-[10%] pt-[13%] ">
                    <p
                        class="text-[#F7B84B] desktop3:leading-[24px] desktop2:leading-[24px] desktop:leading-[24px] laptop:leading-[24px] font-[600] phone:text-center phone:pt-[10%] tablet:text-center tablet:pt-[10%] text-[16px] ">
                        ANAMEXA HOC
                    </p>
                    <p
                        class="font-bold desktop3:text-[56px] desktop2:text-[56px] desktop:text-[40px] desktop3:leading-[72px] desktop2:leading-[72px] laptop:text-[32px]  phone:text-[24px] tablet:text-[28px] py-[24px] phone:text-center tablet:text-center  text-white ">
                        Optimalisasi Operasional <br class="phone:hidden">
                        Rumah
                        Sakit
                        untuk <br class="phone:hidden tablet:hidden">
                        Pengalaman
                        Kesehatan Terbaik</p>
                    <p
                        class="font-[400] desktop3:text-[24px] desktop2:text-[24px] desktop:text-[20px] laptop:text-[18px] phone:text-[16px] phone:text-justify tablet:text-[18px] tablet:text-justify desktop3:leading-[36px] text-[#C3C3C3]">
                        Aplikasi pusat
                        operasional rumah
                        sakit dengan alur kerja otomatis, <br class="phone:hidden tablet:hidden"> menghubungkan seluruh
                        data, dan
                        memberikan rekomendasi ​​untuk <br class="phone:hidden tablet:hidden"> pengambilan keputusan.
                    </p>
                </div>
                <div class="pt-[11%] phone:hidden tablet:hidden">
                    <p class="text-white blink_me text-center pb-[5px] font-normal leading-[36px]">Scroll untuk
                        melanjutkan
                    </p>
                    <div class="flex cursor-pointer justify-center">
                        <a href="#pionir">
                            <img src={{ asset('image/drop.svg') }}
                                class="desktop3:w-[2vw]  desktop2:w-[3vw] desktop:w-[4vw] laptop:w-[4vw]"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Home --}}
        {{-- Pionir --}}
        <div id="pionir"
            class="pionir  desktop3:h-[1080px] desktop2:h-full desktop:h-full desktop:pt-[90px] desktop:pb-[40px] phone:h-full tablet:h-full w-full phone:pt-[100px]  tablet:pt-[100px] desktop3:pt-[80px] desktop2:pt-[80px] laptop:pt-[60px]  desktop3:pb-[40px]  desktop2:pb-[40px] ">
            <p class="text-center text-[16px] leading-[24px] font-[600] text-[#F7B84B]">HOC PERTAMA DI INDONESIA</p>
            <p
                class="text-center  desktop3:text-[56px] desktop2:text-[56px] desktop2:leading-[72px] desktop:text-[40px] laptop:text-[32px] phone:text-[24px] tablet:text-[28px]  desktop3:leading-[72px] font-[700] pt-[16px] text-white">
                Inovasi
                Hospital Operation
                <br class="phone:hidden tablet:hidden"> Center
                Pertama di
                Indonesia
            </p>
            <div class="flex justify-center phone:py-[28px] tablet:py-[28px] laptop:py-[28px]">
                <img src={{ asset('image/pionirDevice.svg') }}
                    class="desktop3:w-[23vw] desktop2:w-[25vw] desktop:w-[45vw]  phone:w-[70vw] tablet:w-[70vw] laptop:w-[50vw] h-full"
                    alt="">
            </div>
            <div
                class="desktop2:flex desktop2:justify-between desktop2:items-center desktop2:px-[150px] laptop:grid laptop:grid-cols-1 laptop:gap-y-5 tablet:grid tablet:grid-cols-1 tablet:gap-y-5 phone:grid phone:grid-cols-1 phone:gap-y-5 desktop:flex desktop:justify-between desktop:items-center  desktop3:flex desktop3:justify-between desktop3:items-center phone:px-[5%] desktop3:px-[150px] desktop:px-[50px]">
                <div>
                    <img src={{ asset('image/logo1.svg') }}
                        class="desktop3:w-[3vw] desktop2:w-[4vw] desktop:w-[6vw] phone:w-[15vw]   tablet:w-[10vw] laptop:w-[8vw] pb-[14px] mx-auto h-auto"
                        alt="">
                    <p
                        class="text-white font-[600] leading-[36px] text-[18px] desktop:text-[16px] desktop2:text-[16px] text-center">
                        Real-Time
                        dan Integrasi
                        antar <br class="phone:hidden tablet:hidden laptop:hidden "> modul
                        dan
                        SIM RS
                    </p>
                </div>
                <div>
                    <img src={{ asset('image/logo2.svg') }}
                        class="desktop3:w-[3vw] desktop2:w-[4vw] desktop:w-[6vw] laptop:w-[8vw] phone:w-[15vw] tablet:w-[10vw] pb-[14px] mx-auto h-auto"
                        alt="">
                    <p
                        class="text-white font-[600] leading-[36px] text-[18px] desktop:text-[16px]  desktop2:text-[16px] text-center">
                        Rekomendasi
                        dan Prediksi
                        untuk <br class="phone:hidden">
                        pengambilan
                        keputusan yang cepat, akurat, <br class="phone:hidden laptop:hidden tablet:hidden"> dan aman
                    </p>
                </div>
                <div>
                    <img src={{ asset('image/logo3.svg') }}
                        class="desktop3:w-[3vw] desktop2:w-[4vw] desktop:w-[6vw] phone:w-[15vw] laptop:w-[8vw] tablet:w-[10vw] pb-[14px] mx-auto h-auto"
                        alt="">
                    <p
                        class="text-white font-[600] leading-[36px] text-[18px] desktop:text-[16px] desktop2:text-[16px] text-center">
                        Sistem yang
                        intuitif dan
                        adaptif <br class="phone:hidden">
                        sesuai
                        kebijakan dan proses <br class="phone:hidden laptop:hidden tablet:hidden"> bisnis Rumah Sakit
                    </p>
                </div>
            </div>
            <div
                class="phone:hidden tablet:hidden flex cursor-pointer justify-center pt-[4%] desktop:pt-[6%] laptop:pt-[6%]">
                <a href="#tantangan">
                    <img src={{ asset('image/drop.svg') }}
                        class="desktop3:w-[2vw] desktop2:w-[3vw] desktop:w-[4vw] laptop:w-[4vw]" alt="">
                </a>
            </div>
        </div>
        {{-- Pionir --}}
        {{-- TANTANGAN --}}
        <div id="tantangan"
            class="tantangan desktop3:h-[1080px] desktop2:h-full desktop:h-full phone:h-full tablet:h-full w-full laptop:h-full pt-[120px]">
            <p class="text-center text-[16px] font-[600] leading-[24px] text-[#F7B84B]">TANTANGAN DAN KESEMPATAN HOC
            </p>
            <p
                class="text-center desktop3:text-[56px] desktop2:text-[56px] desktop:text-[40px] phone:text-[24px] tablet:text-[28px] laptop:text-[32px] font-[700] pt-[16px] desktop3:leading-[72px] text-white">
                Tantangan dan
                kesempatan <br class="phone:hidden">
                Hospital
                Operation
                Center</p>
            <div
                class="grid desktop2:flex desktop2:justify-evenly desktop2:ml-[0%] desktop2:py-[80px] desktop3:grid-cols-2 desktop3:ml-[22%] desktop3:py-[80px]  desktop:grid-cols-2 desktop:ml-[9%] desktop:gap-x-5 desktop:py-[80px]  phone:px-[8%] phone:gap-y-5 phone:py-[30px] tablet:px-[8%] tablet:gap-y-5 tablet:py-[30px] laptop:px-[8%] laptop:gap-y-5 laptop:py-[30px]">
                <div>
                    <p
                        class="uppercase text-[24px] font-[700] text-white phone:text-center tablet:text-center  laptop:text-center">
                        Tantangan
                    </p>
                    <p
                        class="text-[18px] font-[400] pt-[16px] text-[#C3C3C3] phone:text-justify tablet:text-justify laptop:text-justify">
                        Manajemen arus pasien yang
                        tidak efektif <br class="phone:hidden tablet:hidden laptop:hidden">
                        mengakibatkan banyaknya waktu yang terbuang <br
                            class="phone:hidden tablet:hidden laptop:hidden">
                        sehingga
                        berakibat pada waktu
                        menunggu yang lama,
                        <br class="phone:hidden tablet:hidden laptop:hidden">
                        penolakan pasien, dan penggunaan sumber daya <br
                            class="phone:hidden tablet:hidden laptop:hidden">
                        rumah sakit
                        yang tidak
                        optimal.
                    </p>
                </div>
                <div>
                    <p
                        class="uppercase text-[24px] font-[700] text-white phone:text-center tablet:text-center laptop:text-center">
                        KESEMPATAN
                    </p>
                    <p
                        class="text-[18px] font-[400] pt-[16px] text-[#C3C3C3] phone:text-justify tablet:text-justify laptop:text-justify">
                        Meningkatkan proses
                        pengolahan informasi
                        untuk <br class="phone:hidden tablet:hidden laptop:hidden"> membuat keputusan yang lebih cepat
                        dan
                        tepat <br class="phone:hidden tablet:hidden laptop:hidden"> sasaran dalam
                        manajemen arus pasien dan
                        <br class="phone:hidden tablet:hidden laptop:hidden">
                        penggunaan kapasitas Rumah Sakit

                    </p>
                </div>
            </div>
            <div class="flex justify-center">
                <img src={{ asset('image/ic-tantangan-kesempatan-pkg.svg') }}
                    class="tablet:w-full tablet:px-[9%] phone:w-full phone:px-[9%] laptop:w-full laptop:px-[9%] laptop:pb-[5%] desktop3:w-[50vw] desktop3:ml-[3%] desktop3:pb-[7%] desktop2:w-[50vw] desktop2:ml-[3%] desktop2:pb-[7%] desktop:w-[70vw] desktop:ml-[3%] desktop:pb-[7%]"
                    alt="">
            </div>
            <div class="phone:hidden tablet:hidden flex cursor-pointer justify-center">
                <a href="#keuntungan">
                    <img src={{ asset('image/drop.svg') }}
                        class="desktop3:w-[2vw] desktop2:w-[3vw] h-full  desktop:w-[4vw] laptop:w-[5vw]"
                        alt="">
                </a>
            </div>

        </div>
        {{-- TANTANGAN --}}
        {{-- KEUNTUNGAN --}}
        <div id="keuntungan"
            class=" keuntungan  tablet:h-full desktop:h-full laptop:h-full desktop3:h-[1080px]  desktop2:h-full phone:h-full w-full">
            <div
                class="bgkeuntungan desktop3:h-[1080px] desktop2:h-full desktop:h-full phone:h-full laptop:h-full tablet:h-full w-full">
                <div class="pt-[100px] pb-[40px]">
                    <p class="text-center text-[16px] font-[600] text-[#F7B84B]">KEUNTUNGAN HOC</p>
                    <p
                        class="text-center desktop3:text-[56px] desktop2:text-[56px] desktop:text-[40px] phone:text-[24px] tablet:text-[28px] laptop:text-[32px]  font-[700] py-[16px] text-white">
                        Peningkatan yang diberikan <br class="phone:hidden "> oleh
                        Anamexa HOC</p>
                    <p
                        class="text-center tablet:text-center tablet:px-[8%] phone:text-justify phone:px-[8%] desktop3:text-[24px] desktop2:text-[24px] laptop:text-[20px] desktop:text-[16px] phone:text-[18px] font-[400] text-[#C3C3C3]">
                        KPI berdasar
                        dari performa pada
                        studi
                        kasus
                        yang <br class="phone:hidden tablet:hidden"> dilakukan di Rumah Sakit</p>
                </div>
                <div
                    class="desktop:grid desktop:px-[80px] desktop:grid-cols-3 desktop:gap-x-5 laptop:grid laptop:grid-cols-3 laptop:gap-x-5  phone:px-[8%] laptop:px-[8%] tablet:px-[8%] desktop3:gap-x-[24px] desktop3:pt-[40px] desktop3:justify-center desktop3:flex desktop3:items-center desktop3:container desktop3:mx-auto  desktop3:px-[150px] desktop2:grid desktop2:grid-cols-3 desktop2:pt-[76px] desktop2:gap-x-[24px] desktop2:px-[80px]">
                    <div
                        class="border border-[#E1E2E5] rounded-[4px] px-[16px] pt-[22px] pb-[24px] text-white w-full h-auto ">
                        <p class="text-center text-white">Peningkatan hingga</p>
                        <div class="flex items-center justify-center gap-x-[24px]">
                            <img src={{ asset('image/Panah.svg') }} class="mr-[1%]" alt="">
                            <p class="text-[60px] font-[400] ">15%</p>
                        </div>
                        <p class="text-center text-white pt-[16px] text-[24px]">Okupansi tempat tidur</p>
                    </div>
                    <div
                        class="border border-[#E1E2E5] rounded-[4px] px-[16px] pt-[22px] pb-[24px] phone:my-[5%] tablet:my-[5%] text-white w-full h-auto">
                        <p class="text-center text-white">Peningkatan hingga</p>
                        <div class="flex items-center justify-center gap-x-[24px]">
                            <img src={{ asset('image/Panah.svg') }} class="mr-[1%]" alt="">
                            <p class="text-[60px] font-[400]">30%</p>
                        </div>
                        <p class="text-center text-white pt-[16px] text-[24px]">Efisiensi Waktu Menunggu</p>
                    </div>
                    <div
                        class="border border-[#E1E2E5] rounded-[4px] px-[16px] pt-[22px] pb-[24px] text-white w-full h-auto">
                        <p class="text-center text-white">Peningkatan hingga</p>
                        <div class="flex items-center justify-center gap-x-[24px]">
                            <img src={{ asset('image/Panah.svg') }} class="mr-[1%]" alt="">
                            <p class="text-[60px] font-[400]">9%</p>
                        </div>
                        <p class="text-center text-white pt-[16px] text-[24px]">Efisiensi Length of Stay</p>
                    </div>
                </div>
                <p
                    class="text-center text-[#C3C3C3] pt-[48px] font-normal text-[16px] phone:px-[5%] tablet:px-[5%] leading-[24px]">
                    *Bergantung pada
                    kesiapan
                    operasional dan kondisi manajemen rumah sakit
                </p>
                <div class="flex phone:hidden tablet:hidden cursor-pointer justify-center pt-[8%]">
                    <a href="#manfaat">
                        <img src={{ asset('image/drop.svg') }}
                            class="desktop3:w-[2vw] desktop2:w-[3vw] desktop:w-[4vw]   laptop:w-[5vw]" alt="">
                    </a>
                </div>
            </div>
        </div>
        {{-- KEUNTUNGAN --}}
        {{-- Manfaat --}}
        <div id="manfaat"
            class="manfaat  tablet:h-full laptop:h-full desktop:h-full desktop2:h-full  phone:h-full desktop3:h-[1080px] w-full">
            <div
                class="bgmanfaat phone:h-full tablet:h-full laptop:h-full desktop:h-full desktop2:h-full desktop3:h-[1080px] w-full">
                <div class="desktop3:pl-[150px] desktop2:pl-[80px] desktop:pl-[80px] laptop:pl-[8%] pt-[100px]">
                    <p class="text-[#F7B84B] phone:text-center tablet:text-center font-[600] text-[16px] ">MANFAAT HOC
                    </p>
                    <p
                        class="font-bold desktop3:text-[56px] desktop2:text-[56px] desktop:text-[40px] laptop:text-[32px] phone:text-[24px] tablet:text-[28px] phone:text-center tablet:text-center py-[24px] text-white ">
                        Meningkatkan kepuasan
                        bagi <br class="phone:hidden"> semua peran
                        penting di
                        Rumah <br class="phone:hidden tablet:hidden"> Sakit</p>
                    <p
                        class="font-[400] desktop3:text-[24px] desktop2:text-[24px] desktop:text-[16px] laptop:text-[20px] phone:text-[18px] phone:text-center tablet:text-[18px] tablet:text-center text-[#C3C3C3]">
                        Berfokus
                        pada kesinambungan
                        interaksi yang
                        berkelanjutan
                    </p>
                </div>
                <div
                    class="desktop:grid desktop:grid-cols-3 desktop:mx-[8%] desktop:gap-x-5 desktop:pt-[36px] laptop:grid laptop:grid-cols-3 laptop:mx-[8%] laptop:gap-x-5 laptop:pt-[36px] desktop3:flex desktop3:items-start desktop3:container desktop3:mx-auto desktop3:px-[150px] desktop3:gap-x-[24px] desktop3:pt-[76px] desktop3:justify-center phone:pt-[5%] phone:mx-[5%] tablet:pt-[5%] tablet:mx-[5%] desktop2:grid desktop2:grid-cols-3 desktop2:pt-[76px] desktop2:gap-x-[24px] desktop2:px-[80px]">
                    <div
                        class="border border-[#E1E2E5] rounded-[4px] p-[24px] text-white w-full h-[239px] desktop2:h-full  laptop:h-full phone:h-full tablet:h-full desktop:h-full">
                        <p class=" text-white pb-[16px] font-[700] text-[24px] leading-[24px]">Rumah Sakit</p>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Optimalisasi kapasitas rumah sakit
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Peningkatan perputaran (turnover) pasien
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            peningkatan penilaian rumah sakit
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            peningkatan
                            keuntungan</li>
                    </div>
                    <div
                        class="border border-[#E1E2E5] rounded-[4px] p-[24px] text-white w-full h-[239px] desktop2:h-full laptop:h-full phone:my-[20px] tablet:my-[20px] phone:h-full tablet:h-full desktop:h-full">
                        <p class=" text-white pb-[16px] font-[700] text-[24px] leading-[24px]">Pasien</p>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Meminimalisir penolakan pasien
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Efisiensi waktu tunggu pasien
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Transparansi tahap perawatan
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Kepuasan pasien yang
                            terukur</li>
                    </div>
                    <div
                        class="border border-[#E1E2E5] rounded-[4px] p-[24px] text-white w-full h-[239px] desktop2:h-full laptop:h-full desktop:h-full phone:h-full tablet:h-full">
                        <p class=" text-white pb-[16px] font-[700] text-[24px] leading-[24px]">Tenaga Kesehatan</p>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Mitigasi resiko kekurangan tenaga kesehatan lebih awal
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Meminimalisir turnover tenaga kesehatan
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Meminimalisir tingkat stress tenaga kesehatan
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Meningkatkan kepuasan
                            tenaga kesehatan
                        </li>
                        <li
                            class="text-white font-[400] text-[16px] laptop:pb-[10px] desktop2:pb-[10px] leading-[24px]">
                            Pengeluaran lebih
                            efektif dan terukur
                        </li>
                    </div>

                </div>
                <div class="flex cursor-pointer phone:hidden tablet:hidden justify-center pt-[7%]">
                    <a href="#kontak">
                        <img src={{ asset('image/drop.svg') }}
                            class="desktop3:w-[2vw] desktop2:w-[3vw] desktop:w-[4vw] laptop:w-[5vw]" alt="">
                    </a>
                </div>
            </div>
        </div>
        {{-- Kontak --}}
        <div id="kontak"
            class="kontak  tablet:h-full laptop:h-full desktop:h-full desktop2:h-full desktop3:h-[1080px] phone:h-full w-full">
            <div
                class="  phone:pt-[100px] laptop:pt-[100px] desktop:pt-[100px] tablet:pt-[100px]  desktop:mx-[80px] desktop3:mr-[271px] desktop3:flex desktop3:items-center desktop3:pt-[153px] desktop3:justify-between  desktop3:ml-[150px] desktop2:grid desktop2:grid-cols-2 desktop2:items-center desktop2:pt-[153px] desktop2:gap-x-[5%] desktop2:mx-[5%] ">
                <div>
                    <p
                        class="text-[#F7B84B] font-[600] desktop2:leading-[24px] text-[16px] phone:text-center tablet:text-center laptop:text-center">
                        KONTAK KAMI
                    </p>
                    <p
                        class="text-white font-[700] pt-[24px] pb-[16px] phone:text-center phone:text-[24px] tablet:text-center laptop:text-center laptop:text-[32px] tablet:text-[28px] desktop:text-[40px] desktop3:leading-[72px] desktop3:text-[56px] desktop2:leading-[72px] desktop2:text-[40px]">
                        Hubungi Kami untuk <br class="">
                        pertanyaan lebih lanjut
                    </p>
                    <p
                        class="text-[#C3C3C3] desktop:text-[16px] desktop3:text-[24px] desktop2:text-[20px] phone:text-justify phone:px-[5%] phone:text-[18px] tablet:text-justify tablet:px-[5%] tablet:text-[18px] laptop:text-center laptop:px-[5%] laptop:text-[18px] font-[400] desktop3:leading-[36px] desktop2:leading-[36px]">
                        Tim
                        kami dengan senang hati akan
                        membantu
                        dan menjawab
                        pertanyaan <br class="phone:hidden tablet:hidden desktop2:hidden"> Anda</p>
                </div>
                <form action=""
                    class="phone:pt-[5%] phone:mx-[5%] tablet:pt-[5%] desktop:pt-[5%] tablet:mx-[5%]  laptop:pt-[5%] laptop:mx-[5%]">
                    <div class="flex-col pb-[36px]">
                        <p class="text-white font-normal text-[20px] pb-[16px] leading-[32px]">Nama Lengkap</p>
                        <input type="text"
                            class="desktop3:w-[500px] desktop2:w-full desktop:w-full phone:w-full tablet:w-full laptop:w-full  text-white p-[10px] rounded-[4px] border bg-transparent border-white outline-none">
                    </div>
                    <div class="flex-col pb-[36px]">
                        <p class="text-white font-normal text-[20px] pb-[16px] leading-[32px]">Nomor Telepon</p>
                        <input type="text"
                            class="desktop3:w-[500px] desktop2:w-full desktop:w-full phone:w-full tablet:w-full laptop:w-full text-white p-[10px] rounded-[4px] border bg-transparent border-white outline-none">
                    </div>
                    <div class="flex-col pb-[36px]">
                        <p class="text-white font-normal text-[20px] pb-[16px] leading-[32px]">Email</p>
                        <input type="email"
                            class="desktop3:w-[500px] desktop2:w-full desktop:w-full phone:w-full tablet:w-full laptop:w-full text-white p-[10px] rounded-[4px] border bg-transparent border-white outline-none">
                    </div>
                    <div class="flex-col pb-[36px]">
                        <p class="text-white font-normal text-[20px] pb-[16px] leading-[32px]">Pesan Anda</p>
                        <input type="text"
                            class="desktop3:w-[500px] desktop2:w-full desktop:w-full phone:w-full tablet:w-full laptop:w-full text-white h-[20vh] p-[10px] rounded-[4px] border bg-transparent border-white outline-none">
                    </div>
                    <button
                        class="border border-[#0081F7] hover:bg-[#0081F7] w-full py-[7px] rounded-[4px] text-center uppercase cursor-pointer font-bold text-white">Kirim</button>
                </form>
            </div>
        </div>
        {{-- Kontak --}}
        {{-- Footer --}}
        <div class="footer w-full ">
            <div
                class="desktop3:pl-[150px] desktop2:pl-[80px] desktop:pl-[100px] phone:pl-[0px] tablet:pl-[0px] pt-[80px] desktop:pb-[20px] desktop3:pb-[40px] desktop2:pb-[40px]">
                <img src={{ asset('image/logofooter.svg') }}
                    class="desktop3:w-[10vw] desktop2:w-[10vw] desktop:w-[20vw] laptop:hidden  phone:hidden tablet:hidden"
                    alt="">
                <div class="desktop3:hidden desktop2:hidden flex justify-center">
                    <img src={{ asset('image/logofooter.svg') }}
                        class="desktop3:w-[10vw] phone:w-[50vw] laptop:w-[20vw] desktop:hidden  tablet:w-[30vw]"
                        alt="">
                </div>
                <div
                    class="grid desktop:grid-cols-3  desktop3:grid-cols-3  desktop2:grid-cols-3 phone:grid-cols-1 tablet:grid-cols-1  laptop:grid-cols-1 desktop3:gap-4 desktop2:gap-4 pt-[40px]">
                    <p
                        class="font-normal text-white text-[16px] leading-[28px] phone:pb-[10%] phone:text-center laptop:pb-[3%] laptop:text-center  tablet:pb-[10%] tablet:text-center">
                        Jl. Rawa
                        Bambu Raya, Komp.
                        Batan No. <br>
                        B3, Pasar
                        Minggu, Jakarta Selatan - <br> Indonesia</p>
                    <div>
                        <p
                            class="font-[600] text-white text-[16px] leading-[28px] desktop3:pb-[24px] desktop2:pb-[24px] phone:text-center laptop:text-center tablet:text-center">
                            Anamexa Patient Flow
                        </p>
                        <p
                            class="font-[600] text-white text-[16px] leading-[28px] desktop3:pb-[24px] desktop2:pb-[24px] phone:text-center laptop:text-center tablet:text-center">
                            Anamexa Care Pathway
                        </p>
                        <p
                            class="font-[600] text-white text-[16px] leading-[28px] desktop3:pb-[24px] desktop2:pb-[24px] phone:text-center  laptop:text-center tablet:text-center">
                            Anamexa Nurse
                            Management
                            System
                        </p>
                        <p
                            class="font-[600] text-white text-[16px] leading-[28px] desktop3:pb-[24px] desktop2:pb-[24px] phone:text-center laptop:text-center tablet:text-center">
                            Anamexa Patient
                            Experience
                        </p>
                        <p
                            class="font-[600] text-white text-[16px] leading-[28px] desktop3:pb-[24px] desktop2:pb-[24px] phone:text-center laptop:text-center tablet:text-center">
                            Anamexa Virtual
                            Waiting Room
                        </p>
                    </div>
                    <div
                        class="desktop3:pt-[22%] desktop2:pt-[22%] tablet:pt-[10%] tablet:pb-[3%] laptop:pt-[3%] laptop:pb-[3%] phone:pt-[10%] phone:pb-[3%]">
                        <p
                            class="text-white font-normal text-[16px] phone:text-center tablet:text-center laptop:text-center leading-[28px]">
                            Copyright 2022.<br>
                            Anamexa Hospital Operation Center</p>
                        <p
                            class="desktop3:pt-[48px] desktop2:pt-[48px] text-white font-normal text-[16px] phone:text-center laptop:text-center tablet:text-center leading-[28px]">
                            PT Rudex
                            Teknologi Indonesia
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Footer --}}

        {{-- script --}}
        <script>
            const hamburger = document.querySelector(".hamburger")
            const navMenu = document.querySelector(".nav-menu")

            hamburger.addEventListener("click", () => {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('false')
            })
        </script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script type="text/javascript">
            window.addEventListener('scroll', function() {
                var header = document.querySelector('header');
                header.classList.toggle('sticky', window.scrollY > 0)
            })
        </script>

        {{-- script --}}
    </body>

    </html>
