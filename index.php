<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Google Resim Arama</title>
</head>
<body>
    <main>
        <div class="anadiv">
            <input type="text" id="aranan" name="aranan"/>
            <select name="sayi" id="sayi">
                <option value="0" selected="selected">Resim Sayısı</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="button" value="ARA" class="aramaBtn" onclick="resimGetir();"/>
            <div id="gelendiv"></div>
        </div>
        
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
