<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body style=" background-image: linear-gradient(#ceb006, green);color:white">
    <div class="container-fluid p-4 d-flex flex-column align-items-center">

        <i class="bi bi-key" style="font-size:150px"></i>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <h2>Reset your Password !</h2>
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>


                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email', $request->email)" required autofocus placeholder="Email"
                    style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;" />
            </div>

            <!-- Password -->
            <div class="mt-4">


                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    placeholder="Password" style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">


                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required placeholder="Confirm Password"
                    style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-3"
                    style="width:100%;height:54px;background-color:orange; border:0; border-radius:30px;font-weight:bold;color:white;">

                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>


</body>

</html>
