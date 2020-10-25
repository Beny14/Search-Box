<?php
  include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <form action="search.php" method="post">
      <input type="text" name="search" placeholder="Search">
      <button type="submit" name="submit-search">Search</button>
    </form>

    <h1>Front page</h1>
    <h2>All articles:</h2>
    <div class="article-container">
      <?php
        $sql = "SELECT * FROM article";
        $result = mysqli_query($connect, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='article-box'>
              <h3>" . $row['a_title'] . "</h3>
              <p>" . $row['a_text'] . "</p>
              <p>" . $row['a_date'] . "</p>
              <p>" . $row['a_author'] . "</p>
            </div>";
          }
        }
      ?>
    </div>

  </body>
</html>
