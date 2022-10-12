<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postest 4</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script>

    <script>alert("Selamat Datang");</script>
    <div class = "header">
        <h1>Market of Cards</h1>
    </div>

    <div class = "navbar">
        <a href="postest4.php">Home</a>
        <a href="produk4.php">Product</a>
        <a href="profil4.php">About Me</a>
        <button onclick="myFunction()">Switch Mode</button>
    </div>

    <div class = "main_content">
        <h1>Apa itu Playing Cards? </h1>
        <img src="C:\Users\MyBook 14 Plus\Documents\XAMPP\htdocs\POSTEST4\images\logo.png" width=20%>
        <button id="btn-info"> Ayo Cari Tahu</button>
        <p id="info" style="display: none;">Kartu permainan (bahasa Inggris: playing cards), atau lebih dikenal dengan kartu remi, adalah sekumpulan kartu seukuran tangan yang digunakan untuk permainan kartu. Kartu ini sering juga digunakan untuk hal-hal lain, seperti sulap, enkripsi, permainan papan, dan pembuatan rumah kartu. Kata “remi” itu sendiri sebenarnya adalah nama salah satu permainan kartu.</p>

        <script src="jquery.js"></script>
    </div>

    <div class = "footer">
        <p>Copyright &copy; 2022</p>
    </div>

    
</body>
</html>