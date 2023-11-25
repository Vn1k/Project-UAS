

<nav id="myNavbar" class="font-Kanit p-2 w-screen bg-white shadow-xl md:flex md:items-center md:justify-between fixed transition-all duration-500 z-40">
    <div class="flex justify-between items-center ">
      <a class="" href="home">
        <img class="cursor-pointer ml-14 h-14 inline"
          src="{{ asset('storage/local_images/logo.png') }}">
      </a>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <img src="{{ asset('storage/local_images/menu.png') }}" style="width: 35px; height: 35px;" alt="Menu" onclick="Menu(this)">
      </span>
    </div>

    <ul class=" md:flex md:items-center z-[1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="kegiatans" class="text-lg hover:text-second duration-500">Kegiatan</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="gallery" class="text-lg hover:text-second duration-500">Galleri</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="tentang-Kami" class="text-lg hover:text-second duration-500">Tentang Kami</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="sukarelawan" class="text-lg hover:text-second duration-500">Sukarelawan</a>
      </li>
      <li>
        <a href="dukungan" class="bg-utama  border-2 border-black text-black text-lg font-Kanit rounded-full duration-500 px-5 py-1 mx-4 hover:bg-second ">
          Dukungan
        </a>
      </li>
    </ul>
  </nav>

  <script>
    let prevScrollPos = window.pageYOffset;

    function Menu(imgElement) {
      let list = document.querySelector('ul');
      
      if (imgElement.getAttribute('src') === '{{ asset('storage/local_images/menu.png') }}') {
        imgElement.setAttribute('src', '{{ asset('storage/local_images/close.png') }}');
        list.classList.add('top-[80px]');
        list.classList.add('opacity-100');
      } else {
        imgElement.setAttribute('src', '{{ asset('storage/local_images/menu.png') }}');
        list.classList.remove('top-[80px]');
        list.classList.remove('opacity-100');
      }
    }

    function handleScroll() {
      const currentScrollPos = window.pageYOffset;

      // Check the scroll direction
      if (prevScrollPos > currentScrollPos) {
        // Scrolling up
        document.getElementById('myNavbar').style.top = '0';
      } else {
        // Scrolling down
        document.getElementById('myNavbar').style.top = '-80px';
      }

      prevScrollPos = currentScrollPos;
    }

    window.onscroll = function() {
      handleScroll();
    };
  </script>