<style>
  * {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
  }

  body {
    overflow: hidden;
    height: 100vh;
    margin: 0;

  }

  .parent {
    display: flex;
    flex-wrap: wrap;
    font-size: calc(15px + 0.390625vw);
    padding: calc(8px + 1.5625vw);
  }

  /* columns mobile */
  .parent> * {
    width: 100%;
    padding: 1rem;
  }

  @media (max-width: 767px) {
    .parent>.login {
      width: 100%;
      /* Atur lebar menjadi 100% ketika lebar layar kurang dari 768px */
    }
  }

  @media(min-width:768px) {
    .parent>.login {
      width: calc(100% / 3);
    }

    .parent>.bg-illustration {
      width: calc(100% / 3 * 2);
    }
  }

  body.day-background {
    background-color: #ffffff;
  }

  body.night-background {
    background-color: #000000;
  }
</style>

<div class="parent">
  <div class="bg-illustration">
    <a href="{{ url('/') }}">
      <img src="{{ asset('asset/logo-covenant.svg') }}" alt="logo">
    </a>
  </div>

  <div class="login">
    <div class="container">
      <h1>{{ $greetings }}</h1>
      <h2>Login to access to<br />your account</h2>

      <div class="login-form">
        <x-auth-session-status :status="session('status')" />
        <form method="POST" action="{{ route('admin.login') }}">
          @csrf

          <!-- Email Address -->
          <div>
            <x-text-input id="email" aria-placeholder="Email" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
          </div>

          <!-- Password -->
          <div class="mt-4">
            <x-text-input id="password" placeholder="Password" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" />
          </div>

          <!-- Remember Me -->
          <div>
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

<!-- <script>
  function changeBackground() {
    var currentTime = new Date().getHours();

    if (currentTime < 12 || currentTime >= 18) {
      document.body.className = 'night-background';
    } else {
      document.body.className = 'day-background';
    }
  }

  changeBackground();
</script> -->