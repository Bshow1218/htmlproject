<!DOCTYPE html>
<html>

<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="css/sidebars.css" rel="stylesheet">
    <link href="css/store.css" rel="stylesheet">
    <script src="js/sidebars.js"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <title>Bids | ii525 わたしの世界</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light d-flex justify-content-center">
        <div class="container">
            <a class="navbar-brand" href="https://shipaicraft.asuscomm.com/htmlproject">
                <img src="images/iilogo.png" alt="" width="50pt" height="50pt">
            </a>
            <div class="flex-row-reverse">
                <button class='btn mx-2' id="user" style="background-image: url('images/btns/profile.svg');background-size: cover;border: none;width: 20pt;height: 20pt;" ></button>
                <button class='btn mx-2' id="favorite" style="background-image: url('images/btns/heart.svg');background-size: cover;border: none;width: 20pt;height: 20pt;"></button>
                <button class="btn mx-2" id="search" style="background-image: url('images/btns/search.svg');background-size: cover;border: none;width: 20pt;height: 20pt;"></button>
                <button class="btn mx-2" id="cart" style="background-image: url('images/btns/shopping-cart.svg');background-size: cover;border: none;width: 20pt;height: 20pt;"></button>
                <button class="btn mx-2" id="menu" style="background-image: url('images/btns/menu.svg');background-size: cover;border: none;width: 20pt;height: 20pt;"></button>
                
            </div>
        </div>
    </nav>
    <div id="sidebar-1" class="d-flex justify-content-center">
        <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-5 fw-semibold" style='color: #8699B1;font-family: "Baskerville Old Face";'>ii525</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        Top
                    </button>
                    <div class="collapse show" id="home-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">襯衫</a></li>
                            <li><a href="#" class="link-dark rounded">上衣</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded " data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                        Bottoms
                    </button>
                    <div class="collapse show" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">長裙</a></li>
                            <li><a href="#" class="link-dark rounded">褲子</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="true">
                        Accessories
                    </button>
                    <div class="collapse show" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">戒指</a></li>
                            <li><a href="#" class="link-dark rounded">耳針</a></li>
                            <li><a href="#" class="link-dark rounded">耳夾</a></li>
                            <li><a href="#" class="link-dark rounded">手環</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn-normal btn align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="true">
                        Shoes
                    </button>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn-normal btn align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="true">
                        Home
                    </button>
                </li>
            </ul>
        </div>
        <div id="gallery-1">
            <?php

            $servername = "localhost";
            $username = "min20120907";
            $password = "jefflin123";
            $dbname = "ii525";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM Bids";
            $i = 0;
            $result = $conn->query($sql);
            echo "
        <table class='table table-borderless'>
            <tbody>
        ";
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $picPath = "uploads/" . $row["Picture"] . "";
                    if (($i % 3 == 0)) {
                        echo "<tr>";
                    }
                    echo "
        <td>
        <div class='item-$i' >
        <button class='btn btn-1'></button><br/>
        <button class='btn btn-2'></button><br/>
        <button class='btn btn-3'></button><br/>
        </div>
        </td>
        ";
                    echo "
        <style>
        .item-$i{
            height: 200pt;
            width: 200pt;
        background-image: url('$picPath');
        background-size: cover;
        }
        .btn-1{
            background-image: url('images/btns/search.svg');
            background-size: cover;
            border: none;
        }
        .btn-2{
            background-image: url('images/btns/heart.svg');
            background-size: cover;
            border: none;
        }
        .btn-3{
            background-image: url('images/btns/shopping-cart.svg');
            background-size: cover;
            border: none;
        }
        .item-$i .btn{
            width: 24pt;
            height: 24pt;
            margin: 0 5pt 0 0;
            display: none;
        }
        .item-$i:hover .btn{
            display: inline;
            opacity: 0.25;
        }
        .item-$i .btn:hover{
            opacity: 1;
        }
        
        </style>
        ";
                    // echo "ID: " . $row["ID"] . "<br/> Name: " . $row["Name"] . "<br/> Price: " . $row["Price"] . "<br>";
                    // echo "Stock: " . $row["Stock"] . "<br/>";
                    // echo "Sold: " . $row["Sold"] . "<br/>";
                    // echo "Picture Path: " . $row["Picture"] . "<br/>";
                    // echo "------------------------------<br/>";

                    $i++;
                }
            } else {
                echo "0 results";
            }
            echo "</tbody>
</table>
";
            $conn->close();
            ?>
        </div>
    </div>


</body>