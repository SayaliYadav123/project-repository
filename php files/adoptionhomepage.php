
<!DOCTYPE html>

<html>

<head>
	<title>Simple web Development Template</title>

	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			width: 100%;
			background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%), url(adoption.jpg);
			backdrop-filter: blur(3px);
			background-position: center;
			background-size: cover;
			height: 100vh;

		}

		.navbar {
			display: flex;
			align-items: center;
			justify-content: center;
			position: sticky;
			top: 0;
			cursor: pointer;
		}

		.background {
			background: transparent;
			background-blend-mode: darken;
			background-size: cover;
		}

		.nav-list {
			width: 70%;
			display: flex;
			align-items: center;
		}

		/* .logo {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.logo img {
			width: 50px;
			border-radius: 50px;


		}
		 */
		.logo {
			background-image: url(logo.jpeg);
			opacity: .5;
			border-radius: 50%;
			background-size: cover;
			height: 40px;
			width: 40px;
			padding-left: 20px;
			float: left;
			padding-top: 10px;
			margin-top: 5px;
		}

		.icon {
			width: 200px;
			float: left;
			height: 70px;
			margin-left: 2-px;
		}


		.nav-list li {
			list-style: none;
			padding: 26px 30px;
		}

		.nav-list li a {
			text-decoration: none;
			color: white;
           font-weight: bold;
           /* font-size: medium; */
           font-size: large;
           font-family:Arial, Helvetica, sans-serif;
		}

		.nav-list li a:hover {
			color:#ff7200 ;
		}

		.content {
			width: 1200px;
			height: auto;
			margin: auto;
			color: #fff;
			position: relative;
		}

		.content .par {
			padding-left: 20px;
			padding-bottom: 25px;
			font-family: Arial;
			letter-spacing: 1.2px;
			line-height: 30px;
		}

		.content h1 {
			font-family: 'Times New Roman';
			font-size: 50px;
			padding-left: 20px;
			margin-top: 9%;
			letter-spacing: 2px;
			/* margin-left: 10px; */
		}

		.content .cn {
			width: 160px;
			height: 40px;
			background: #ff7200;
			border: none;
			margin-bottom: 10px;
			margin-left: 20px;
			font-size: 18px;
			border-radius: 10px;
			cursor: pointer;
			transition: .4s ease;

		}

		.content .cn a {
			text-decoration: none;
			color: #000;
			transition: .3s ease;
		}

		.cn:hover {
			background-color: #fff;
		}

		.content span {
			color: #ff7200;
			font-size: 65px
		}



		.center {
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="main">
		<nav class="navbar background">
			<ul class="nav-list">
				<!-- <div class="logo">
				<img src= "logo.jpeg">
			</div> -->
			<div class="icon">
                <h2 class="logo"></h2>
            </div>
				<li><a href="homepage.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="ContactUs.php">Contact Us</a></li>
			</ul>


		</nav>

	</div>
	<div class="content">
		<h1>

			PAW
			<a href="#"><span style="color: #ff7200"><ion-icon name="paw-sharp"></ion-icon></a>
			<span style="color: #ff7200">sitive</span>ALLY
		</h1>
		<p class="par">
			Whether its loving adoptive home or simply a better chance <br>on the streets,we're fighting to give stray
			animals
			a better life <br>in india.Despite its smart,social personality,india's native various <br>breeds is
			misunderstood
			as wild and dangerous,resulting in the <br>local population being highly reconduct to adopt these animals.
		</p>

		<button class="cn"><a href="adoptioncategory.php">Adopt Today</a></button>
        <button class="cn"><a href="provider_login.php">Donate Now</a></button>
	</div>
	

	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>