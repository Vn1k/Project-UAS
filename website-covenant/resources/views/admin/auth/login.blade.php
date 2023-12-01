<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,500;0,600;0,700;0,800;0,900;1,400&display=swap');

    * {
      margin: 0;
      padding: 0;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      font-family: 'Kanit', sans-serif;
    }

    body {
      overflow-x: hidden;
      height: 100vh;
      margin: 0;
    }

    .bg-illustration {
      background-image: url('/asset/admin-bg.jpg');
      background-position: left center;
      animation: slideIn 2s ease-out;
      /* Menambahkan animasi slideIn dengan durasi 1 detik dan efek ease-out */
      padding: 2rem;
    }

    @keyframes slideIn {
      from {
        transform: translateX(-100%);
        /* Mulai dari posisi di luar layar sebelah kiri */
      }

      to {
        transform: translateX(0);
        /* Posisi akhir, tanpa translasi horizontal */
      }
    }

    .parent {
      display: flex;
      flex-wrap: wrap;
    }

    /* columns mobile */
    .parent>* {
      width: 100%;
      padding: 2rem;
    }

    @media(max-width:767px) {
      .bg-illustration {
        background-position: center center;
        background-size: cover;
      }

      a {
        display: flex;
        justify-content: center;
      }

      .login {
        width: 100%;
        /* Mengambil lebar 100% pada layar < 767px */
        text-align: center;
        /* Mengatur teks ke tengah */
        /* Menghapus padding atau atur menjadi 0 */
        align-items: stretch;
      }

      .ExP>input {
        width: 100%;
      }
    }

    @media(min-width:768px) {

      .parent>.login {
        width: calc(100% / 3);
        height: 100vh;
      }

      .parent>.bg-illustration {
        width: calc(100% / 3 * 2);
        height: 100vh;
      }

    }

    .login {
      display: flex;
      height: 100vh;
      flex-wrap: nowrap;
      flex-direction: column;
      justify-content: center;
      opacity: 0;
      transform: scale(0.5);
      /* Atur skala awal menjadi 0.5 (setengah dari ukuran normal) */
      animation: zoomIn 1s ease-out forwards;
      text-align: center;
    }

    @keyframes zoomIn {
      from {
        opacity: 0;
        transform: scale(0.5);
      }

      to {
        opacity: 1;
        transform: scale(1);
        /* Skala akhir setara dengan ukuran normal */
      }
    }

    .ExP>input {
      padding: 15px 15px 15px 15px;
      margin: 10px 0px 10px 0px;
      border: none;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
      border-radius: 8px;
      width: 50%;
      font-size: 15px;
      letter-spacing: 1px;
      font-weight: 300;
    }

    button {
      background-color: white;
      padding: 15px 15px 15px 15px;
      margin: 10px 0px 10px 0px;
      border: none;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
      border-radius: 8px;
      width: 50%;
      font-size: 16px;
      letter-spacing: 1px;
      font-weight: 400;
      cursor: pointer;
    }

    h1 {
      margin-bottom: 5rem;
      font-size: calc(32px + 0.390625vw);
      font-weight: 500;
    }

    h2 {
      font-weight: 400;
      font-size: calc(24px + 0.390625vw);
    }

    img {
      width: calc(100px + 0.390625vw);
      /* Contoh: 20% dari lebar parent ditambah 10px */
      height: calc(100px + 0.390625vw);
      /* Contoh: 20% dari tinggi parent ditambah 10px */
    }

    .rmme {
      font-weight: 400;
    }

    .greetings-night {
      color: white;
      background: #012459;
      background: -moz-linear-gradient(top, #012459 0%, #001322 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #012459), color-stop(100%, #001322));
      background: -webkit-linear-gradient(top, #012459 0%, #001322 100%);
      background: -o-linear-gradient(top, #012459 0%, #001322 100%);
      background: -ms-linear-gradient(top, #012459 0%, #001322 100%);
      background: linear-gradient(to bottom, #012459 0%, #001322 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#012459', endColorstr='#001322', GradientType=0);
    }

    .greetings-morning {
      color: #050505;
      background: #efeebc;
      background: -moz-linear-gradient(top, #efeebc 0%, #61d0cf 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #efeebc), color-stop(100%, #61d0cf));
      background: -webkit-linear-gradient(top, #efeebc 0%, #61d0cf 100%);
      background: -o-linear-gradient(top, #efeebc 0%, #61d0cf 100%);
      background: -ms-linear-gradient(top, #efeebc 0%, #61d0cf 100%);
      background: linear-gradient(to bottom, #efeebc 0%, #61d0cf 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#efeebc', endColorstr='#61d0cf', GradientType=0);
    }

    .greetings-afternoon {
      color: #050505;
      background: #fdc352;
      background: -moz-linear-gradient(top, #fdc352 0%, #e8ed92 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fdc352), color-stop(100%, #e8ed92));
      background: -webkit-linear-gradient(top, #fdc352 0%, #e8ed92 100%);
      background: -o-linear-gradient(top, #fdc352 0%, #e8ed92 100%);
      background: -ms-linear-gradient(top, #fdc352 0%, #e8ed92 100%);
      background: linear-gradient(to bottom, #fdc352 0%, #e8ed92 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdc352', endColorstr='#e8ed92', GradientType=0);
    }

    .greetings-evening {
      color: white;
      background: #f18448;
      background: -moz-linear-gradient(top, #f18448 0%, #ffd364 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f18448), color-stop(100%, #ffd364));
      background: -webkit-linear-gradient(top, #f18448 0%, #ffd364 100%);
      background: -o-linear-gradient(top, #f18448 0%, #ffd364 100%);
      background: -ms-linear-gradient(top, #f18448 0%, #ffd364 100%);
      background: linear-gradient(to bottom, #f18448 0%, #ffd364 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f18448', endColorstr='#ffd364', GradientType=0);
    }
  </style>
</head>

<body>

  <div class="parent greetings-night" id="backgroundElement">
    <div class="bg-illustration">
      <a href="{{ url('/') }}">
        <img src="{{ asset('asset/logo-covenant.svg') }}" alt="logo">
      </a>
    </div>

    <div class="login">
      <div class="container">
        <div class="login-greetings">
          <h1>{{ $greetings }}</h1>
          <h2>Login to access to<br />your account</h2>
        </div>
        <div class="login-form">
          <x-auth-session-status :status="session('status')" />
          <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <!-- Email Address -->
            <div class="ExP">
              <x-text-input id="email" aria-placeholder="Email" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div class="ExP">
              <x-text-input id="password" placeholder="Password" type="password" name="password" required autocomplete="current-password" />

              <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Remember Me -->
            <div class="rmme">
              <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
              </label>
            </div>

            <div>
              <x-primary-button>
                {{ __('Log in') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Fungsi untuk mengubah latar belakang berdasarkan waktu
    function changeBackground() {
      var currentTime = new Date().getHours();
      var backgroundElement = document.getElementById('backgroundElement');

      // Hapus semua kelas latar belakang saat ini
      backgroundElement.classList.remove('greetings-night', 'greetings-morning', 'greetings-afternoon', 'greetings-evening');

      // Tentukan kelas baru berdasarkan waktu
      if (currentTime < 3) {
        backgroundElement.classList.add('greetings-night');
      } else if (currentTime < 11) {
        backgroundElement.classList.add('greetings-morning');
      } else if (currentTime < 15) {
        backgroundElement.classList.add('greetings-afternoon');
      } else if (currentTime < 18) {
        backgroundElement.classList.add('greetings-evening');
      } else {
        backgroundElement.classList.add('greetings-night');
      }
    }

    // Panggil fungsi untuk mengatur latar belakang saat halaman dimuat
    changeBackground();
  </script>
</body>

</html>