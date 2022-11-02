<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="rarea.css">
    <link rel="stylesheet" type="text/css" href="desain.css">
    <title>story area</title>
</head>
<body>
    <header>
        <p class="name">DARK STORY</p>
        <div id="toggle">
            <div class="tbl" id="tombol"></div>
        </div>
        <nav>
            <ul>
                <li> <a href="index.html" class="home">HOME</a> </li>
                <li> <a href="about.html" class="home">ABOUT</a> </li>
                <li> <a href="#" class="home">RIDLE AREA</a> </li>
            </ul>
            <div class="menu">
                <input type="checkbox" />
                <span id="span"></span>
                <span id="span"></span>
                <span id="span"></span>
            </div>
        </nav>
    </header>
    <div class="konten">
        <div class="konten2">
            <img src="pic/picA.webp" alt="orang dibawah kasur" class="gbr">
            <p class="teks" >
                Sejak kematian ayahku, adekku selalu tidur di kamar ibuku.<br>
                Maklum dia masih kecil dan belum sekolah. Namun dia cukup<br>
                cerewet serta memiliki imajinasi yang bagus.Seperti pada <br>
                sore itu, dia bercerita tentang seorang pria yang bersembunyi<br>
                di kolong tempat tidurnya. Ada-ada saja imajinasinya. Hampir <br>
                setiap hari ia mengatakan hal itu.Akhirnya aku menuruti keinginannya.<br>
                Aku mencoba untuk melihat di bawah tempat tidur ibuku.Tidak ada<br>
                apapun.Bahkan debu dan kotoran juga tidak ada.Adekku memang menjengkelkan.
            </p>
            <p class="komen" id="tkn">beri komentar</p>
        </div>
    </div>
    <div class="pop">
    <div class="isi2">
        <form method="POST" action="komen.php">
            <input class="ipt" type="text" name="un" placeholder="nickname" autocomplete="off" required>
            <input class="ipt" type="number" name="ag" placeholder="age" autocomplete="off" required>
            <input class="ipt" type="text" name="fav" placeholder="your's favorite riddle" autocomplete="off" required>
            <input class="ipt" type="email" name="em" placeholder="email" autocomplete="off" required>
            <input class="ipt" type="text" name="sr" placeholder="saran(jika sudah pernah berkunjung)" autocomplete="off" required>
            <input class="ipt" type="submit" name="sub" class="sub"/>
        </form>
        </div>
    </div>   
    <?php
        if(isset($_POST['sub']))
        {
            $un = $_POST['un'];
            $ag = $_POST['ag'];
            $fav = $_POST['fav'];
            $em = $_POST['em'];
            $num= $_POST['sr'];
        }
    
    ?>
    <script src="index.js"></script>
    <script src="js.js"></script>
    <script src="rarea.js"></script>
</body>
</html>