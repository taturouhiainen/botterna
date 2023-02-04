<?php 
// GET THE EMAILS THAT WANT TO RECIEVE NOTIFICATIONS FROM BOTS
  
$firstbot = array();
$secondbot = array();
$thirdbot = array();
$fourthbot = array();

$conn= mysqli_connect("mysql09.domainhotelli.fi", "gjeulrkl_manager", "Taturou11!", "gjeulrkl_botusers");

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }


    $query = "SELECT COUNT(*) FROM emails";

    if($result = mysqli_query($conn, $query)) {


      $row = mysqli_fetch_array($result);
      $count = $row[0];


    } else {

      $dbalert = 'There was a database error. Contact the dubs maintenance team immediately.';
    }

    for ($i=0; $i < $count; $i++) { 
      
      $idnum = $i+1;
      $query = "SELECT * FROM bots WHERE id=$idnum";

      if($result = mysqli_query($conn, $query)) {

        $row = mysqli_fetch_array($result);
        
        $name = $row['name'];
        $one = $row['one'];
        $two = $row['two'];
        $three = $row['three'];
        $four = $row['four'];

        if ($one == 'yes') {
          
          array_push($firstbot, $name);

        }

        if ($two == 'yes') {
          
          array_push($secondbot, $name);

        }

        if ($three == 'yes') {
          
          array_push($thirdbot, $name);

        }

        if ($four == 'yes') {
          
          array_push($fourthbot, $name);

        }


      

       

      } else {

        $dbalert = 'There was a database error. Contact the dubs maintenance team immediately.';
      }



    }

    if (!empty($firstbot)) {

      $firstbotsubs = '';
      
      foreach ($firstbot as &$subscriber) {
        
        $query = "SELECT * FROM emails WHERE name='$subscriber'";

        if($result = mysqli_query($conn, $query)) {

          $row = mysqli_fetch_array($result);
          $email = $row['email'];

          $firstbotsubsraw .= $email.', ';

        }

      }

      $firstbotsubs = substr($firstbotsubsraw, 0, -2);
     
    }

   if (!empty($secondbot)) {

      $secondbotsubs = '';
      
      foreach ($secondbot as &$subscriber) {
        
        $query = "SELECT * FROM emails WHERE name='$subscriber'";

        if($result = mysqli_query($conn, $query)) {

          $row = mysqli_fetch_array($result);
          $email = $row['email'];

          $secondbotsubsraw .= $email.', ';

        }

      }
      
      $secondbotsubs = substr($secondbotsubsraw, 0, -2);
      
    }

    if (!empty($thirdbot)) {

      $thirdbotsubs = '';
      
      foreach ($thirdbot as &$subscriber) {
        
        $query = "SELECT * FROM emails WHERE name='$subscriber'";

        if($result = mysqli_query($conn, $query)) {

          $row = mysqli_fetch_array($result);
          $email = $row['email'];

          $thirdbotsubsraw .= $email.', ';

        }

      }
      
      $thirdbotsubs = substr($thirdbotsubsraw, 0, -2);
      
    }

    if (!empty($fourthbot)) {

      $fourthbotsubs = '';
      
      foreach ($fourthbot as &$subscriber) {
        
        $query = "SELECT * FROM emails WHERE name='$subscriber'";

        if($result = mysqli_query($conn, $query)) {

          $row = mysqli_fetch_array($result);
          $email = $row['email'];

          $fourthbotsubsraw .= $email.', ';

        }

      }
      
      $fourthbotsubs = substr($fourthbotsubsraw, 0, -2);
     
    }

// FIRST BOT
if (isset($firstbotsubs)) {
   
  
// 1st BOT part 1: FREE COUCHES



$servername = "sdb-h.hosting.stackcp.net";
  $username = "sniper-31383655e0";
  $password = "u2R`vZMfg£JR";
  $dbname = "couch";

  // Create connection
  $conn= mysqli_connect("sdb-h.hosting.stackcp.net", "sniper-31383655e0", "u2R`vZMfg£JR", "sniper-31383655e0");
  if(mysqli_connect_error()) {

    die("There was an error connecting to the database");
    
  } else {

    

    $query = "SELECT * FROM couch";
    if($result = mysqli_query($conn, $query)) {


    $row = mysqli_fetch_array($result);
    


    $oldId = $row["postid"];
    $oldTime = $row["time"];

  
    
  }
  

$link = 'https://www.tori.fi/uusimaa?q=&cg=3020&w=1&st=g&c=3025&ca=18&l=0&md=th';
$src = file_get_contents($link);

$titleArray = explode('<div tabindex="50" class="li-title">', $src);
$titleArrayy = explode('</div>', $titleArray[1]);
$title = $titleArrayy[0];

if (strpos($title, 'tuol') !== false OR strpos($title, 'nahka') !== false) {

  } else {

$idArray = explode('<a id="item_', $src);
$idArrayy = explode('"', $idArray[1]);
$linkArray = explode('href="', $idArray[1]);
$linkArrayy = explode('"', $linkArray[1]);

$link = $linkArrayy[0];
$id = $idArrayy[0];

$timeArray = explode('<div class="date_image">', $src);
$timeArrayy = explode('</div>', $timeArray[1]);
$timeArrayyy = explode(' ', $timeArrayy[0]);
$time = trim($timeArrayyy[1]);

$imgArray = explode('<img class="item_image" src="', $src);
$imgArrayy = explode('"', $imgArray[1]);
$img = $imgArrayy[0];

if ($oldId != $id) {
  
 
  $to = $firstbotsubs;
  $subject = "ILMAINEN - ".$title;
  $txt = '<img src="'.$img.'"><br>Suora linkki ilmoitukseen: '.$link;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From: coucherna@dubs.fi" . "\r\n" . "Reply-To: coucherna@dubs.fi" . "\r\n" . "X-Mailer: PHP/" . phpversion();


  
  
  if ($title != "") {

    $query = "UPDATE couch SET time='".$time."', postid='".$id."' WHERE id=1";
    mysqli_query($conn, $query);
    mail($to,$subject,$txt,$headers);
  }
  
  

} 

}

  }
  
// 1st BOT part 2: 0-50 euro sofa

  $servername = "sdb-h.hosting.stackcp.net";
  $username = "sniper-31383655e0";
  $password = "u2R`vZMfg£JR";
  $dbname = "pesukone";

  // Create connection
  $conn= mysqli_connect("sdb-h.hosting.stackcp.net", "sniper-31383655e0", "u2R`vZMfg£JR", "sniper-31383655e0");
  if(mysqli_connect_error()) {

    die("There was an error connecting to the database");
    
  } else {

    

    $query = "SELECT * FROM pesukone";
    if($result = mysqli_query($conn, $query)) {


    $row = mysqli_fetch_array($result);
    


    $oldId = $row["posted"];
    $oldTime = $row["time"];

  
    
  }
  

$link = 'https://www.tori.fi/uusimaa?q=&cg=3020&w=1&st=s&c=3025&ps=0&pe=4&ca=18&l=0&f=p&md=th';
$srcRaw = file_get_contents($link);

// Check if ads
    if (strpos($src, 'bumped-link') !== false) {
      
      $srcArray = explode('bumped-link', $src);

      $src = $srcArray[1];

      

    } else {


      $src = $srcRaw;
    }

$titleArray = explode('<div tabindex="50" class="li-title">', $src);
$titleArrayy = explode('</div>', $titleArray[1]);
$title = $titleArrayy[0];

if (strpos($title, 'tuol') !== false OR strpos($title, 'nahka') !== false) {

  } else {



  		$idArray = explode('<a id="item_', $src);
$idArrayy = explode('"', $idArray[1]);
$linkArray = explode('href="', $idArray[1]);
$linkArrayy = explode('"', $linkArray[1]);

$link = $linkArrayy[0];
$id = $idArrayy[0];

$imgArray = explode('<img class="item_image" src="', $idArray[1]);
$imgArrayy = explode('"', $imgArray[1]);
$img = $imgArrayy[0];

$timeArray = explode('<div class="date_image">', $idArray[1]);
$timeArrayy = explode('</div>', $timeArray[1]);
$timeArrayyy = explode(' ', $timeArrayy[0]);
$time = trim($timeArrayyy[1]);

$priceArray = explode('<p class="list_price ineuros">', $idArray[1]);
$priceArrayy = explode(' ', $priceArray[1]);
$price = $priceArrayy[0];

if (strlen($price) > 2) {
    
  $price = 'EI HINTAA';

} else {

  $price .= '€'; 
}



if ($oldId == $id) {
  
  

} else {

  
  $to = $firstbotsubs;
  $subject = $price." - ".$title;
  $txt = '<img src="'.$img.'"><br>Suora linkki ilmoitukseen: '.$link;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From: coucherna@dubs.fi" . "\r\n" . "Reply-To: coucherna@dubs.fi" . "\r\n" . "X-Mailer: PHP/" . phpversion();


  
  
  
  if ($title != "") {
    $query = "UPDATE pesukone SET time='".$time."', posted='".$id."' WHERE id=1";
  mysqli_query($conn, $query);
    mail($to,$subject,$txt,$headers);
  }
}


  }


}

}
/*
// MATTO BOT


  $servername = "sdb-h.hosting.stackcp.net";
  $username = "sniper-31383655e0";
  $password = "u2R`vZMfg£JR";
  $dbname = "hyllyt";

  // Create connection
  $conn= mysqli_connect("sdb-h.hosting.stackcp.net", "sniper-31383655e0", "u2R`vZMfg£JR", "sniper-31383655e0");
  if(mysqli_connect_error()) {

    die("There was an error connecting to the database");
    
  } else {

    

    $query = "SELECT * FROM hyllyt";
    if($result = mysqli_query($conn, $query)) {


    $row = mysqli_fetch_array($result);
    


    $oldId = $row["posted"];
    $oldTime = $row["time"];

  
    
  }
  

$link = 'https://www.tori.fi/uusimaa/sisustus_ja_huonekalut/matot_ja_tekstiilit?ca=18&st=g&w=1&cg=3020&c=3023';
$src = file_get_contents($link);

$titleArray = explode('<div tabindex="50" class="li-title">', $src);
$titleArrayy = explode('</div>', $titleArray[1]);
$title = $titleArrayy[0];

$idArray = explode('<a id="item_', $src);
$idArrayy = explode('"', $idArray[1]);
$linkArray = explode('href="', $idArray[1]);
$linkArrayy = explode('"', $linkArray[1]);

$link = $linkArrayy[0];
$id = $idArrayy[0];

$timeArray = explode('<div class="date_image">', $src);
$timeArrayy = explode('</div>', $timeArray[1]);
$timeArrayyy = explode(' ', $timeArrayy[0]);
$time = trim($timeArrayyy[1]);



if ($oldId == $id) {
  
  

} else {

  
  $to = "jukolanveljekset@gmail.com, christopher.leo.nelson@gmail.com, mikael.wallid@gmail.com";
  $subject = "MATTO - ".$title;
  $txt = "Suora linkki ilmoitukseen: ".$link;
  $headers = "From: Matot@dubs.fi";


  
  
  
  
  if ($title != "") {
    $query = "UPDATE hyllyt SET time='".$time."', posted='".$id."' WHERE id=1";
  mysqli_query($conn, $query);
    mail($to,$subject,$txt,$headers);
  }
}


  }
  

// MIKRO BOT

  $servername = "sdb-h.hosting.stackcp.net";
  $username = "sniper-31383655e0";
  $password = "u2R`vZMfg£JR";
  $dbname = "poyta";

  // Create connection
  $conn= mysqli_connect("sdb-h.hosting.stackcp.net", "sniper-31383655e0", "u2R`vZMfg£JR", "sniper-31383655e0");
  if(mysqli_connect_error()) {

    die("There was an error connecting to the database");
    
  } else {

    

    $query = "SELECT * FROM poyta";
    if($result = mysqli_query($conn, $query)) {


    $row = mysqli_fetch_array($result);
    


    $oldId = $row["postid"];
    $oldTime = $row["time"];

  
    
  }
  

$link = 'https://www.tori.fi/uusimaa?q=&cg=3010&w=1&st=g&c=3012&ca=18&l=0&md=th';
$src = file_get_contents($link);

$titleArray = explode('<div tabindex="50" class="li-title">', $src);
$titleArrayy = explode('</div>', $titleArray[1]);
$title = $titleArrayy[0];

$idArray = explode('<a id="item_', $src);
$idArrayy = explode('"', $idArray[1]);
$linkArray = explode('href="', $idArray[1]);
$linkArrayy = explode('"', $linkArray[1]);

$link = $linkArrayy[0];
$id = $idArrayy[0];

$timeArray = explode('<div class="date_image">', $src);
$timeArrayy = explode('</div>', $timeArray[1]);
$timeArrayyy = explode(' ', $timeArrayy[0]);
$time = trim($timeArrayyy[1]);



if ($oldId == $id) {
  
  

} else {

  
  $to = "jukolanveljekset@gmail.com, christopher.leo.nelson@gmail.com, mikael.wallid@gmail.com, jones.zamu@gmail.com";
  $subject = "JAAKAAPPI - ".$title;
  $txt = "Suora linkki ilmoitukseen: ".$link;
  $headers = "From: jaakaappi@dubs.fi";


  
  
  
  
  if ($title != "") {
    $query = "UPDATE poyta SET time='".$time."', postid='".$id."' WHERE id=1";
  mysqli_query($conn, $query);
    mail($to,$subject,$txt,$headers);
  }
}


  }
  



*/

?>