<?php
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
                document.getElementById("add").innerHTML = this.responseText;
                document.getElementById('btn_add').hidden = "true";
                document.getElementById('btn_signup').hidden = "true";

            }
            xhttp.open("POST", "add_form.php", true);
            xhttp.send();
        }

        ///modal
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
            myInput.focus()
        })
    </script>
    <style>

    </style>
</head>

