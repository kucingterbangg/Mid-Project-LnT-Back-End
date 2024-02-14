<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form id="formKaryawan" action="/tabelKaryawan/store" method="POST">
        @csrf
        <input id="nama" type="text" name="nama" placeholder="Nama">
        <p id="error-name" class="error-message"></p><br>

        <input type="text" name="identification" placeholder="Nomor ID"><br>
        <select name="jenisKelamin" id="">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select><br>

        <textarea id="alamat" name="alamat" rows="10"></textarea>
        <p id="error-alamat" class="error-message"></p><br>


        <input id="number" type="text" name="telp" placeholder="Nomor Telefon">
        <p id="error-number" class="error-message"></p><br>
        <br>


        <input id="usia" type="text" name="usia" placeholder="Usia">
        <p id="error-usia" class="error-message"></p>
        <br>

        <button id="send-btn" type="submit">Save</button>
    </form>

    <script>
        function validateName(){
            let inputName = document.querySelector("#nama");
            let valueName = inputName.value;
            let errorName = document.querySelector("#error-name");
        
            if (valueName == "") {
                errorName.innerHTML = "Name cannot be empty!";
                inputName.style.border = "1px solid red";
                return false;
            } else if(valueName.length < 5 || valueName.length > 20) {
                errorName.innerHTML = "Name has to be between 5-20 characters!";
                inputName.style.border = "1px solid red";
                return false;
            } else {
                errorName.innerHTML = "";
                inputName.style.border = "1px solid black";
                return true;
            }
        }

        function validateUsia() {
            let inputUsia = document.querySelector("#usia");
            let valueUsia = inputUsia.value;
            let errorUsia = document.querySelector("#error-usia");
        
            if (valueUsia === "") {
            errorUsia.innerHTML = "Age cannot be empty!";
            inputUsia.style.border = "1px solid red";
            return false;
            } else if (isNaN(valueUsia)) {
            errorUsia.innerHTML = "Age has to be an integer!";
            inputUsia.style.border = "1px solid red";
            return false;
            } else if(valueUsia < 21){
            errorUsia.innerHTML = "Age must be greater than 20!";
            inputUsia.style.border = "1px solid red";
            return false;
            } else {
            errorUsia.innerHTML = "";
            inputUsia.style.border = "1px solid black";
            return true;
            }
        }

        function validateAlamat() {
            let inputAlamat = document.querySelector("#alamat");
            let valueAlamat = inputAlamat.value;
            let errorAlamat = document.querySelector("#error-alamat");
            console.log(valueAlamat);
        
            if (valueAlamat === "") {
            errorAlamat.innerHTML = "Address cannot be empty!";
            inputAlamat.style.border = "1px solid red";
            return false;
            } else if(valueAlamat.length < 10 || valueAlamat.length > 40){
            errorAlamat.innerHTML = "Address has to be between 10-40 characters!";
            inputAlamat.style.border = "1px solid red";
            return false;
            } else {
            errorAlamat.innerHTML = "";
            inputAlamat.style.border = "1px solid black";
            return true;
            }
        }

        function validateNumber() {
            let inputNumber = document.querySelector("#number");
            let valueNumber = inputNumber.value;
            let errorNumber = document.querySelector("#error-number");
        
            if (valueNumber === "") {
            errorNumber.innerHTML = "Number cannot be empty!";
            inputNumber.style.border = "1px solid red";
            return false;
            } else if (isNaN(valueNumber)) {
            errorNumber.innerHTML = "Please enter a valid number!";
            inputNumber.style.border = "1px solid red";
            return false;
            } else if(valueNumber.length < 9 || valueNumber.length > 12){
            errorNumber.innerHTML = "Number has to be between 9-12 characters!";
            inputNumber.style.border = "1px solid red";
            return false;
            } else if(valueNumber.substring(0,2) != "08"){
            errorNumber.innerHTML = "Number has to start with 08!";
            inputNumber.style.border = "1px solid red";
            return false;
            } else {
            errorNumber.innerHTML = "";
            inputNumber.style.border = "1px solid black";
            return true;
            }
        }

        let sendBtn = document.querySelector("#send-btn");
        sendBtn.addEventListener("click", function (e) {
            e.preventDefault();

            let formKaryawan = document.querySelector("#formKaryawan");
            let isNameValid = validateName();
            let isUsiaValid = validateUsia();
            let isAlamatValid = validateAlamat();
            let isNumberValid = validateNumber();

            if (isNameValid && isUsiaValid && isAlamatValid && isNumberValid) {
                console.log("submit", formKaryawan)
                formKaryawan.submit();
            }
        });

    </script>
</body>
</html>

