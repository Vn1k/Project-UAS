@vite(['resources/css/app.css','resources/js/app.js'])

@extends('layouts.appUser')

@section('content')
<div class="text-center font-kanit mt-20">
  <div>
    <h1 class="items-center py-8 px-4 mx-auto max-w-screen-xl font-bold text-4xl">Tentang Kami</h1>
  </div>

  <section class="bg-white">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="grid grid-cols-1 gap-4 mt-8">
        <img class="w-full rounded-lg" src="{{ asset('asset/logo-covenant.svg') }}" alt="Logo" style="max-width: 400px; /* set your desired max width */">
      </div>
      <div class="font text-gray-500 sm:text-lg dark:text-gray-400">
        <h2 class="mb-4 text-4xl tracking-tight text-gray-900 dark:text-black">Sejarah Rumah Belajar Covenant</h2>
        <p class="mb-4 text-black">Paud Covenant merupakan Paud yang berdiri pada 11 Januari 2022 terdiri dari kurang lebih 70-80 anak–anak yang menyandang status kurang mampu dalam hal membaca dan menulis (Calistung). Sejarah berdirinya Paud Covenant sangat Lah Unik, dimana Awalnya kami mendirikan Paud Covenant Ini Hanya Untuk anak-anak jalanan yang kurang mampu dalam bersekolah dan kami memulainya dengan cara mencari anak-anak yang berada di pinggir jalan yang memang mereka tidak memeiliki perhatian Dari Orang Tua.</p>
      </div>
    </div>
  </section>

  <section class="bg-white">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class=" text-gray-500 sm:text-lg dark:text-gray-400">
        <p class="mb-4 text-black">Namun seiring berjalannya waktu ternyata anak-anak jalanan tersebut hanya sebagai permulaan. Karena hanya dalam beberapa bulan saja mereka ingin belajar, mereka sudah mulai malas datang ke sekolah kami dan lebih memilih mencari uang dan bermain game dari pada bersekolah dan belajar.</p>
      </div>
      <div class="grid grid-cols-1 gap-4 mt-8">
        <img class="w-full rounded-lg" src="{{ asset('asset/section-2-about-us.svg') }}" alt="Logo" style="max-width: 840px; /* set your desired max width */">
      </div>
    </div>
  </section>

  <section class="bg-white">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="grid grid-cols-1 gap-4 mt-8">
        <img class="w-full rounded-lg" src="{{ asset('asset/section-3-about-us.svg') }}" alt="Logo" style="max-width: 840px; /* set your desired max width */">
      </div>
      <div class=" text-gray-500 sm:text-lg dark:text-gray-400">
        <p class="mb-4 text-black">Dalam proses belajar mengajar pun anak-anak Kami disedikan tempat untuk belajar sebanyak 3 kontrakan. Kami mengontrak tanpa adanya donatur yang membantu kami. Dengan begitu kami mengumpulkan uang dengan cara mengamen dan juga berjualan. setiap guru yang mengajar di Paud Covenant selalu mengamen setiap malam. Hasil yang kami dapatkan dalam satu malam sebanyak 100-300 Ribu dan kami gunakan untuk membayar kontrakan dan juga biaya transportasi yang kami gunakan untuk menjemput anak-anak kami.</p>
      </div>
    </div>
  </section>

  <section class="bg-white">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class=" text-gray-500 sm:text-lg dark:text-gray-400">
        <h2 class="mb-4 text-4xl tracking-tight text-gray-900 dark:text-black">VISI MISI KAMI</h2>
        <p class="mb-4 text-black rounded-md shadow-md p-2 bg-white">Mencerdaskan kehidupan anak bangsa</p>
        <p class="mb-4 text-black rounded-md shadow-md p-2 bg-white">Membuat sekolah tempat anak-anak marginal sekolah</p>
      </div>
      <div class="grid grid-cols-1 gap-4 mt-8">
        <img class="w-full rounded-lg" src="{{ asset('asset/gambar-with-baloon.svg') }}" alt="Logo" style="max-width: 840px; /* set your desired max width */">
      </div>
    </div>
  </section>


  <section class="text-center w-70 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-1 lg:py-16 lg:px-6">
    <p class="text-2xl text-black-500">"Kita harus mengerjakan pekerjaan Dia yang mengutus Aku, selama masih
      siang; akan datang malam, di mana tidak ada seorang pun yang dapat bekerja."</p>
    <h2 class="text font-bold text-black mt-4">Yohanes 9:4 TB</h2>
  </section>
</div>
@endsection