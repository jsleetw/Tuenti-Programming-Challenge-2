<?php
	/**
	  * This is a simple script in php who draws the given polygons and pizza into
	  * a PNG and returns it by the standar output
	  */

	$pizza = array(0.0, 0.0, 80);
	$left = json_decode('[[0, [{"y": -37.5602589573, "x": -43.5306177045}, {"y": -37.15089677742403, "x": -44.09405640780595}, {"y": -36.48853485667597, "x": -43.87884197372025}, {"y": -36.48853485667597, "x": -43.18239343527976}, {"y": -37.15089677742403, "x": -42.967179001194054}]], [0, [{"y": -42.667608553799994, "x": 42.7716826736}, {"y": -43.28781200904043, "x": 43.62531949640668}, {"y": -44.29132227955957, "x": 43.299259244143}, {"y": -44.29132227955957, "x": 42.24410610305699}, {"y": -43.28781200904043, "x": 41.91804585079331}]], [0, [{"y": -43.5484530788, "x": -39.434206075}, {"y": -42.948654348468054, "x": -40.25975820335045}, {"y": -41.97815961638194, "x": -39.94442534980539}, {"y": -41.97815961638194, "x": -38.923986800194605}, {"y": -42.948654348468054, "x": -38.60865394664955}]], [0, [{"y": -38.471068956109995, "x": -9.90008721936}, {"y": -38.709434107710734, "x": -9.57200573422637}, {"y": -39.09511702473426, "x": -9.697321710467874}, {"y": -39.09511702473426, "x": -10.102852728252126}, {"y": -38.709434107710734, "x": -10.22816870449363}]], [0, [{"y": -38.70916882347, "x": 5.31155162193}, {"y": -38.48413192616426, "x": 5.0018149050394465}, {"y": -38.12001457760075, "x": 5.120123803327834}, {"y": -38.12001457760075, "x": 5.502979440532165}, {"y": -38.48413192616426, "x": 5.621288338820553}]], [1, [{"y": -40.002594917399996, "x": 6.2186647311}, {"y": -40.343673982685715, "x": 6.9337518622077505}, {"y": -41.11404906946048, "x": 7.118702557066872}, {"y": -41.74259550590305, "x": 6.636401913186484}, {"y": -41.763334597478334, "x": 5.844407958706574}, {"y": -41.16089122747611, "x": 5.329872712302154}, {"y": -40.381892341510465, "x": 5.474251621829756}]], [1, [{"y": -35.745383586539994, "x": 5.68644625657}, {"y": -36.65360009401772, "x": 7.590561761908642}, {"y": -38.70493493678305, "x": 8.083043685417547}, {"y": -40.378612120151786, "x": 6.798786013454103}, {"y": -40.433835636444066, "x": 4.689885009287624}, {"y": -38.829665022811746, "x": 3.319793871996179}, {"y": -36.755366950755956, "x": 3.7042422955743213}]], [1, [{"y": -41.030146050199995, "x": -27.5516505326}, {"y": -41.557897138953905, "x": -26.445197365561175}, {"y": -42.749897270811, "x": -26.159023453081588}, {"y": -43.722446160280604, "x": -26.905286463100587}, {"y": -43.75453572329572, "x": -28.130737434162544}, {"y": -42.82237606651668, "x": -28.92687699278577}, {"y": -41.617032344051445, "x": -28.70347973844984}]], [1, [{"y": -34.0018442732, "x": 39.4351929666}, {"y": -35.975811421586144, "x": 43.573701156359306}, {"y": -40.43429412545609, "x": 44.64408815128456}, {"y": -44.07195513444668, "x": 41.8528126859673}, {"y": -44.19198092794616, "x": 37.269212556319495}, {"y": -40.70538927755787, "x": 34.291381969624666}, {"y": -36.19699704235149, "x": 35.126963080674564}]], [1, [{"y": -40.322688431799996, "x": -11.5375971569}, {"y": -41.834061982765846, "x": -8.368936612791392}, {"y": -45.247711921964104, "x": -7.54939177145476}, {"y": -48.032897400285265, "x": -9.686539755497677}, {"y": -48.124795489813806, "x": -13.195986206932828}, {"y": -45.45527669477032, "x": -15.475970649261178}, {"y": -42.00341338121846, "x": -14.836205599493276}]], [2, [{"y": -43.817168104000004, "x": 21.8331931266}, {"y": -43.63403143943015, "x": 21.581127132510666}, {"y": -43.33771009156985, "x": 21.677407774844763}, {"y": -43.33771009156985, "x": 21.98897847835524}, {"y": -43.63403143943015, "x": 22.085259120689336}]]]', true);
	$right = json_decode('[[0, [{"y": -39.837607203999994, "x": 22.494111013}, {"y": -39.125565639227375, "x": 21.514069876622962}, {"y": -37.97345818602262, "x": 21.88841228034592}, {"y": -37.97345818602262, "x": 23.09980974565408}, {"y": -39.125565639227375, "x": 23.47415214937704}]], [0, [{"y": -38.676009393099996, "x": 41.6166854065}, {"y": -38.390651257173054, "x": 41.2239236273508}, {"y": -37.928932094276945, "x": 41.373945277503914}, {"y": -37.928932094276945, "x": 41.85942553549608}, {"y": -38.390651257173054, "x": 42.009447185649194}]], [0, [{"y": -37.8153447112, "x": -27.3504293739}, {"y": -37.78620031908597, "x": -27.390543188288866}, {"y": -37.73904370206402, "x": -27.375221074610725}, {"y": -37.73904370206402, "x": -27.325637673189274}, {"y": -37.78620031908597, "x": -27.31031555951113}]], [0, [{"y": -40.3575029314, "x": -26.5551041453}, {"y": -39.67559499557863, "x": -27.49366989959035}, {"y": -38.57224477822137, "x": -27.13516968212812}, {"y": -38.57224477822137, "x": -25.97503860847188}, {"y": -39.67559499557863, "x": -25.616538391009648}]], [0, [{"y": -39.2669587328, "x": 38.5515967273}, {"y": -38.57659327934746, "x": 37.60139019865005}, {"y": -37.459558511002534, "x": 37.96433679626228}, {"y": -37.459558511002534, "x": 39.13885665833772}, {"y": -38.57659327934746, "x": 39.50180325594995}]], [1, [{"y": -40.0983982273, "x": 23.4434174776}, {"y": -39.32631187610274, "x": 21.824704780054038}, {"y": -37.58244615598608, "x": 21.406039661966076}, {"y": -36.159631993338884, "x": 22.497803367843954}, {"y": -36.112685782998796, "x": 24.290606810566086}, {"y": -37.476411530746915, "x": 25.455338631986983}, {"y": -39.23979858280217, "x": 25.128514159914427}]], [1, [{"y": -44.50757047170001, "x": -10.6307487369}, {"y": -42.81359851578361, "x": -14.18223479811139}, {"y": -38.987524372417695, "x": -15.100793930599195}, {"y": -35.86584337615666, "x": -12.70544385430706}, {"y": -35.76284250892291, "x": -8.771999428392402}, {"y": -38.7548824130919, "x": -6.216555936105707}, {"y": -42.623786725382345, "x": -6.933614966277114}]], [1, [{"y": -36.97501782487, "x": 6.19844965377}, {"y": -38.39619898409627, "x": 9.178017916290548}, {"y": -41.60613670907642, "x": 9.948655782028233}, {"y": -44.22511407851041, "x": 7.939043765555387}, {"y": -44.31152807809601, "x": 4.639026259687416}, {"y": -41.8013148926848, "x": 2.49510166163198}, {"y": -38.555444206176325, "x": 3.0966882346407254}]], [1, [{"y": -44.415626162500004, "x": -10.4744871224}, {"y": -44.12614940479781, "x": -11.081387765845333}, {"y": -43.47232539438164, "x": -11.238357022922829}, {"y": -42.93887258825809, "x": -10.829024287971121}, {"y": -42.92127114156165, "x": -10.15685215723501}, {"y": -43.43257004904909, "x": -9.72016163585141}, {"y": -44.09371315255225, "x": -9.842697267217757}]], [1, [{"y": -37.6895644224, "x": -10.339800843}, {"y": -39.27525485156277, "x": -7.015331723603408}, {"y": -42.856759922654945, "x": -6.1554884304964546}, {"y": -45.77889783726558, "x": -8.397723714973754}, {"y": -45.87531471642205, "x": -12.0797357801867}, {"y": -43.07453101800051, "x": -14.471831041169464}, {"y": -39.452933554170755, "x": -13.80060762609679}]], [2, [{"y": -44.8359347292, "x": -44.3996210325}, {"y": -41.686582061997164, "x": -48.73433310482565}, {"y": -36.59082240390284, "x": -47.07862042464174}, {"y": -36.59082240390284, "x": -41.72062164035826}, {"y": -41.686582061997164, "x": -40.06490896017435}]]]', true);

	$imgWidth = 200 * 10;
	$imgHeight = 200 * 10;
	$img = imagecreatetruecolor($imgWidth, $imgHeight);
	
	$white = imagecolorallocate($img, 255, 255, 255);
	$red   = imagecolorallocate($img, 255,   0,   0);
	$green   = imagecolorallocate($img, 0, 255, 0);
	$blue   = imagecolorallocate($img, 0, 0, 255);

	//print($pizza[0] + ($imgWidth / 2) . " - " . ($pizza[1] + ($imgHeight / 2)) . " - " . $pizza[2] * 2 . " - " . $pizza[2] * 2); die();
	imagearc($img, ($pizza[0] * 10) + ($imgWidth / 2), (($pizza[1] * 10) + ($imgHeight / 2)), $pizza[2] * 20, $pizza[2] * 20,  0, 360, $white);
	imagearc($img, ($imgWidth / 2), ($imgHeight / 2), 2, 2,  0, 360, $white);

	foreach ($left as $element) {
		$lastPoint = null;
		foreach ($element[1] as $angle) {
			switch($element[0]) {
				case 0:
					$color = $white;
					break;
				case 1:
					$color = $red;
					break;
				default:
					$color = $green;
					break;
			}
			if ($lastPoint !== null) {
				imageline($img , ($lastPoint['x'] * 10) + ($imgWidth / 2), ($lastPoint['y'] * 10) + ($imgHeight / 2), ($angle['x'] * 10) + ($imgWidth / 2), ($angle['y'] * 10) + ($imgHeight / 2), $color);
			}

			$lastPoint = $angle;
		}
		imageline($img , ($lastPoint['x'] * 10) + ($imgWidth / 2), ($lastPoint['y'] * 10) + ($imgHeight / 2), ($element[1][0]['x'] * 10) + ($imgWidth / 2), ($element[1][0]['y'] * 10) + ($imgHeight / 2), $color);
	}

	foreach ($right as $element) {
		$lastPoint = null;
		foreach ($element[1] as $angle) {
			switch($element[0]) {
				case 0:
					$color = $white;
					break;
				case 1:
					$color = $red;
					break;
				default:
					$color = $green;
					break;
			}
			$color = $blue;
			if ($lastPoint !== null) {
				imageline($img , ($lastPoint['x'] * 10) + ($imgWidth / 2), ($lastPoint['y'] * 10) + ($imgHeight / 2), ($angle['x'] * 10) + ($imgWidth / 2), ($angle['y'] * 10) + ($imgHeight / 2), $color);
			}

			$lastPoint = $angle;
		}
		imageline($img , ($lastPoint['x'] * 10) + ($imgWidth / 2), ($lastPoint['y'] * 10) + ($imgHeight / 2), ($element[1][0]['x'] * 10) + ($imgWidth / 2), ($element[1][0]['y'] * 10) + ($imgHeight / 2), $color);
	}

	imagepng($img);
