@extends('layouts.app')

@php
	$serviceList = [
		['title' => 'Dosen Pembimbing', 'icons' => 'ph:chalkboard-teacher', 'subtitle' => ''],
		['title' => 'Bimbingan', 'icons' => 'fluent:learning-app-20-regular', 'subtitle' => ''],
		['title' => 'Jadwal Terstruktur', 'icons' => 'fluent-mdl2:date-time', 'subtitle' => ''],
		['title' => 'Konsultasi', 'icons' => 'clarity:employee-line', 'subtitle' => ''],
	];
@endphp
@section('content')
	<section class="py-24">
		<div class="container mx-auto px-10">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
				<div class="order-last md:order-first">	
					<h1><span class="text-main-color">Sukses </span>adalah ketika persiapan dan kesempatan bertemu</h1>
					<p class="my-10 font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
					<a href="#" class="bg-main-color text-white font-semibold py-2 px-5 md:py-3 md:px-7 text-xs md:text-base rounded-md shadow-sm">
						Lihat Selengkapnya
					</a>
				</div>
				<!-- ... -->
				<div class="order-first md:order-last">
					<img src="{{ Vite::asset('resources/images/hero-image.png') }}" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="py-24 bg-gray-200">
		<div class="container mx-auto px-10">
			<div class="text-center mb-20">
				<h2 class="text-main-color">Layanan</h2>
				<h3>Penyedian Layanan Bekualitas</h3>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 items-center">
				@foreach ($serviceList as $item)	 
				<div class="relative flex flex-col bg-white border shadow-sm rounded-xl py-20 px-5 mb-10">
					<h4 class="text-main-color text-center mb-5">
						{{ $item['title'] }}
					</h4>
					<p class="text-gray-600 text-base">
						Some quick example text to build on the card title and make up the bulk of the card's content.
					</p>
					<span class="absolute top-[-11%] right-[40%] inline-flex items-center bg-main-color w-16 h-16 rounded-full text-white">
						<iconify-icon icon="{{ $item['icons'] }}" class="text-4xl block mx-auto"></iconify-icon>
					</span>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	<section class="py-24 bg-main-color">
		<div class="container mx-auto px-10">
			<div class="grid grid-cols-1 md:grid-cols-3 justify-items-center">
				<div class="text-center mb-7">
					<h4 class="text-lg sm:text-xl font-semibold text-white">Mahasiswa</h4>
					<p class="my-3 sm:my-5 text-4xl sm:text-6xl font-bold text-white">100</p>
					<p class="mt-1 text-gray-100 max-w-3xl text-base">Menggunakan platform ini</p>
				</div>
				<div class="text-center mb-7">
					<h4 class="text-lg sm:text-xl font-semibold text-white">Dosen Pembimbing</h4>
					<p class="my-3 sm:my-5 text-4xl sm:text-6xl font-bold text-white">100</p>
					<p class="mt-1 text-gray-100 max-w-3xl text-base">Menggunakan platform ini</p>
				</div>
				<div class="text-center mb-7">
					<h4 class="text-lg sm:text-xl font-semibold text-white">Skripsi</h4>
					<p class="my-3 sm:my-5 text-4xl sm:text-6xl font-bold text-white">100</p>
					<p class="mt-1 text-gray-100 max-w-3xl text-base">Yang di upload</p>
				</div>
			</div>
		</div>
	</section>

	<section class="py-24">
		<div class="container mx-auto px-10">
			<div class="text-center mb-20">
				<h2 class="text-main-color">Dosen Pembimbing</h2>
				<h3>List dosen pembimbing yang terdaftar</h3>
			</div>
			<div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 items-center mb-10">
				@for ($i = 0; $i < 4; $i++)
					<x-list-dosen></x-list-dosen>
				@endfor
			</div>
			<div class="flex flex-col items-center">
				<a href="#" class="bg-main-color text-white font-semibold py-2 px-5 md:py-3 md:px-7 text-xs md:text-base rounded-md shadow-sm">
					List Dosen Pembimbing
				</a>
			</div>

		
		</div>
	</section>
@endsection