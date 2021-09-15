<html>

  <head>

    <title>Gentamicin Calculator</title>
    
  </head>

  <body>
  
    <h1>Gentamicin Calculator</h1>

			<h3>This is a gentamicin dose calculator for critically ill patients with sepsis of unknown origin. Enter your patient's details, and hit "Calculate" to receive a gentamicin dose estimate. This is NOT intended for clinical use.</h3>

			<form method="POST" action="calculate.php">

        <!-- 0. input weight -->
        <h3>Weight (kg)</h3>
        <input type="number" name="weight" required>
  
        <!-- 1. input height -->
        <h3>Height (cm)</h3>
        <input type="number" name="height" required>

        <!-- 2. input eGFR -->
        <h3>eGFR (ml/min/1.73m2)</h3>
        <input type="number" name="eGFR" required>

        <!-- 3. input sex -->
        <h3>Sex</h3>
        <select name="sex">
          <option>Male</option>
          <option>Female</option>
        </select>

        <!-- 4. calculate button -->
        <button type="submit">Calculate</button>

			</form>

  </body>

</html>