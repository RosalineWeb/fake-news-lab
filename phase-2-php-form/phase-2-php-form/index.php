<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fake News Checker - PHP Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>📰 Fake News Checker</h1>
    <p>Paste a news article below and we will check it for you.</p>
    
    <form method="POST">
      <textarea name="news_text" placeholder="Paste your news article here..." required></textarea>
      <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $text = htmlspecialchars($_POST["news_text"]);
      echo "<div class='result'>";
      echo "<h3>You submitted:</h3>";
      echo "<p>$text</p>";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
