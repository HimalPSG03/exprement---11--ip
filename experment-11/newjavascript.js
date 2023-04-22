function getMovieDetails(movieId) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      var xmlDoc = this.responseXML;
      var movie = xmlDoc.getElementsByTagName("movie")[movieId-1];
      var title = movie.getElementsByTagName("title")[0].childNodes[0].nodeValue;
      var director = movie.getElementsByTagName("director")[0].childNodes[0].nodeValue;
      var year = movie.getElementsByTagName("year")[0].childNodes[0].nodeValue;
      var genre = movie.getElementsByTagName("genre")[0].childNodes[0].nodeValue;
      console.log("Title: " + title);
      console.log("Director: " + director);
      console.log("Year: " + year);
      console.log("Genre: " + genre);
    }
  };
  xhttp.open("GET", "movies.xml", true);
  xhttp.send();
}
