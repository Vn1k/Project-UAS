

<nav class="font-Kanit p-2 bg-white shadow-lg md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <a class="" href="/">
        <img class="cursor-pointer ml-14 h-14 inline"
          src="{{ asset('images/logo.png') }}">
      </a>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <img src="{{ asset('images/menu.png') }}" style="width: 35px; height: 35px;" alt="Menu" onclick="Menu(this)">
      </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="/aktivitas" class="text-lg hover:text-second duration-500">Aktivitas</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="/galleri" class="text-lg hover:text-second duration-500">Galleri</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="/tentangkami" class="text-lg hover:text-second duration-500">Tentang Kami</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="/sukarelawan" class="text-lg hover:text-second duration-500">Sukarelawan</a>
      </li>

      <button class="bg-utama  border-2 border-black text-black text-lg font-Kanit rounded-full duration-500 px-5 py-1 mx-4 hover:bg-second ">
        Support
      </button>
    </ul>
  </nav>

  <script>
    function Menu(imgElement) {
      let list = document.querySelector('ul');
      
      if (imgElement.getAttribute('src') === '{{ asset('images/menu.png') }}') {
        imgElement.setAttribute('src', '{{ asset('images/close.png') }}');
        list.classList.add('top-[80px]');
        list.classList.add('opacity-100');
      } else {
        imgElement.setAttribute('src', '{{ asset('images/menu.png') }}');
        list.classList.remove('top-[80px]');
        list.classList.remove('opacity-100');
      }
    }
  </script>