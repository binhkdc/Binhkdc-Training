<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tra từ điển</title>
    <script src="https://kit.fontawesome.com/a55731cae7.js" crossorigin="anonymous"></script>
    <link href="https://api.dictionaryapi.dev/api/${version}/entries/${language}/${word}">
</head>
<body>
<form action="https://dictionaryapi.dev/" _lpchecked="1">
    <input type="text" name="define" id="input1" required="" placeholder="Nhập từ khóa cần tìm">
    <button type="submit" class="search">
        <i class="fa fa-search"></i>
    </button>
    <h1>Phonetics</h1>
    <ul>
        <li>/<span id="result"></span>/</li>
    </ul>
</form>

<p id="demo1"></p>
</body>
</html>
<script>

    function constructAPIEndpoint (word, language, version = 'v2') {
        return `https://api.dictionaryapi.dev/api/${version}/entries/${language}/${word}`;
    }

    const form = document.querySelector('form');

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        let word = document.querySelector('#input1').value,
            language = 'en';
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
           let location_starting='phonetic';
           let location_end='phonetics';
            let coordinates_end =this.responseText.indexOf(location_end);
            let coordinates_starting= this.responseText.indexOf(location_starting);
            document.getElementById("result").innerHTML= this.responseText.slice(coordinates_starting+11,coordinates_end-3);
        }
        xhttp.open("GET", constructAPIEndpoint(word, language), true);
        xhttp.send();
    });

</script>

