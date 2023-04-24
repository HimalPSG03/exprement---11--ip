<!DOCTYPE html>
<html>
<head>
	<title>Get Movie Details</title>
         <style>
        table,th,td,tr {
            text-align: center;
            border : 1px solid black;
            border-collapse: collapse;
          
        }
        th,td {
            padding: 5px;
        }
    </style>
</head>
<body >
    <h1>MOVIE DETAILS</h1>
	<form method="get">
		<label for="id">Enter Movie ID:</label>
		<input type="text" name="id" id="id"><br><br>
		<input type="submit" value="Get Details">
	</form>
    <br>
    <br>
    <?php
  if(isset($_GET['id'])){
  $id = $_GET['id'];
  $xml = simplexml_load_file("movies.xml");
  foreach ($xml->movie as $movie) {
    if ($movie->id == $id) {
      $title = $movie->title;
      $director = $movie->director;
      $year = $movie->year;
      $genre = $movie->genre;
      echo"<table>";
      echo "<tr><th>Movie Name:</th><td >" . $title . "</td></tr>";
      echo "<tr><th>Director:</th><td >" . $director . "</td></tr>";
      echo "<tr ><th>Year:</th><td >" . $year . "</td></tr>";
      echo "<tr ><th>Genre:</th><td >" . $genre . "</td></tr>";
      echo "</table>";
}
}
}
?>
</body>
</html>