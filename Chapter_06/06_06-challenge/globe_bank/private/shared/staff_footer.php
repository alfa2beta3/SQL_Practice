<footer>
  &copy; <?php echo date('Y'); ?> Globe Bank
</footer>

</body>
</html>

<?php
  db_disconnect($db);
  if (!mysqli_connect_errno()){
    echo "database closing fail";
  }
?>
