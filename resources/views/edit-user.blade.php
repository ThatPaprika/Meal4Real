<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit user information</title>
</head>

<body style=" background-image: linear-gradient(#ceb006, green);color:white">
    <div class="container-fluid p-0">

        <div style="position: relative; height:400px">
            <div class="d-flex flex-column justify-content-end"
                style="width:100%;height:400px; background-color:white; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.06);border-radius: 30px;top:-15px;position:absolute;top:-25px;">
                <div class="d-flex justify-content-center">
                    <h2>User's Information</h2>
                </div>
            </div>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="p-5">
            <form method="POST" action="{{ route('edit-user') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="input-group mb-3 ">
                    <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First name"
                        aria-label="first_name" aria-describedby="basic-addon1" value="<?php echo $user['first_name']; ?>" required
                        autofocus>
                </div>

                <!-- Name -->
                <div class="input-group mb-3 ">
                    <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last name"
                        aria-label="last_name" aria-describedby="basic-addon1" value="<?php echo $user['last_name']; ?>" required
                        autofocus>
                </div>

                <!-- Email Address -->
                <div class="input-group mb-3 ">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                        aria-label="email" aria-describedby="basic-addon1" value="<?php echo $user['email']; ?>" required>
                </div>


                <!-- Street number -->
                <div class="input-group mb-3 ">
                    <input id="street_nr" type="street_nr" class="form-control" name="street_nr"
                        placeholder="Street nr" aria-label="street_nr" aria-describedby="basic-addon1"
                        autocomplete="new-street_nr" value="<?php echo $user['street_name']; ?>">
                </div>


                <!-- Street name -->

                <div class="input-group mb-3 ">
                    <input id="street_name" type="text" class="form-control" name="street_name"
                        placeholder="Street name" aria-label="street_name" aria-describedby="basic-addon1"
                        value="<?php echo $user['street_name']; ?>" />
                </div>

                <!-- Zip code -->

                <div class="input-group mb-3 ">
                    <input id="zip_code" type="text" class="form-control" name="zip_code" placeholder="Zip Code"
                        aria-label="zip_code" aria-describedby="basic-addon1" value="<?php echo $user['zip_code']; ?>" />
                </div>

                <!-- City -->

                <div class="input-group mb-3 ">
                    <input id="city" type="text" class="form-control" name="city" placeholder="City" aria-label="city"
                        aria-describedby="basic-addon1" value="<?php echo $user['city']; ?>" />

                </div>

                <!-- Country -->

                <div class="input-group mb-3 ">
                    <input id="country" type="text" class="form-control" name="country" placeholder="Country"
                        aria-label="country" aria-describedby="basic-addon1" value="<?php echo $user['country']; ?>" />
                </div>

                <!-- Phone number -->

                <div class="input-group mb-3 ">
                    <input id="phone_number" type="text" class="form-control" name="phone_number"
                        placeholder="Phone Number" aria-label="phone_number" aria-describedby="basic-addon1"
                        value="<?php echo $user['phone_number']; ?>" />
                </div>


                <div class="flex items-center justify-end mt-4">
                    <button class="ml-3"
                        style="width:100%;height:54px;background-color:orange; border:0; border-radius:30px;font-weight:bold;color:white;">
                        Edit user information
                    </button>
                </div>

            </form>
        </div>

    </div>


</body>

</html>
