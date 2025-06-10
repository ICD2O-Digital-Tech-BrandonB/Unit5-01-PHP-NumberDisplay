<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="php area of a triangle">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="BrandonBCode">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Counter with PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Number Display</h1>";
			echo "<h3>This program will count to your number!</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="lblminNumb">Minimum Number:</label>
      <input type="number" id="minNumb" placeholder="Enter min number" name="minNumb"><br><br>
      <label for="lblmaxNumb">Maximum Number:</label>
      <input type="number" id="maxNumb" placeholder="Enter max number" name="maxNumb"><br><br>
      <input type="submit" value="Calculate Area">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results"></iframe>
	</body>
</html>
