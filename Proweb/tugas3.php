<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
    <link rel="stylesheet" href="bootstrap/bootstrap-4.5.3-dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link rel="stylesheet" href="mainstyle.css">
    <script type="text/javascript" src="bootstrap/bootstrap-4.5.3-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.js"></script>

    <script>
    function proses1(){
    var a = parseInt(document.aritmatika.bil1.value);
    var b = parseInt(document.aritmatika.bil2.value);
    var c = a + b
    document.getElementById("hasil").innerHTML=(+a+ " + " +b+ " = "+c);
    }
    function proses2(){
    var a = parseInt(document.aritmatika.bil1.value);
    var b = parseInt(document.aritmatika.bil2.value);
    var c = a - b
    document.getElementById("hasil").innerHTML=(+a+ " - " +b+ " = "+c);
    }
    function proses3(){
    var a = parseInt(document.aritmatika.bil1.value);
    var b = parseInt(document.aritmatika.bil2.value);
    var c = a * b
    document.getElementById("hasil").innerHTML=(+a+ " x " +b+ " = "+c);
    }
    function proses4(){
    var a = parseInt(document.aritmatika.bil1.value);
    var b = parseInt(document.aritmatika.bil2.value);
    var c = a / b
    document.getElementById("hasil").innerHTML=(+a+ " : " +b+ " = "+c);
    }
    </script> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">Proweb</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="daftartugas.php">Tugas</a>
                    <a class="nav-link" href="tugas4.php">About</a>
                    <a class="nav-link" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>

    
    <br><br><br>
    <center>
        <form name="aritmatika">
            <fieldset class="field2">
            <center>
            <legend class="legend2""><b>Operator Aritmatika</b></legend><br>
            <label style="font-size: 16px;">Masukkan Bilangan Pertama :</label><br><br>
            <input type="text" name="bil1" required><br><br>
            <label style="font-size: 16px;">Masukkan Bilangan Kedua :</label><br><br>
            <input type="text" name="bil2" required><br><br><br>
            <input type="button" onclick="proses1()" value="+"> &nbsp;
            <input type="button" onclick="proses2()" value="-"> &nbsp;
            <input type="button" onclick="proses3()" value="x"> &nbsp;
            <input type="button" onclick="proses4()" value=":"><br><br>
            </center>
            </fieldset><br><br>
        </form>
        <form>
            <fieldset class="field3">
            <center>
            <legend class="legend2"><b>Hasil</b></legend><br>
            <div id="hasil" style="font-size: 16px;"></div><br>
            </center>
            </fieldset>
        </form>
    </center>

    <br><br><br><br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright 2020 | by <a href="https://www.instagram.com/reinaldhysp">Reinaldhy Purba</a>.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>