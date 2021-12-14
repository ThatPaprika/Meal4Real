<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit user information</title>
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
                    <div style="width:130px;text-align: center;font-weight:bold;border-bottom:3px solid #FA4A0C;">Sign
                        Up</div>
                </div>
            </div>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="p-5">
            <form method="POST" action="">
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


                <!-- Street number -->
                <div class="input-group mb-3 ">
                    <input id="street_nr" type="street_nr" class="form-control" name="street_nr"
                        placeholder="street_nr" aria-label="street_nr" aria-describedby="basic-addon1"
                        autocomplete="new-street_nr">
                </div>


                <!-- Street name -->

                <div class="input-group mb-3 ">
                    <input id="street_name" type="text" class="form-control" name="street_name"
                        placeholder="Street_name" aria-label="street_name" aria-describedby="basic-addon1" />
                </div>

                <!-- Zip code -->

                <div class="input-group mb-3 ">
                    <input id="zip_code" type="text" class="form-control" name="zip_code" placeholder="zip_code"
                        aria-label="zip_code" aria-describedby="basic-addon1" />
                </div>

                <!-- City -->

                <div class="input-group mb-3 ">
                    <input id="city" type="text" class="form-control" name="city" placeholder="city" aria-label="city"
                        aria-describedby="basic-addon1" />
                </div>

                <!-- Country -->

                <div class="input-group mb-3 ">
                    <input id="country" type="text" class="form-control" name="country" placeholder="country"
                        aria-label="country" aria-describedby="basic-addon1" />
                </div>

                <!-- Phone number -->

                <div class="input-group mb-3 ">
                    <input id="phone_number" type="text" class="form-control" name="phone_number"
                        placeholder="phone_number" aria-label="phone_number" aria-describedby="basic-addon1" />
                </div>

                <!--
                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"
                        style="color:#FA4A0C;font-weight:bold;font-size:16px; text-decoration: none;">
                        {{ __('See meal list?') }}
                    </a>
                </div>
            -->
                <div class="flex items-center justify-end mt-4">
                    <button class="ml-3"
                        style="width:100%;height:54px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;">
                        {{ __('Edit user information') }}
                    </button>
                </div>

            </form>
        </div>

    </div>


</body>

</html>
