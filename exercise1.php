<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="EECS 448 - Spring 2016">
    <meta name="author" content="Francinaldo Almeida" >

    <title>Francinaldo Almeida - EECS 448 Lab 04 Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">EECS 448 - Lab 04</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="exercise1.php">Exercise 1</a></li>
            <li><a href="Quiz.html">Exercise 2</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div>
        <h1>Multiplication Table</h1>
        <table class="table">
			<thead> 
				<tr> 
					<th></th>
					<?php
					for($i=1;$i<=100;$i++) {
						echo "<th>".$i."</th>";
					}
					?>
				</tr>
			</thead>
			<tbody>
			<?php
			for($i=1;$i<=100;$i++) {
				echo '<tr><th scope="row">'.$i.'</th>';
				for($j=1;$j<=100;$j++) {
					echo "<td>".$i*$j."</td>";
				}
				echo "</tr>";
			}
			?>
			</tbody>
		  </table>
      </div>

    </div>
  </body>
</html>