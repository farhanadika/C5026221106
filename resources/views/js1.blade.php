<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showalert(){
        alert("Selamat ! Anda mendapatkan HIV ! ")
       }
       function changeText() {
        var tulisanlama = document.getElementById(""); //membaca isi tulisan lama di span
        var span = document.getElementById("output"); //membaca tulisan yang baru
        var textBox = document.getElementById("textbox");

        textBox.style.color = "red"; //mengubah warna font dari textbox menjadi merah
        span.innerHTML = textBox.value; //innerHTML itu mengubah text secara runtime ; .value membaca isi komponen form
        console.log("Horee sudah di sinii");
        console.log("isinya text box adalah " + textBox.value);
    }
</script>
    </head>

<body>
    <div class="container">
    <center><button class= "btn btn-primary" onclick="showalert();">Klik disini ! </button></center>
<br>
    <button onclick="changeText();"class="btn btn-success">Click me!</button>
    <span id="output">replace me</span>
    <input id="textbox" type="text" class="form-control" />

    </div>
</body>
