<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fruktur&family=Mochiy+Pop+P+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
                            <a class="nav-link" href="/add_food">Add Food</a>
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


        <div class="p-0 d-flex flex-column align-items-center">


            <div class=" d-flex justify-content-center">
                <img src="Logo.jpg" alt="" style="width:80px; height:100px">
            </div>

            <div class=" d-flex flex-column align-items-center justify-content-center">
                <h3> How we come to </h3>
                <h3>this idea</h3>
            </div>
            <div class=" d-flex justify-content-center">
                <h3>Team</h3>
            </div>

            <div class="  d-flex justify-content-center align-items-center ">
                <div class="d-flex justify-content-center align-items-center "
                    style="width:212px;height:120px;background: #FFFFFF;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;">
                    <i class="far fa-image"></i>

                </div>
            </div>
            <div class=" p-3 d-flex align-items-center justify-content-center">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor.Aenean massa. Cum sociis natoque</p>
            </div>
            <div class="  d-flex justify-content-center align-items-center ">
                <div class="d-flex justify-content-center align-items-center "
                    style="width:212px;height:120px;background: #FFFFFF;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;">
                    <i class="far fa-image"></i>

                </div>
            </div>
            <div class="p-3 d-flex align-items-center justify-content-center ">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor.Aenean massa. Cum sociis natoque</p>
            </div>
        </div>
        <div class="m-0 d-flex justify-content-evenly align-items-center" style="background: lightgray; height:60px;">
            <div><i class="bi bi-house-door-fill" style="font-size: 25px; color:white;"></i></div>
            <div><i class="bi bi-plus-circle" style="font-size: 25px; color:white;"></i></div>
            <div><i class="bi bi-list-check" style="font-size: 25px; color: white;"></i></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>
</body>
