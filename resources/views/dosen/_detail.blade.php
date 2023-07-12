@extends('layouts.app')

@section('content')
  <div class="py-14 bg-main-color">
    <div class="container mx-auto px-10">
      <div class="text-white">
        <h1>Profil Dosen</h1>
        <p>Ketahui tentang dosen pembimbingmu</p>
      </div>
    </div>
  </div>
  <section class="py-24">
    <div class="container mx-auto px-20">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
        <div class="group relative max-w-sm rounded-lg overflow-hidden shadow-xl cursor-pointer">
          <img class="w-full" src="{{ Vite::asset('resources/images/foto-dosen.png') }}" alt="Sunset in the mountains"/>
          <div class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black opacity-0 group-hover:h-full group-hover:opacity-80 duration-500">
            <div class="z-50">
              <a href="{{ url('/dosen/detail')}}" class="text-xl text-white font-semibold hover:underline">Lihat Detail</a>
            </div>
          </div>	
          <div class="px-2 py-2 md:px-4 bg-main-color text-white text-center">
            <h5 class="font-medium mb-1 text-sm md:text-lg">Dr. Fannush Shofi Akbar, S.ST.</h5>
            <p class="font-light text-xs md:tex-sm">TEKNIK TELEKOMUNIKASI</p>
          </div>
        </div>
        <div class="col-span-2 px-20">
          <h2 class="text-main-color"> DR. FANNUSH SHOFI AKBAR, S.ST.</h2>
          <p class="font-semibold">NIP.  123456789</p>
          <p class="my-5 font-poppins text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, hic fuga enim distinctio dignissimos est fugiat placeat, rerum, corrupti tenetur nesciunt officia odio quibusdam accusamus rem ex consequatur expedita voluptatem!</p>
          <div class="flex flex-wrap gap-4">
            <a href="#" class="button-contact flex flex-wrap items-center">
              <iconify-icon icon="ic:baseline-whatsapp" class="text-xl mr-3"></iconify-icon>
              Hubungi Dosen
            </a>
            <button type="submit" class="button-contact">Pilih Dosen</button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection