<?
  require('db.php');
  $sql = 'SELECT * FROM links WHERE BINARY target = "https://audiocloud.whitehot.ninja/track/2wkp"';
  $res = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($res);
  echo "id: {$row['id']}\n";
  echo mysqli_num_rows($res) . "\n";
?>
