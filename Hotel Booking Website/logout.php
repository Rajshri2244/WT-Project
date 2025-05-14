<?php
    SESSION_START();
   
        session_unset();
        session_destroy();
  
        echo "<script>location.href='index.html'</script>";
?>