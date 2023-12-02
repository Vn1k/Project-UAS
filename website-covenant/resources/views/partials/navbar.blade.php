

<nav id="myNavbar" class="font-Kanit py-3 md:py-3 w-screen bg-white shadow-xl md:flex md:items-center md:justify-between fixed transition-all duration-500 z-50">
    <div class="flex justify-between items-center ">
      <a class="" href="{{ url('/') }}">
        <img class="cursor-pointer ml-5 md:ml-10 h-14 inline"
          src="{{ asset('local_images/logo.png') }}">
      </a>
      <span class="text-3xl cursor-pointer mr-4 md:hidden block">
        <img src="{{ asset('local_images/menu.png') }}" style="width: 35px; height: 35px;" alt="Menu" onclick="Menu(this)">
      </span>
    </div>

    <ul class=" md:flex md:items-center z-[1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:mr-5 md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in-out duration-500">
      <li class="md:mx-2 mx-4 lg:mx-4  my-6 md:my-0">
        <a href="{{ url('/') }}" class="text-lg 2xl:text-xl  hover:text-second duration-500">Beranda</a>
      </li>
      <li class="md:mx-2 mx-4 lg:mx-4 my-6 md:my-0">
        <a href="{{ url('kegiatans') }}" class="text-lg 2xl:text-xl  hover:text-second duration-500">Kegiatan</a>
      </li>
      <li class="md:mx-2 mx-4 lg:mx-4 my-6 md:my-0">
        <a href="{{ url('gallery') }}" class="text-lg 2xl:text-xl  hover:text-second duration-500">Galeri</a>
      </li>
      <li class="md:mx-2 mx-4 lg:mx-4 my-6 md:my-0">
        <a href="{{ url('tentang-Kami') }}" class="text-lg 2xl:text-xl  hover:text-second duration-500">Tentang Kami</a>
      </li>
      <li class="md:mx-2 mx-4 lg:mx-4 my-6 md:my-0">
        <a href="{{ url('sukarelawan') }}" class="text-lg 2xl:text-xl  hover:text-second duration-500">Sukarelawan</a>
      </li>
      <li class=" md:ml-3 lg:ml-4 2xl:mx-4 ">
        <a href="dukungan" class="bg-utama  border-2 border-black text-black text-lg  rounded-full duration-500 px-5 py-1 mx-2 md:mx-0 hover:bg-second ">
          Dukungan
        </a>
      </li>
    </ul>
  </nav>

  <script>
    let prevScrollPos = window.pageYOffset;

    function Menu(imgElement) {
      let list = document.querySelector('ul');
      
      if (imgElement.getAttribute('src') === '{{ asset("local_images/menu.png") }}') {
        imgElement.setAttribute('src', '{{ asset("local_images/close.png") }}');
        list.classList.add('top-[80px]');
        list.classList.add('opacity-100');
      } else {
        imgElement.setAttribute('src', '{{ asset("local_images/menu.png") }}');
        list.classList.remove('top-[80px]');
        list.classList.remove('opacity-100');
      }
    }

    function handleScroll() {
      const currentScrollPos = window.pageYOffset;

      if (prevScrollPos > currentScrollPos) {
        document.getElementById('myNavbar').style.top = '0';
      } else {
        document.getElementById('myNavbar').style.top = '-80px';
      }

      prevScrollPos = currentScrollPos;
    }

    window.onscroll = function() {
      handleScroll();
    };
  </script>