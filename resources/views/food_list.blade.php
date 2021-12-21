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
    <title>Food-list</title>
    <link rel="stylesheet" href="/css/sidebar.css">
    <script src="/js/googleAPI.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></script>
</head>

<body style=" background-image: linear-gradient(#ceb006, green);color:black">
    <?php include 'navbar.php'; ?>
    <div class="container-fluid">

        <div class="row p-5 d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center">
                <img src="Logo.png" alt="" style="width:250px;">

            </div>
            <div class="mb-5 p-5 d-flex flex-column align-items-center">
                <h4>Heroes don't buy fast food</h4>
                <h4>They share food</h4>
            </div>
        </div>
        <div class="row p-5 d-flex flex-column align-items-center">
            @if (!empty($meals))
                @foreach ($meals as $meal)
                    <div id="meal-card" class="card mb-5"
                        style="max-width:500px;width:100%;border-radius:30px;color:black">
                        <img src="uploads/<?php echo $meal->picture; ?>" class="card-img-top" alt="..."
                            style="border-radius:30px">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fas fa-utensils"
                                    style="width:10px;font-size: 20px; color: gray;margin-right:15px"></i>
                                {{ $meal->meal_name }}
                            </h5>
                            <p class="card-text">{{ $meal->description }}</p>
                            <span id="distance">
                                <i class="fas fa-car"></i> : {{ $meal->distance }}</span><br>
                            <span id="distance">
                                <i class="bi bi-stopwatch"></i> : {{ $meal->time }}
                            </span>
                            <div class="d-flex justify-content-center">
                                <a href="detail_page/{{ $meal->id }}" class="p-3 pt-2 pb-2"
                                    style="width:100px;background-color:orange; border:0; border-radius:30px;font-weight:bold;color:white;text-align:center">Take</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Meals in my DB.</p>
            @endif

            <div style="height:100px"></div>

        </div>

    </div>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>

</body>

</html>
