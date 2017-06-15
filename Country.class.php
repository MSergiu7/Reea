<?php
  require_once("connexion.php");
  $mysqli = new Database;
  $mysqli = $mysqli->getConnection();

  class Country {

    public static function getAllCountry()
    {

      $sql="SELECT * FROM countries ORDER BY country_name DESC";
      $result = $mysqli->query($sql);
      if (!$result) {
        die('Invalid query: ' .$mysqli->error);
      }
      else {
        while($row = mysql_fetch_array($partner_ider))
        {
            return echo "<option value=".$row['country_name'].">".$row['country_name']."</option>";
        }
      }
    }

  }
 ?>
