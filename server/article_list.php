<? 
//header('content-type: text/html; charset=iso-8859-2');
header(base64_decode('Q29udGVudC1UeXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9dXRmLTg='));
header(base64_decode('QWNjZXNzLUNvbnRyb2wtQWxsb3ctT3JpZ2luOiAq'));
require_once(base64_decode('ZnVuY3Rpb24ucGhw'));

$id = addslashes(strip_tags($_GET[base64_decode('aWQ=')]));	
	
	if($id){
		
		$connect = data_base();
		$qm1 = $connect->query(base64_decode('U0VUIE5BTUVTIHV0Zjg='));	
		$qm = $connect->query(base64_decode('U0VMRUNUICogRlJPTSBudGFfbWVzc2FnZSBXSEVSRSBpZCA9ICcyJyBBTkQgb25saW5lID0gJzEn'));	
		if ($qm->num_rows>0){
			
			$sqm = $qm->fetch_row(); 
		?>
        <a href="message.html?id=2" class="message_alert" style="background-color:#<?  echo $sqm[1]; ?>; color:#<?  echo $sqm[2]; ?>;"><div style="padding:20px;"><?  echo $sqm[3]; ?></div></a>
        <? 
		}
		
		//$question = $connect->query("SELECT * FROM nta_article WHERE id_grid = '$id' AND online = '1' ORDER BY date DESC, id DESC LIMIT 10");
		$question = $connect->query(base64_decode('U0VMRUNUIGFhLmlkLCBiYi50ZXJtX2lkLGFhLnBvc3Rfc3RhdHVzLCBhYS5wb3N0X2RhdGUsIGFhLnBvc3RfdGl0bGUgRlJPTSA=').$table_prefix.base64_decode('cG9zdHMgYWEsIA==').$table_prefix.base64_decode('dGVybXMgYmIsIA==').$table_prefix."term_relationships cc 
		WHERE aa.id = cc.object_id 
		and cc.term_taxonomy_id = bb.term_id
		and aa.post_status = 'publish'
		and aa.post_type = 'post'
		and cc.term_taxonomy_id = '$id'
		ORDER BY aa.id DESC LIMIT 10");
		for ($lp = 0; $rz = $question->fetch_row(); ++$lp){ $tab[$lp] = $rz; }		
		if ($question->num_rows>0){
			
				$qe = $connect->query("SELECT article_effect FROM nta_grid WHERE id = '$id'");
				$wqe = $qe->fetch_row();		
			?>			
			<ul class="<?  echo $wqe[0]; ?>">
			<? 
			foreach ($tab as $article){ 
			
				$title = substr($article[4], 0, 150);
				$y = substr($article[3], 0, 4); 
				$m = substr($article[3], 5, 2); 
				$d = substr($article[3], 8, 2);

			$que = $connect->query(base64_decode('U0VMRUNUIGd1aWQgRlJPTSA=').$table_prefix.base64_decode('cG9zdHMgd2hlcmUgaWQgaW4gKHNlbGVjdCBtZXRhX3ZhbHVlIGZyb20g').$table_prefix."postmeta where post_id = '$article[0]' and meta_key ='_thumbnail_id') and post_type = 'attachment'"); 			
			$aaa = $que->fetch_row();
			?>
			<li>
            <a href="article.html?id=<?  echo $article[1]; ?>&art=<?  echo $article[0]; ?>" class="category_bg">
                <div class="category_bg_img" style="background:url(<?  echo $aaa[0]; ?>);background-size: 100% auto;background-repeat: no-repeat;">
                    <div class="category_bg_txt_bg">
                        <div class="category_bg_data"><?  echo $d; ?>.<?  echo $m; ?>.<?  echo $y; ?></div>
                        <div class="category_bg_title">
						<p style="font-family: 'Trebuchet MS', Helvetica, sans-serif">
						<?  echo $title; if(strlen($title)==150){ echo base64_decode('Li4u');echo $tab1[0]; } ?>
						
						</p>
						</div>
                    </div>
                </div>
            </a>
            </li>
            <? 
			}
			?>                    
            </ul>                           		
            <? 
		} else {
		?>
			<script type="text/javascript">		
			window.sessionStorage.setItem("dbe",'end');
			</script>        
        <div class="alert_bg">
        <div style="padding:20px 50px 20px 50px;">No entries in this category</div>
        </div>

		<? 	
		}
	}
?>