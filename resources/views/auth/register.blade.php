<!-- resources/views/auth/register.blade.php -->
@extends('layouts.app')

@section('content')

<body>
    <div
      id="app"
      class="w-full min-h-screen h-max p-12 flex justify-center items-center bg-[url('../images/bg-login.jpg')] bg-no-repeat bg-cover bg-center"
    >
      <div
        id="wrapper"
        class="bg-white bg-opacity-80 p-8 w-[32rem] rounded-lg border-2 border-white"
      >
        <div class="flex flex-col items-center my-10">
          <a class="w-full flex justify-center" href="index.html">
            <img src="{{ asset('images/favicon.png') }}" alt="logo" class="mb-4 w-1/2" />
          </a>
          <p class="mb-4">Bergabung bersama kami dengan Sign Up.</p>
        </div>
        <form method="POST" action="{{ route('register') }}" class="flex flex-col items-center px-8">
        @csrf
          <div class="w-full flex gap-4 justify-between items-center">
            <label for="firstName" class="relative mb-4 w-1/2">
              <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-primary"></i>
              <input type="text" id="firstName" placeholder="First Name" class="w-full pl-10 pr-4 py-2 rounded-full shadow outline-primary @error('First_Name') is-invalid @enderror" name="First_Name" value="{{ old('First_Name') }}" required autocomplete="First_Name" autofocus>

                @error('First_Name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            
            <label for="lastName" class="relative mb-4 w-1/2">
              <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-primary"></i>
              <input type="text" id="lastName"placeholder="Last Name" class="w-full pl-10 pr-4 py-2 rounded-full shadow outline-primary @error('Last_Name') is-invalid @enderror" name="Last_Name" value="{{ old('Last_Name') }}" required autocomplete="Last_Name" autofocus>

                @error('Last_Name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
          </div>
          <label for="birth" class="relative mb-4 w-full">
            <i
              class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-primary"
            ></i>
            <input type="date" id="birth" placeholder="Tanggal Lahir" class="w-full pl-10 pr-4 py-2 rounded-full shadow outline-primary @error('Date') is-invalid @enderror" name="Date" value="{{ old('Date') }}" required autocomplete="Date" autofocus>

            @error('Date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </label>
          <label for="Gender" class="relative mb-4 w-full">
              <!-- <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-primary"></i> -->
              <select class="form-control @error('Gender') is-invalid @enderror" id="exampleFormControlSelect1" name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Not set">Prefer not to say</option>
                </select>
                @error('Gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

          <label for="email" class="relative mb-4 w-full">
            <i
              class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-primary"></i>
            <input type="email" id="email" placeholder="Email" class="w-full pl-10 pr-4 py-2 rounded-full shadow outline-primary @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </label>
          <label for="password" class="relative mb-4 w-full">
            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-primary"></i>
            <input type="password" id="password" placeholder="Password" class="w-full pl-10 pr-4 py-2 rounded-full shadow outline-primary @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </label>
          <label for="password" class="relative mb-4 w-full">
            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-primary"></i>
            <input type="password" id="password" placeholder="Confirm Password" id="password-confirm" type="password" class="w-full pl-10 pr-4 py-2 rounded-full shadow outline-primary" name="password_confirmation" required autocomplete="new-password">
          </label>
            <button
            type="submit"
            class="px-6 py-2 mb-2 rounded-full bg-primary text-white font-bold hover:bg-green-600 duration-300"
          >
            Sign Up
          </button>
          <p class="text-sm mb-4">
            Sudah punya akun? <a class="text-primary underline" href="{{ route('login') }}">Login</a>
          </p>
          <div
            class="px-8 pt-4 pb-8 border-t-2 border-secondary w-full flex flex-col gap-4 justify-center items-center"
          >
            <p class="font-bold">OR</p>
            <button
              type="button"
              class="px-8 py-2 rounded-full bg-primary text-white font-bold hover:bg-green-600 duration-300"
            >
              <i class="fa-brands fa-google"></i>
              <p class="inline ml-3">Sign Up With Google</p>
            </button>
          </div>
        </form>
      </div>
    </div>
    <script src="assets/scripts/main.js"></script>
</body>
@endsection
