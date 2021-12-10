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
    <div class="container-fluid p-0">

        <div style="position: relative; height:400px">
            <div class="d-flex flex-column justify-content-end"
                style="width:100%;height:400px; background-color:white; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.06);border-radius: 30px;top:-15px;position:absolute;top:-25px;">
                <div class="d-flex justify-content-center">
                    <div style="width:130px;text-align: center;font-weight:bold">Login
                    </div>
                    <div style="width:40px"></div>
                    <div style="width:130px;text-align: center;font-weight:bold;border-bottom:3px solid #FA4A0C;">Sign Up</div>
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
                    <input id="name" type="text" class="form-control" name="name" placeholder="Name" aria-label="name"
                        aria-describedby="basic-addon1" :value="old('name')" required autofocus>
                </div>

                <!-- Email Address -->
                <div class="input-group mb-3 ">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" aria-label="email"
                        aria-describedby="basic-addon1" :value="old('email')" required>
                </div>


                <!-- Password -->
                <div class="input-group mb-3 ">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" aria-label="password"
                        aria-describedby="basic-addon1"  required autocomplete="new-password">
                </div>


                <!-- Confirm Password -->

                <div class="input-group mb-3 ">
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" aria-label="password"
                        aria-describedby="basic-addon1"  required />
                </div>


                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color:#FA4A0C;font-weight:bold;font-size:16px; text-decoration: none;">
                        {{ __('Already registered?') }}
                    </a>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="ml-3"
                        style="width:100%;height:54px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;">
                        {{ __('Sign Up') }}
                    </button>
                </div>

            </form>
        </div>

    </div>


</body>

</html>
