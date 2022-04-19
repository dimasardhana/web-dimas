<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Meubelku.id</title>
        <meta charset="UTF-8">
        <style>
        *{
            box-sizing: border-box;
        }
        body{
            margin: 0;
        }
        .header{
            background-image: url(File/photo-1629976828074-c248d94c82ea.jpg);
            background-size: cover;
            padding: 10px;
        }
        .login{
            color: white;
            text-align: right;
            float: right;
            overflow: hidden;
            padding: auto;
            padding-bottom: 40px;
        }
        .login a{
            float: left;
            color: red;
            display: block;
            text-decoration: none;
            padding-right: 10px;
        }
        .login a:hover{
            color: white;
        }
        form {
            width:500px; 
            margin:50px auto;
        }
        .search {
            height: 27px;
            width: 202px;  
            background: #f0f8ff; 
            border:2px solid #008080;
            background: whitesmoke;
            margin: 0px 0px 0px 12px;
            padding: 5px 0px 5px 0px;
            border-width: 0px;
            font-family: "Arial Narrow", Arial, sans-serif;
            font-size: 12px;
            font-style: italic;
            width: 77%;
            color: #828282;
            display: inline-table;
            vertical-align: top;
            color: black;
        } 
        .button {
            border-width: 0px;
            cursor: pointer;
            width: 40px;
            height: 27px;
            color: red;
        }
        .button:hover  {
            background: #008080;
            color:red;}          
        .button:active {
            background:#9ACD32;
        }
        .navbar{
            overflow: hidden;
            background-image: url(File/Mc8kW4x9Q3aRR3RkP5Im_IMG_4417.jpg);
        }
        .navbar a{
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover{
            background-color: #dddddd;
            color: black;
        }    
        .php{
            padding-left: 550px;
            color: white;   
            text-align: center;   
            text-align: justify;
        }    
        </style>
    </head>

    <body style="background-size: cover; background-image: url(File/download.jpg);">
        <div class="header">
            <nav class="login">
                <a href="login.html">Login|</a>
                <a href="list.html">|Daftar</a>
            </nav>
            <h1 align="center"><font face="Yeon Sung" size="80" color="white">MEUBELKU.ID</font></h1>
            <form>
                <input class="search" type="text" placeholder="Search..." required>	
                <input class="button" type="button" value="Cari">
            </form>
        </div>
        <div class="navbar">
            <a href="index.html">Home</a>
            <a href="tentang.html">Tentang</a>
            <a href="produk.html">Produk</a>
            <a href="kontak.html">Kontak</a>
        </div>
        <br>
        <article style="color: white; text-align: center;">
            <h2 class="warna">Di Bawah Ini Adalah Pesan Dari Customer Anda</h2>
        </article>
        <center>
        <div class="php">
            <?php
                echo '<h1>==========</h1>';
                if (isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    echo $nama!="" ? "<b>Nama</b> : <b>$nama</b><br>" :"" ;
                }
                if (isset ($_POST['falamat'])){
                    $alamat = $_POST['falamat'];
                    echo $alamat!="" ? "<b>Alamat</b> : <b>$alamat</b><br>" :"" ;
                }
                if (isset ($_POST['fkelamin'])){
                    $kelamin = $_POST['fkelamin'];
                    echo $kelamin!="" ? "<b>Jenis Kelamin</b> : <b>$kelamin</b><br>" :"" ;
                }
                if (isset ($_POST['fhp'])){
                    $hp = $_POST['fhp'];
                    echo $hp!="" ? "<b>Nomor</b> : <b>$hp</b><br>" :"" ;
                }
                if (isset ($_POST['femail'])){
                    $email = $_POST['femail'];
                    echo $email!="" ? "<b>Email</b> : <b>$email</b><br>" :"" ;
                }
                if (isset ($_POST['fpesan'])){
                    $pesan = $_POST['fpesan'];
                    echo $pesan!="" ? "<b>Pesan</b> : <b>$pesan</b><br>" :"" ;
                }
                echo '<h1>==========</h1>';
            ?>
        </div>
        </center>
        <br>
        <div class="icon" align="center">
            <a class="icon" href="https://www.instagram.com/dimas.bjr/"><img src="file/Ig.png" alt="" width="50px"></a>
            <a class="icon" href="https://www.facebook.com/dimas.ardhana.370/"><img src="file/Fb.png" alt="" width="50px"></a>
            <a class="icon" href="https://wa.me/6282326431110"><img src="file/walogo.png" alt="" width="60px"></a>
        </div>
        <br>
        <footer style="padding: 10px; background-color: white; size: 5; text-align: center;">
                copyright &copy; 2021 by Dimas Ardhana
        </footer>
        <script>
            var paragraf = document.getElementsByClassName("warna");
            setInterval(function(){
                paragraf[0].style.color = "white";

                setTimeout(function(){
                    paragraf[0].style.color = "yellow";
                }, 500)
            }, 1000);
        </script>
    </body>
</html>