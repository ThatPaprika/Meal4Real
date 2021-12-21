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
        <h2>Forgot your password ?</h2>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;" placeholder="Type your email" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-3"
                    style="width:100%;height:54px;background-color:orange; border:0; border-radius:30px;font-weight:bold;color:white;">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>

    </div>


</body>

</html>