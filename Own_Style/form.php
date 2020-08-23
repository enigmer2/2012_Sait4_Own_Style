<?php
   echo "<form enctype=\"multipart/form-data\" action=\"upload.php\" method=\"post\">
   <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"50000000\" />
   Выбери файл:
   <input name=\"userfile[]\" type=\"file\" />
   <input name=\"userfile[]\" type=\"file\" />
   <input name=\"userfile[]\" type=\"file\" />
   <input type=\"submit\" value=\"Загрузить\" />
</form>";
?>

<form enctype="multipart/form-data" action="upload.php" method="post">
   <input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
   <input name="pol" type="text" />
   <input name="userfile[]" type="file" />

   <input type="submit" value="Загрузить" />
</form>