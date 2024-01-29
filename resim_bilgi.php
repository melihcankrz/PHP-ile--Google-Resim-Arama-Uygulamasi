<div class="detay">
<?php
class ResimArama{
    public function Ara($sorgu, $limit){
		$sorgu = trim(str_replace(" ", "+", $sorgu));
		$url = "https://www.google.com/search?q=". $sorgu ."&tbm=isch";
		$aramalar = @file_get_contents($url);
		if($aramalar === FALSE)
            return null;
        if (!$aramalar)
            return null;
		preg_match_all('/<img[^>]+>/i',$aramalar, $sonuc);
        $sonuc = $sonuc[0];
        $resimler = [];
		for($i = 0; $i < count($sonuc); $i++){
			preg_match( '@src="([^"]+)"@' , $sonuc[$i], $eslesme );
            $sonuc[$i] = array_pop($eslesme);
			if (@getimagesize($sonuc[$i])) {
				if(count($resimler) == $limit)
                    break;
				$resim["uri"] = trim($sonuc[$i]);
                array_push($resimler, $resim);
			}
		}
		return $resimler;
	}
}

$aranan = $_REQUEST["aranan"];
$limit = $_REQUEST["sayi"];
$data = [];
$logo="";
$ResimArama = new ResimArama();
$resimler = $ResimArama->Ara($aranan, $limit);
if(count($resimler) === 0) {?>
	<p>Veri Bulunamadı...</p>
<?php } else {
	foreach($resimler as $icerik) { 
	?>
		<a href="<?php echo $icerik["uri"];?>" target="_blank">
			<img src='<?php echo $icerik["uri"];?>' alt='logo'/>
		</a>
<?php } }?>	
</div>