function resimGetir() {
    var sayi = document.getElementById("sayi").value;
    var aranan = document.getElementById("aranan").value;
    if(sayi != "0" && aranan!="") {
    var sc='&sayi='+sayi+'&aranan='+aranan;
    $.ajax({
    type: 'POST',
    url: 'resim_bilgi.php',
    data: sc,
    success: function(ajaxCevap) {
    $('#gelendiv').html(ajaxCevap);		
    }
    });
    }
    }