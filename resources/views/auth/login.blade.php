<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color:#E3E3E3">
    <div class="container-fluid p-3">
        <div style="height:10%"></div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="height:30%">
            <h2>We are Meal4Real</h2>
            <div class="mt-5 mb-5 logo" style="height:120px;width:120px;border-radius:140px;background-color:#C4C4C4">
            </div>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="" type="email" name="email" :value="old('email')"
                    placeholder="Email" style="width:100%;height:54px;border-radius:10px; border:0;" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class=""
                    style="width:100%;height:54px;border-radius:10px; border:0;" type="password" name="password"
                    placeholder=" Password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-3"
                    style="width:100%;height:54px;background-color:rgba(129, 178, 20, 0.9); border:0; border-radius:30px;font-weight:bold;color:black;">
                    {{ __('Log in') }}
                </button>
            </div>

            <div class="flex items-center justify-end mt-4 p-2">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}" style="color:black;font-weight:bold;">
                        {{ __('Forgot your password?') }}
                    </a><br>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}" style="color:black;font-weight:bold;">
                        {{ __('Sign Up') }}
                    </a>
                @endif
            </div>
        </form>


</body>

</html>
