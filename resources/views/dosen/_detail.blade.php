@extends('layouts.app')

@section('content')
  <div class="py-14 bg-main-color">
    <div class="container mx-auto px-10">
      <div class="text-white">
        <h1>List Dosen </h1>
        <p>Carilah dosen pembimbing impianmu</p>
      </div>
    </div>
  </div>
  <section class="py-24">
    <div class="container mx-auto px-10">
      <div class="grid grid-cols-1 md:grid-cols-2">
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
        <div>awapwl</div>
      </div>
    </div>
  </section>
@endsection