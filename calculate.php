<html>

  <head>

    <title>Gentamicin Calculator</title>
    
  </head>

  <body>

    <?php
			
      # 0. store posted variables
			$weight = $_POST['weight'];
			$height = $_POST['height'];
			$eGFR = $_POST['eGFR'];
			$sex = $_POST['sex'];

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

      # 4. convert height fromm cm -> m
			$heightInMetres = $height / 100;

      # 5. calculate BMI
			$BMI = $weight / ($heightInMetres * $heightInMetres);

      # 6. case when BMI >= 30
			if ($BMI >= 30) {

				if ($sex == 'Male') {
					$weight = 50 + 0.91 * ($height - 152.4);
				} else {
					$weight = 45.5 + 0.91 * ($height - 152.4);
				}

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