<html lang="en">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profile page</title>
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



        <div class="p-3"
            style="width:100%;background-color:white; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.06);border-radius: 30px;top:-15px;position:absolute;top:-10px;">

            <nav class="navbar navbar-expand-sm navbar-light bg-light" style="min-height:80px">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="color:FA4A0C;font-weight:bold">Meal4Real</a>
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
            <div class="">
                <div class="p-3 d-flex justify-content-center align-items-center"><i class="far fa-user-circle"
                        style="font-size: 120px; color: blue;"></i>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <h1>Name</h1>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-center ">
                    <i class="fas fa-location-arrow">Location</i>
                </div>
                <div class="m-5 d-flex flex-column justify-content-center align-items-center">
                    <button type="button" class="m-5 btn btn-primary btn-lg"
                        style="background-color: #FA4A0C;width:203px;height:78px;">Edit
                        user
                        information</button>
                    <button type="button" class="mb-5 btn btn-primary btn-lg"
                        style="background-color: #FA4A0C;width:203px;height:78px;">Previous pickups</button>
                    <button type="button" class=" btn btn-primary btn-lg"
                        style="background-color: #FA4A0C;width:203px;height:78px;">Previous giveaways</button>
                </div>
            </div>
        </div>
    </div>

    <div class=" d-sm-none d-flex justify-content-evenly align-items-center"
        style="background: lightgray; height:80px;position:fixed;bottom:0;width:100%">
        <div><a href="./home"><i class="bi bi-house-door-fill" style="font-size: 25px; color:#FA4A0C;"></i></a>
        </div>
        <div><a href="./add-food"><i class="bi bi-plus-circle" style="font-size: 25px; color:gray;"></i></a>
        </div>
        <div><a href="./food_list"><i class="bi bi-list-check" style="font-size: 25px; color:gary;"></i></a>
        </div>
    </div>
    <footer class="d-none d-sm-block"
        style="position:fixed;bottom: 0;width:100%; background-color:lightgray;border-top:2px solid gray; height:150px">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>
</body>
