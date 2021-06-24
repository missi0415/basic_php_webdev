<?php

require("../app/functions.php");



include("../app/_parts/_header.php");

?>
<form action = "result.php" method="get">
  <label><input type = "checkbox" name="colors[]" value="orange"> Orange</label>
  <label><input type = "checkbox" name="colors[]" value="pink"> Pink</label>
  <label><input type = "checkbox" name="colors[]" value="gold"> Gold</label>
  <button>Send</button>
</form>



<?php
include("../app/_parts/_footer.php");
