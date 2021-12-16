<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Document</title>
    <link rel="stylesheet" href="/css/sidebar.css">
</head>

<body style="background-color:#E5E5E5">
    <div class="container-fluid p-0">

        {{-- <div class="p-3 d-flex justify-content-between align-items-center"
            style="width:100%;background-color: #E5E5E5; height:80px;">
            <div><i class="far fa-user-circle" style="font-size: 50px; color: gray;"></i></div>
            <div><i class="fas fa-bars" style="font-size: 25px; color: gray;"></i></div>
        </div> --}}
        <nav class="navbar navbar-expand-sm navbar-light bg-light" style="min-height:80px">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Meal4Real</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/add-food">Add Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/food_list">Food List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about" tabindex="-1" aria-disabled="true">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="p-5 d-flex flex-column align-items-center">
            <form method="POST" action="{{ route('add-food') }}" enctype="multipart/form-data">
                @csrf

                <div class="d-flex justify-content-center">
                    <img src="Logo.jpg" alt="" style="width:80px; height:100px">
                </div>
                <div class="mb-5 mt-2 d-flex justify-content-center">
                    <h2>Edit meal details</h2>

                </div>
                <div class="d-flex justify-content-center align-items-center"
                    style="width:100%;height:120px;background: #FFFFFF;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;">
                    <span class="btn btn-info fileinput-button" style="background-color: #FFFFFF;border:0px"><i
                            class="far fa-image"></i>
                        <div style="position: relative">

                            <input type="file" name="meal_picture" style="opacity: 0;">
                    </span>
                </div>
        </div>


        <div class="mt-5">
            <i class="fas fa-utensils" style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
            <input type="text" name="type" placeholder="Type"
                style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
        </div>
        <div class="mt-3">
            <i class="fas fa-file-signature" style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
            <input type="text" name="meal_name" placeholder="Meal Name"
                style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
        </div>
        <div class="mt-3">
            <i class="fas fa-pizza-slice" style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
            <input type="text" name="description" placeholder="Description"
                style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
        </div>
        <div class="mt-3">
            <i class="fas fa-map-pin" style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
            <input type="text" name="address" placeholder="Address"
                style="border:0;border-bottom:1px solid black;background-color:#E5E5E5;">
        </div>

        <div class="d-flex justify-content-center mt-4" style="width:100%">
            <button class="ml-3"
                style="width:74px;height:31px;background-color:#FA4A0C; border:0; border-radius:30px;font-weight:bold;color:white;">
                {{ __('Update.') }}
            </button>
        </div>

        </form>
    </div>
    <div class="d-sm-none d-flex justify-content-evenly align-items-center"
        style="background: lightgray; height:80px;position:fixed;bottom:0;width:100%">
        <div><a href="./home"><i class="bi bi-house-door-fill" style="font-size: 25px; color:gray;"></i></a>
        </div>
        <div><a href="./add-food"><i class="bi bi-plus-circle" style="font-size: 25px; color:#FA4A0C;"></i></a>
        </div>
        <div><a href="./food_list"><i class="bi bi-list-check" style="font-size: 25px; color: gary;"></i></a>
        </div>
    </div>

    <footer class="d-none d-sm-block bg-light"
        style="position:fixed;bottom: 0;width:100%; border-top:1px solid gray; height:150px">

        <div class="d-flex justify-content-evenly mt-3" style="height:120px;">

            <div class="d-flex align-items-center">
                <div style="margin-right:10px">
                    <img src="Logo.jpg" alt="" style="height:70px">
                </div>
                <div>
                    <h4>Meal4Real</h4>
                    <span>Numericall</span><br>
                    <span>14 Porte de france L-4360</span><br>
                    <span>+352 691 123 456</span><br>
                </div>
            </div>
            <div>
                <h4>Follow Us</h4>
                <div class="d-flex flex-row justify-content-evenly">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter"></i>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center">
                <h4>Visit Us</h4>
                <span>Maps & Directions</span>
                <span>About Us</span>
            </div>
            <div class="d-flex flex-column align-items-center">
                <h4>Support Us</h4>
                <span>Make a gift</span><br>
            </div>
        </div>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>


</body>

</html>
