<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
    <title>HOC</title>
</head>

<body>
    {{-- Navbar --}}
    <div class="bg-[#00182F] h-[80px] sticky top-0 w-full flex items-center justify-between px-[150px] py-[20px]">
        <img src={{ asset('image/logoanamexa.svg') }} class="w-auto h-auto" alt="">
        <div class="flex items-center gap-x-[36px]">
            <p class="font-[600] text-[16px]   text-white uppercase">Home</p>
            <p class="font-[600] text-[16px]  text-white uppercase">pionir</p>
            <p class="font-[600] text-[16px]  text-white uppercase">mengapa</p>
            <p class="font-[600] text-[16px]  text-white uppercase">tantangan & kesempatan</p>
            <p class="font-[600] text-[16px]  text-white uppercase">aksi</p>
            <p class="font-[600] text-[16px]  text-white uppercase">keuntungan</p>
            <p class="font-[600] text-[16px]  text-white uppercase">manfaat</p>
        </div>
    </div>
    {{-- Navbar --}}
    {{-- Home --}}
    <div class=" homelanding  h-[100vh] w-full">
        <div class="bghome h-[100vh] w-full">
            <div class="pl-[150px] pt-[230px]">
                <p class="text-[#F7B84B] m-0 p-0 font-[600] text-[16px] ">ANAMEXA HOC</p>
                <p class="font-bold text-[56px] py-[24px] text-white ">Optimalisasi Operasional <br> Rumah
                    Sakit
                    untuk <br>
                    Pengalaman
                    Kesehatan Terbaik</p>
                <p class="font-[400] text-[24px] text-[#C3C3C3]">Aplikasi pusat operasional rumah
                    sakit dengan alur kerja otomatis, <br> menghubungkan seluruh data, dan
                    memberikan rekomendasi ​​untuk <br> pengambilan keputusan.
                </p>
            </div>
        </div>
    </div>
    {{-- Home --}}
    {{-- Pionir --}}
    <div class="pionir h-auto w-full pt-[0px]">
        <p class="text-center text-[16px] font-[600] text-[#F7B84B]">HOC PERTAMA DI INDONESIA</p>
        <p class="text-center text-[56px] font-[700] pt-[16px] text-white">Inovasi Hospital Operation <br> Center
            Pertama di
            Indonesia</p>
        <div class="flex justify-center">
            <img src={{ asset('image/pionirDevice.svg') }} class="w-auto pt-[20px] h-auto" alt="">>
        </div>
        <div class="flex justify-between items-center px-[150px]   pt-[20px]">
            <div>
                <img src={{ asset('image/logo1.svg') }} class="w-auto pb-[24px] mx-auto h-auto" alt="">
                <p class="text-white font-[600] text-[24px] text-center">Real-Time dan Integrasi antar <br> modul dan
                    SIM RS
                </p>
            </div>
            <div>
                <img src={{ asset('image/logo2.svg') }} class="w-auto pb-[24px] mx-auto h-auto" alt="">
                <p class="text-white font-[600] text-[24px] text-center">Rekomendasi dan Prediksi untuk <br> pengambilan
                    keputusan yang cepat, akurat, <br> dan aman
                </p>
            </div>
            <div>
                <img src={{ asset('image/logo3.svg') }} class="w-auto pb-[24px] mx-auto h-auto" alt="">
                <p class="text-white font-[600] text-[24px] text-center">Sistem yang intuitif dan adaptif <br> sesuai
                    kebijakan dan proses <br> bisnis Rumah Sakit
                </p>
            </div>
        </div>
        <div class="">
            <p>dsadsa</p>
        </div>
    </div>
    {{-- Pionir --}}
    {{-- TANTANGAN --}}
    <div class="pionir h-auto w-full pt-[100px]">
        <p class="text-center text-[16px] font-[600] text-[#F7B84B]">TANTANGAN DAN KESEMPATAN HOC</p>
        <p class="text-center text-[56px] font-[700] pt-[16px] text-white">Tantangan dan kesempatan <br> Hospital
            Operation
            Center</p>
        <div class="flex justify-around pt-[80px]">
            <div>
                <p class="uppercase text-[24px] font-[700] text-white">Tantangan </p>
                <p class="text-[24px] font-[400] pt-[16px] text-[#C3C3C3]">Manajemen arus pasien yang tidak efektif <br>
                    mengakibatkan banyaknya waktu yang terbuang <br> sehingga berakibat pada waktu menunggu yang lama,
                    <br>
                    penolakan pasien, dan penggunaan sumber daya <br> rumah sakit yang tidak optimal.
                </p>
            </div>
            <div>
                <p class="uppercase text-[24px] font-[700] text-white">Tantangan </p>
                <p class="text-[24px] font-[400] pt-[16px] text-[#C3C3C3]">Manajemen arus pasien yang tidak efektif <br>
                    mengakibatkan banyaknya waktu yang terbuang <br> sehingga berakibat pada waktu menunggu yang lama,
                    <br>
                    penolakan pasien, dan penggunaan sumber daya <br> rumah sakit yang tidak optimal.
                </p>
            </div>
        </div>
    </div>
    {{-- TANTANGAN --}}
</body>

</html>
