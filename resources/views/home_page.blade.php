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

<body style="background-color:lightgray">


    <div class="container-fluid">

        <div class="row">
            <div class="col p-0">
                <?php include 'navbar.php'; ?>
            </div>
        </div>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="d-flex flex-column align-items-center">


            <div class="d-flex justify-content-center" style="width:100%">

                <div class="col-sx-12 col-sm-4 offset-sm-2 d-flex flex-column align-items-center justify-content-center">
                    <h1 style="width:100%">Respect for food</h1>
                    <h1 style="width:100%">is a respect for life</h1>
                </div>
            </div>

        </div>
        <div class="row p-5">
            <div class="col-xs-12 col-sm-6  d-flex justify-content-center align-items-center ">
                <div class="d-flex justify-content-center align-items-center "
                    style="width:100%;height:auto;background: #FFFFFF;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;">
                    <img src="./jason-briscoe-n4ymhyyFY7A-unsplash.jpg" class="img-fluid" alt="Responsive image"
                        style="border-radius:30px">

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 d-flex align-items-center justify-content-center p-4">
                <!--<div class="d-none d-sm-block col-xs-12 col-sm-6 d-flex align-items-center justify-content-center p-4">-->
                <h5>
                    <h4> For the Homecooks</h4>
                    <ul>
                        <li>Make an account</li>
                        <li>Post a meal or the food you’d like to give away</li>
                        <li>Get notified by email as soon as someone reserved your meal</li>

                    </ul>
                </h5>
            </div>
        </div>
        <div class="row p-5">
            <div
                class="d-block d-sm-none col-xs-12 col-sm-6 d-md-none  d-flex justify-content-center align-items-center ">
                <div class="d-flex justify-content-center align-items-center "
                    style="width:100%;height:auto;background: #FFFFFF;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;">
                    <img src="./pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg" class="img-fluid"
                        alt="Responsive image" style="border-radius:30px">

                </div>
            </div>
            <div class="d-block d-sm-none col-xs-12 col-sm-6 d-flex align-items-center justify-content-center p-4">
                <h5>
                    <h4> For the Foodies</h4>
                    <ul>
                        <li>Make an account</li>
                        <li>Browse the Food list</li>
                        <li>Choose your desired meal and make a reservation</li>
                        <li>Get notified by email with the full address</li>
                        <li>Grab your reusable lunchbox or tupperware and be on your way</li>
                        <li>ATTENTION: You ONLY have 1 hour to pick up your food!</li>

                    </ul>
                </h5>
            </div>
        </div>
        <div class="row p-5">
            <div class="d-none d-sm-block col-xs-12 col-sm-6 d-flex align-items-center justify-content-center p-4">
                <h5>
                    <h4> For the Foodies</h4>
                    <ul>
                        <li>Make an account</li>
                        <li>Browse the Food list</li>
                        <li>Choose your desired meal and make a reservation</li>
                        <li>Get notified by email with the full address</li>
                        <li>Grab your reusable lunchbox or tupperware and be on your way</li>
                        <li>ATTENTION: You ONLY have 1 hour to pick up your food!</li>

                    </ul>
                </h5>
            </div>
            <div class="d-none d-sm-block col-xs-12 col-sm-6  d-flex justify-content-center align-items-center ">
                <div class="d-flex justify-content-center align-items-center "
                    style="width:100%;height:auto;background: #FFFFFF;box-shadow: 0px 30px 60px rgba(57, 57, 57, 0.1);border-radius: 30px;">
                    <img src="./pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg" class="img-fluid"
                        alt="Responsive image" style="border-radius:30px">

                </div>
            </div>
            <div class="d-none d-sm-block col-xs-12 col-sm-6 d-flex align-items-center justify-content-center p-4"
                style="height:100px">

            </div>

        </div>

        <div class="row">
            <div class="col p-0">
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>

</body>

</html>
