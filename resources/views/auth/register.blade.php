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
                    <div style="width:130px;text-align: center;font-weight:bold">Login
                    </div>
                    <div style="width:40px"></div>
                    <div style="width:130px;text-align: center;font-weight:bold;border-bottom:3px solid orange;">Sign
                        Up</div>
                </div>
            </div>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="p-5">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="input-group mb-3 ">
                    <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name"
                        aria-label="first_name" aria-describedby="basic-addon1" :value="old('first_name')" required
                        autofocus>
                </div>

                <!-- Name -->
                <div class="input-group mb-3 ">
                    <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name"
                        aria-label="last_name" aria-describedby="basic-addon1" :value="old('last_name')" required
                        autofocus>
                </div>

                <!-- Email Address -->
                <div class="input-group mb-3 ">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                        aria-label="email" aria-describedby="basic-addon1" :value="old('email')" required>
                </div>


                <!-- Password -->
                <div class="input-group mb-3 ">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                        aria-label="password" aria-describedby="basic-addon1" required autocomplete="new-password">
                </div>


                <!-- Confirm Password -->

                <div class="input-group mb-3 ">
                    <input id="password_confirmation" type="password" class="form-control"
                        name="password_confirmation" placeholder="Confirm password" aria-label="password"
                        aria-describedby="basic-addon1" required />
                </div>


                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"
                        style="color:orange;font-weight:bold;font-size:16px; text-decoration: none;">
                        {{ __('Already registered?') }}
                    </a>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="ml-3"
                        style="width:100%;height:54px;background-color:orange; border:0; border-radius:30px;font-weight:bold;color:white;">
                        {{ __('Sign Up') }}
                    </button>
                </div>

            </form>
        </div>

    </div>
    <div class="d-none d-sm-block container-fluid p-0" style="height:100vh;position:relative;background-color:white">
        <div class="p-5" style="height:40%;background-color:lightgray">

        </div>

        <div
            style="position: absolute; right:120px; top:60px;height:800px;width:500px;background-color:white;box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.06);border-radius: 30px;">
            <div class="p-5">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <h3>Welcome to Mael4Real</h3>
                <h1>Sign Up</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mt-5 mb-3 ">
                        <label for="first_name" style="font-weight:bold">Enter your firstname</label><br>
                        <input id="first_name" type="text" class="form-control" name="first_name"
                            placeholder="First Name" aria-label="first_name" aria-describedby="basic-addon1"
                            :value="old('first_name')" required autofocus>
                    </div>

                    <!-- Name -->
                    <div class=" mb-3 ">
                        <label for="last_name" style="font-weight:bold">Enter your lastname</label><br>
                        <input id="last_name" type="text" class="form-control" name="last_name"
                            placeholder="Last Name" aria-label="last_name" aria-describedby="basic-addon1"
                            :value="old('last_name')" required autofocus>
                    </div>

                    <!-- Email Address -->
                    <div class=" mb-3 ">
                        <label for="email" style="font-weight:bold">Enter your email</label><br>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                            aria-label="email" aria-describedby="basic-addon1" :value="old('email')" required>
                    </div>


                    <!-- Password -->
                    <div class="mb-3 ">
                        <label for="password" style="font-weight:bold">Enter your password</label><br>
                        <input id="password" type="password" class="form-control" name="password"
                            placeholder="Password" aria-label="password" aria-describedby="basic-addon1" required
                            autocomplete="new-password">
                    </div>


                    <!-- Confirm Password -->

                    <div class="mb-3 ">
                        <label for="password_confirmation" style="font-weight:bold">Confirm your password</label><br>
                        <input id="password_confirmation" type="password" class="form-control"
                            name="password_confirmation" placeholder="Confirm password" aria-label="password"
                            aria-describedby="basic-addon1" required />
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"
                            style="color:orange;font-weight:bold;font-size:16px; text-decoration: none;">
                            {{ __('Already registered?') }}
                        </a>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button class="ml-3"
                            style="width:100%;height:54px;background-color:orange; border:0; border-radius:30px;font-weight:bold;color:white;">
                            {{ __('Sign Up') }}
                        </button>
                    </div>

                </form>
            </div>

        </div>


    </div>


</body>

</html>
