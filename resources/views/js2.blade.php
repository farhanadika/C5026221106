<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="operasi.js"></script>
        <link rel="stylesheet" href="style.css">
    <script>
        function showAlert(){
            alert("Selamat!");
        }
        function changeText() {
            var span = document.getElementById("output");
            var textbox = document.getElementById("textbox");
            span.innerHTML = textbox.value;
            textbox.style.fontSize = "13pt";
            textbox.style.fontFamily = "Comic Sans MS";
            textbox.style.color = "red";
            console.log("test log");
            console.log("test log: "+textbox.value);
}
function validateForm() {
        // let x = document.forms["myForm"]["fname"].value;
        var x = document.getElementById("fname");
        var nrp = document.getElementById("nrp");
        if (x.value == "") {
            alert("nama tidak boleh kosong");
            x.focus();
            return false;
        }
        if (nrp.value == ""){
            alert("NRP tidak boleh kosong");
            nrp.focus();
            return false;
        }
        else if(isNaN(nrp.value) == true){
            alert("NRP harus angka");
            nrp.focus();
            nrp.value = "";
            return false;
        }else if (nrp.value.length!=10){
            alert("jumlah digit harus 10, anda memasukkan "+nrp.value.length+" digit!");
            nrp.focus();
            return false;
        }
        else if(nrp.value.substring(0,4)!="5026"){
            alert("4 digit pertama harus 5026");
            nrp.focus();
            return false;
        }
        else if(nrp.value.substring(4,6)!="21" && nrp.value.substring(4, 6)!="22"){
            alert("Hanya untuk angkatan 2022 dan 2021");
            nrp.focus();
            return false;
        }

        }


        else if(nrp.value.substring(0,3))
        console.log(nrp.value.substring(4,6));
        if(nrp.value.substring(4,6)!="21") ||



    </script>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary" onclick="showAlert()">demo tombol</button>
            <br>
            <button onclick="changeText()">klik disini</button>
            <span id="output">replace me</span>
            <input id="textbox" type="text" class="form-control">
            <div class="form-group">
                <label for="bil1">Bilangan 1</label>
                <input type="number" id="bil1" placeholder="masukkan bilangan pertama" class="form-control">
                <label for="bil2">Bilangan 2</label>
                <input type="number" id="bil2" placeholder="masukkan bilangan pertama" class="form-control">
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary" onclick="tambah()">Tambah</button>
                <button type="button" class="btn btn-primary" onclick="kali()">Kali</button>
            </div>
            <p><b>Hasil operasi: </b> <p id="hasil"></p></p>
            <h2>JavaScript Validation</h2>

            <form name="myForm" action="https://www.google.com/" onsubmit="return validateForm()" method="post">
                <label for="fname">Name</label>
                <input type="text" id="fname" name="fname" class="form-control">
                <label for="nrp">NRP:</label>
                <input type="text" id="nrp" name="nrp" class="form-control">

                <input type="submit" value="submit" class="btn btn-primary">
                <input type="reset" value="kosongi!" class="btn btn-warning">
            </form>
        </div>
    </body>
</html>
