<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://exercise1xml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("movie");
 
 ?>
<h2>Movies</h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $director = $data->getElementsByTagName("director")->item(0)->nodeValue;
   $release = $data->getElementsByTagName("release")->item(0)->nodeValue;
  
   echo "<li><b>Movie title</b> $title
            <ul>
                <li> <b>Director:</b> $director</li>
                <li> <b>Release Date:</b> $release</li>
            </ul>
        </li>";
 }
?>
</ul>
