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
      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 items-center mb-10">
        @for ($i = 0; $i < 10; $i++)
          <x-list-dosen></x-list-dosen>
        @endfor
      </div>
    </div>
  </section>
@endsection