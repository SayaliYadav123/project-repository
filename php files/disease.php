<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="disease.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="heading">
            <div class="icon">
                <h2 class="logo"></h2>
            </div>
            <h1>
                <b>PAW</b><span>
                    <a href="#"><ion-icon name="paw-sharp"></ion-icon></a>
                    <b>sitive</span>ALLY
            </h1></b>
            <h3><a href="homepage.php"><span class="home" style="color: aliceblue;">Home</span> </a></h3>
        </div>
        <div class="remain">
            <section class="wrapper">
                <div class="dropdown">
                <form method="post" action="disease.php">
                    <input type="text" id="disease" name="disease" placeholder="Enter Disease">
                    </form>
                    <button onclick="search()">Search</button>
                </div>
                <div id="searchResults"></div>
            </section>
              </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="disease.js"></script>
</body>
</html>