<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color:#E5E5E5">
    <div class="d-block d-sm-none container-fluid p-0">

        <div style="position: relative; height:400px">
            <div class="d-flex flex-column justify-content-end"
                style="width:100%;height:400px; background-color:white; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.06);border-radius: 30px;top:-15px;position:absolute;top:-25px;">
                <div class="d-flex justify-content-center">
                    <div style="width:130px;border-bottom:3px solid #FA4A0C;text-align: center;font-weight:bold">Login
                    </div>
                    <div style="width:40px"></div>
                    <div style="width:130px;text-align: center;font-weight:bold">Sign Up</div>
                </div>
            </div>
        </div>

        <div class="p-5">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="input-group mb-3 ">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email address"
                        aria-label="Username" aria-describedby="basic-addon1" :value="old('email')" required autofocus>
                </div>
                <div class="input-group mb-3 ">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                        aria-label="Username" aria-describedby="basic-addon1" :value="old('email')" required
                        autocomplete="current-password">
                </div>

                <!--
            <div>
                <x-input id="email" class="" type="email" name="email" ://value="old('email')"
                    placeholder="Email" style="width:100%;height:54px;border-radius:10px; border:0;" required
                    autofocus />
            </div>

            <-- Password 
            <div class="mt-4">
                <x-input id="password" class=""
                    style="width:100%;height:54px;border-radius:10px; border:0;" type="password" name="password"
                    placeholder=" Password" required autocomplete="current-password" />
            </div>

            -->

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4 p-2">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}"
                            style="color:#FA4A0C;font-weight:bold;font-size:16px; text-decoration: none;">
                            {{ __('Forgot password ?') }}
                        </a><br>
                    @endif
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="ml-3"
                        style="width:100%;height:54px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;">
                        {{ __('Log in') }}
                    </button>
                </div>


            </form>
        </div>
    </div>
    <div class="d-none d-sm-block container-fluid p-0" style="height:100vh;position:relative;background-color:white">
        <div class="p-5" style="height:40%;background-color:lightgray">
            <div style="width:200px">
                <h2>Sign in</h2>
                <p>Bla dmlk lkhj mlkj mlkj mlkj mlkj mlkj dsf ds dsf sdf dsf sdf sdf sdf sdf sdf sdf </p>
            </div>
        </div>

        <div
            style="position: absolute; right:120px; top:60px;height:800px;width:500px;background-color:white;box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.06);border-radius: 30px;">
            <div class="p-5">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <h3>Welcome to Mael4Real</h3>
                <h1>Sign In</h1>
                <form method="POST" action="{{ route('login') }}" class="mt-5">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3 mt-2">
                        <label for="email" style="font-weight:bold">Enter your email address</label><br>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email address"
                            aria-label="Username" aria-describedby="basic-addon1" :value="old('email')" required
                            autofocus>
                    </div>
                    <div class="mb-3 mt-5">
                        <span for="password" style="font-weight:bold">Enter your password</span><br>
                        <input id="password" type="password" class="form-control" name="password"
                            placeholder="Password" aria-label="Username" aria-describedby="basic-addon1"
                            :value="old('email')" required autocomplete="current-password">
                    </div>
                    <!-- Captcha Form ! (put to false if u wanna hidde it) -->
                    <div class="mb-3 mt-5">
                        {!! NoCaptcha::renderJs('en', false, 'onloadCallback') !!}
<<<<<<< HEAD
                        {!! NoCaptcha::display() !!}
                    </div>








=======
                        {!! NoCaptcha::display() !!}                       
                    </div>

                    
    
>>>>>>> 2cfb0bf26a12ae7fc547bfaada838b0b74f35d37
                    <!--
                <div>
                    <x-input id="email" class="" type="email" name="email" ://value="old('email')"
                        placeholder="Email" style="width:100%;height:54px;border-radius:10px; border:0;" required
                        autofocus />
                </div>
    
                <-- Password 
                <div class="mt-4">
                    <x-input id="password" class=""
                        style="width:100%;height:54px;border-radius:10px; border:0;" type="password" name="password"
                        placeholder=" Password" required autocomplete="current-password" />
                </div>
    
                -->

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4 p-2">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}"
                                style="color:#FA4A0C;font-weight:bold;font-size:16px; text-decoration: none;">
                                {{ __('Forgot password ?') }}
                            </a><br>
                        @endif
                    </div>






                    <div class="flex items-center justify-end mt-4">
                        <button class="ml-3"
                            style="width:100%;height:54px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;">
                            {{ __('Log in') }}
                        </button>
                    </div>


                </form>
            </div>

        </div>


    </div>

    <script type="text/javascript">
        var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script>


</body>


</html>
