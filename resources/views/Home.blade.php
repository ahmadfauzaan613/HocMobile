<x-LayoutMobile>
    <x-Navbar />
    <x-Pengaduan>
        Jumat 21 Juli 2022, 11:25
    </x-Pengaduan>
    <x-Darurat>
        Jika kondisi Anda memburuk, <br /> tekan tombol
        darurat dibawah ini
    </x-Darurat>
    <div class="bg-white border  m-[8px] p-[12px] rounded-[4px] border-[#E1E2E5]">
        <x-specialis>
            Poliklinik Spesialis Penyakit Dalam
        </x-specialis>
        <x-Dokter>
            dr. Aswari Azhari, Sp. PD
        </x-Dokter>
        <div class="border-t mt-[12px] border-[#E1E2E5]">
            <div class="grid grid-cols-12 p-[10px] gap-x-[16px]">
                <div class="col-span-5">
                    <p class="text-[14px]">No. Antrian</p>
                    <x-Card>
                        PD007
                    </x-Card>
                </div>
                <div class="col-span-7">
                    <p class="text-[14px] whitespace-nowrap">Estimasi Waktu Tunggu</p>
                    <x-Card2>
                        3 jam 25 menit
                    </x-Card2>
                </div>
            </div>
        </div>
        <div class="border-t mt-[12px] border-[#E1E2E5]">
            <div class="grid grid-cols-12 p-[10px] gap-x-[16px]">
                <div class="col-span-5">
                    <p class="text-[14px] whitespace-nowrap">Antrian Dilayani</p>
                    <x-Card3>
                        -
                    </x-Card3>
                </div>
                <div class="col-span-7">
                    <p class="text-[14px] whitespace-nowrap">Menunggu</p>
                    <x-Card2>
                        6
                    </x-Card2>
                </div>
            </div>
        </div>
        <div class="border-t  mt-[12px] border-[#E1E2E5]">
            <div class="py-[24px]">
                <p class="text-center text-[14px]">Batalkan reservasi?</p>
                <p class="text-center cursor-pointer text-[#0081F7]  pt-[4px] text-[14px]">Batalkan</p>
            </div>
        </div>
    </div>
    {{-- -3 --}}
    {{-- -4 --}}
    <div class="mt-[14px]">
        <x-Waktu>
            Tunggu <span class="font-bold">03:09:55 untuk melakukan Check-In
        </x-Waktu>
        </p>
        <div class="flex justify-center">
            <x-ButtonCheckin2 />
        </div>
    </div>
</x-LayoutMobile>
