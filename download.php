<?php
  header('Content-Type: application/download');
  header('Content-Disposition: attachment; filename="one.mp3"');
  header("Content-Length: " . filesize("one.mp3"));
  $fp = fopen("one.mp3", "r");
  fpassthru($fp);
  fclose($fp);
?>