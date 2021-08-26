<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/lookbook.css">
	<title>Lookbook | ii525 わたしの世界</title>
</head>

<body>
	<!--Navigation bar-->
	<div class="navbar-1">

		<ul class="nav justify-content-around">
			<a class="navbar-brand" href="index.php">
				<img src="images/iilogo.png" width="75pt" height="75pt" style="margin-top: -8pt;" href="index.php" alt="">
			</a>
			<div class="d-flex justify-content-center">

				<li class="nav-item">
					<a class="nav-link navbar-1" href="#">New</a>
				</li>
				<li class="nav-item">
					<a class="nav-link navbar-1" href="stock-update.php">All</a>
				</li>
				<li class="nav-item">
					<a class="nav-link navbar-1" href="#">Story</a>
				</li>
				<li class="nav-item">
					<a href="lookbook.php" class="nav-link navbar-1">Lookbook</a>
				</li>
			</div>

			<div class="flex-row-reverse">
				<button class='btn mx-2' id="user" style="background-image: url('images/btns/profile.svg');background-size: cover;border: none;width: 20pt;height: 20pt;"></button>
				<button class='btn mx-2' id="favorite" style="background-image: url('images/btns/heart.svg');background-size: cover;border: none;width: 20pt;height: 20pt;"></button>
				<button class="btn mx-2" id="search" style="background-image: url('images/btns/search.svg');background-size: cover;border: none;width: 20pt;height: 20pt;"></button>
				<button class="btn mx-2" id="cart" style="background-image: url('images/btns/shopping-cart.svg');background-size: cover;border: none;width: 20pt;height: 20pt;"></button>
			</div>
		</ul>

	</div>
	<div class="lookbook">
		<h1>Lookbook</h1>
	</div>
	<!--Banner slider gallery-->
    <!--square images for the items-->
    <div class="carousel-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/slider1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider2.png" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="official-color" aria-hidden="true">
                    < </span>
                        <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="official-color" aria-hidden="true"> > </span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>
</body>
<footer>
	<!-- Copyright -->
	<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
		<table class="table">
			<tbody>
				<tr>
					<td class="about-me">關於我們</td>
					<td class="subscribe">訂閱電子報</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- Copyright -->
</footer>

</html>