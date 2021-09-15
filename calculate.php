<html>

  <head>

    <title>Gentamicin Calculator</title>
    
  </head>

  <body>

    <?php

      # NOTE: THe reason parts 4-6 are skipped is they are part of the EXTENSION challenge! See "tutorialnight1-teacher (CHALLENGE TASK)" for complete version.
			
      # 0. store posted variables
			$weight = $_POST['weight'];
			$height = $_POST['height'];
			$eGFR = $_POST['eGFR'];

      # 1. case when eGFR >= 60
			if ($eGFR >= 60) {
				$dosePerKG = 7;
				$maxDose = 700;
			}

      # 2. case when eGFR is >= 40 and eGFR < 60
			if ($eGFR >= 40 and $eGFR < 60) {
				$dosePerKG = 5;
				$maxDose = 550;
			}

      # 3. case when eGFR is < 40
			if ($eGFR < 40) {
				$dosePerKG = 4;
				$maxDose = 400;
			}

      # 7. calculate dose and round it!
			$dose = $weight * $dosePerKG;
			$dose = round($dose);

      # 8. case if dose exceeds max dose
			if ($dose > $maxDose) {
				$dose = $maxDose;
			}

		?>


    <h1>Results</h1>

			<h3>This is NOT intended for clinical use.</h3>
      <h2>Your suggested dose is:</h2>
      <h1><?php echo $dose; ?>mg</h1>

      <p>
        <?php echo 'Based on a '.$sex.' with a weight of '.$weight.' kilograms, a height of '.$height.' centimetres, and an eGFR of '.$eGFR.'ml/min/1.73m².'; ?>
      </p>
			
			<a href="index.php">Go back</a>

  </body>

</html>