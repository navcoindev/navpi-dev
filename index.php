<<<<<<< HEAD
<?php
include ("header.php");
include ("pass.php");
$info = $coin->getinfo();
$y = array_reverse($info);
$bal1 = $coin->getbalance();
$bal2 = $coin->getbalance("*", 0);
$bal3 = abs($bal1 - $bal2);
=======
<?php 
include ("header.php"); 
include ("pass.php"); 
$info = $coin->getinfo(); 
$y = array_reverse($info);
$bal1 = $coin->getbalance(); 
$bal2 = $coin->getbalance("*", 0); 
$bal3 = abs($bal1 - $bal2); 
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
$bal4 = abs("{$y['stake']}");
if($primary!=""){
	$address = $primary;
}
else{
        $address = $coin->getaddressesbyaccount("")[0];
}

if ($currentWallet == NavCoin){
<<<<<<< HEAD
	$stakinginfo = $coin->getstakinginfo();
	$x = array_reverse($stakinginfo);
	$time = $x['expectedtime'];
}

	$days = floor($time / 86400);
	$hours = floor(($time / 3600) % 24);
	$minutes = floor(($time / 60) % 60);
	$fiatValue = ($bal1 * $price * $fiatBTC);
	$fiatValue = sprintf("%01.2f", $fiatValue);
	$btcValue = ($bal1 * $price);
	$btcValue = sprintf("%01.8f", $btcValue);
	$img = shell_exec("qrencode --output=- -l H -d 144 -s 50 -m 1 $address"); $imgData = "data:image/png;base64," . base64_encode($img);
=======
	$stakinginfo = $coin->getstakinginfo(); 
	$x = array_reverse($stakinginfo); 
	$time = $x['expectedtime']; 
}

	$days = floor($time / 86400); 
	$hours = floor(($time / 3600) % 24); 
	$minutes = floor(($time / 60) % 60); 
	$fiatValue = ($bal1 * $price * $fiatBTC); 
	$fiatValue = sprintf("%01.2f", $fiatValue); 
	$btcValue = ($bal1 * $price); 
	$btcValue = sprintf("%01.8f", $btcValue); 
	$img = shell_exec("qrencode --output=- -l H -d 144 -s 50 -m 1 $address"); $imgData = "data:image/png;base64," . base64_encode($img); 
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
?>
<div class="row">
	<div class="col-lg-6">
		<h3>Available Balance: <font color='green'><?php echo $bal1; ?></font> <?php echo $currentWallet; ?></h3>
<<<<<<< HEAD

=======
		
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
		<h4>Unavailable Due To Staking: <font color='red'><?php echo $bal4; ?></font> <?php echo $currentWallet; ?></h4>
		<h4>BTC Value: <font color='green'><?php echo "{$btcValue}"; ?></font></h4>
		<h4><?php echo $longCurrency; ?> Value: <font color='green'><?php echo "{$symbol}{$fiatValue}"; ?></font></h4><br>
		<div class="col-lg-8">
<<<<<<< HEAD
    	<form action="lockcontrol">
       		<button class='btn btn-default btn-block'>Your Wallet Is <?php print($lockState)?> Click To Change</button>
    	</form>
=======
                	<form action="lockcontrol">
                   		<button class='btn btn-default btn-block'>Your Wallet Is <?php print($lockState)?> Click To Change</button>
                	</form>	
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
		</div>
	</div>
	<div class="col-lg-3">
		<?php if (isset($_POST['show'])){
<<<<<<< HEAD
			$privKey = $coin->dumpprivkey($address);
			$privKeyImg = shell_exec("qrencode --output=- -l H -d 144 -s 50 -m 1 $privKey");
			$privKeyImgData = "data:image/png;base64," . base64_encode($privKeyImg);
		?>
		<center><img class="emrQRCode" src="<?=$privKeyImgData?>"height="30%" />
		<h4>Private Key</h4></center>
		<?php
=======
			$privKey = $coin->dumpprivkey($address); 
			$privKeyImg = shell_exec("qrencode --output=- -l H -d 144 -s 50 -m 1 $privKey"); 
			$privKeyImgData = "data:image/png;base64," . base64_encode($privKeyImg); 
		?>
		<center><img class="emrQRCode" src="<?=$privKeyImgData?>"height="30%" />
		<h4>Private Key</h4></center>
		<?php 
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
		}
		else {
		?>
		<center><h4>In order to</h4>
			<form name="sql-data" method="post" action="<?php $_SERVER['PHP_SELF']?>">
				<button class='btn btn-default' type="submit" name="show" value="show">Show private key</button>
			</form>
		<h4>wallet must be unlocked for sending, or not encrypted.</h4></center>
<<<<<<< HEAD
		<?php
=======
		<?php 
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
		}
		?>
	</div>
	<div class="col-lg-3">
		<center><img class="emrQRCode" src="<?=$imgData?>"height="30%" />
		<h4>Public Key</h4></center>
	</div>
</div>
</div>
<div class="well">
<div class="row">
	<div class="col-lg-7">
<<<<<<< HEAD
	<p> Your main wallet address is <?php print_r($address); ?>.
=======
	<p> Your main wallet address is <?php print_r($address); ?>.    
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
	<p>The network is currently on block <?php print_r($coin->getblockcount()); ?>.
	<?php if ($currentWallet == NavCoin): ?>
		<?php echo "<p>Your stake weight is {$w['combined']}{$sw['combined']}{$x['weight']}{$x['Weight']}.</p>" ?>
		<?php echo "<p>The network stake weight is {$x['netstakeweight']}{$x['Net Stake Weight']}.</p>" ?>
	<?php endif; ?>
	<?php if ($currentWallet == Philosopherstone): ?>
		<?php echo "<p>Your stake weight is {$x['stakeweight']}.</p>"?>
	<?php endif; ?>
        <?php if ($currentWallet == NavCoin): ?>
		<?php echo "<p>Your estimated time to earn rewards is "?>
		<?php if ($hours < 1 && $days < 1)echo "$minutes minutes.</p>"?>
		<?php if ($hours == 1 && $days < 1)echo "$hours hour $minutes minutes.</p>"?>
		<?php if ($hours > 1 && $days < 1)echo "$hours hours $minutes minutes.</p>"?>
		<?php if ($hours == 0 && $days == 1)echo "$days day $hours hour $minutes minutes"?>
		<?php if ($hours == 1 && $days == 1)echo "$days day $hours hours $minutes minutes"?>
		<?php if ($hours < 1 && $days == 1)echo "$days day $hours hours $minutes minutes"?>
		<?php if ($hours == 0 && $days > 1)echo "$days days $hours hours $minutes minutes"?>
		<?php if ($hours == 1 && $days > 1)echo "$days days $hours hour $minutes minutes"?>
		<?php if ($hours > 1 && $days > 1)echo "$days days $hours hours $minutes minutes"?>
	<?php endif; ?>
		</p></p>
	<?php if($currentVersion != $newestVersion):?>
		<a href='update' class='btn btn-default' role='button'>A new update to the WebUI is available, click to get it.</a>
	<?php endif; ?>
	</div>
<<<<<<< HEAD
     <?php if(file_exists("/home/stakebox/UI/".$currentWallet."notes.php")){
       include('/home/stakebox/UI/'.$currentWallet.'notes.php');
=======
     <?php if(file_exists("/home/stakebox/UI/".$currentWallet."notes.php")){ 
       include('/home/stakebox/UI/'.$currentWallet.'notes.php'); 
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
	echo "<div class='col-lg-5'>
	  <div class='form-group'>
	  <form action='notes' method='POST'><input type='hidden'>
	    <label for='notes'>Notes:</label>
	      <textarea class='form-control' name='notes' id='notes' cols='60' rows='10'>$notes</textarea>
<<<<<<< HEAD
		<button class='btn btn-default' type='submit' value='setprimary' style='margin-top:10px;'>Save Notes</button>
=======
		<button class='btn btn-default' type='submit' value='setprimary'>Save Notes</button>
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
	  </form>
	  </div>
	</div>";}
     else{
	echo "<div class='col-lg-5'>
	  <div class='form-group'>
	  <form action='notes' method='POST'><input type='hidden'>
	    <label for='notes'>Notes:</label>
	      <textarea class='form-control' name='notes' id='notes' cols='60' rows='10'></textarea>
<<<<<<< HEAD
		<button class='btn btn-default' type='submit' value='setprimary' style='margin-top:10px;'>Save Notes</button>
=======
		<button class='btn btn-default' type='submit' value='setprimary'>Save Notes</button>
>>>>>>> c9aef8ddc2a96891f4a13ed702e52b35d46a7c55
	  </form>
	  </div>
	</div>";}
?>
</div>
</div>
<?php include ("footer.php"); ?>
