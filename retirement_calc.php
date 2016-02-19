<html>
<head>
	<title>A POST example: retirement savings worksheet</title>
</head>
<?php
	/**
	 * This test. along with the submit button value in the form below.
	 * will check to see if the form is being rendered for the first time
	 * (in which case it will display with only the default annual gain filled in)
	**/

if (!IsSet($_POST['Submit']) || $_POST ['Submit'] != 'Calculate')
{
	$_POST['CurrentAge'] = "";
	$_POST['RetireAge'] = "";
	$_POST['Contrib'] = "";
	$Total = 0;
	$AnnGain = 7;

}
else
{
	$AnnGain = $_POST['AnnGain'];
	$Years = $_POST['RetireAge'] - $_POST['CurrentAge'];
	$YearCount = 0;
	$Total = $_POST['Contrib'];

	while ($YearCount <= $Years)
	{
		$Total = round($Total * ( 1.0 + $AnnGain/100) + $_POST['Contrib']);
		$YearCount = $YearCount + 1;
	}
}
?>
<body>
<div align="center" id="Div1" class="heading">A Retirement saving calculator</div>

<p class="blurb">
	Fill in all the values (except "Nest Egg") and see how much money you'll have for your retirement under different scenarios.
	You can change the values and resubmit the form as many times as you like. You must fill in the two "Age" variables.
	The "Annual return" variable has a default inflation-adjusted value (7% = 8% growth minus 1% inflation)
	which you can change to reflect your greater optimism or pessimism.
</p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<label>Your age now:
	<input type="text" size="5" name="CurrentAge" value="<?php echo $_POST['CurrentAge'];?> "></label>

	<label>The age at which you plan to retire:
	<input type="text" size="6" name="RetireAge" value="<?php echo $_POST['RetireAge'] ?>  "></label>

	<label>Annual Contribution:
	<input type="text" size="15" name="Contrib" value="<?php echo  $_POST['Contrib']?> "></label>

	<label>Annual Return:
	<input type="text" size="5" name="AnnGain" value="<?php echo $_POST['AnnGain'] ?> ">%</label>

	<br>

	<h3>Nest Egg: <?php echo $Total ?></h3>
	<p><input type="submit" name="Submit" value="Calculate"</p>
</form>



</body>
</html>