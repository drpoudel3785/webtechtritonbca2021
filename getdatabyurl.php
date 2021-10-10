<?php

echo "<a href=getdatabyurl.php?choice=travel>Travel</a>";
echo "<a href=getdatabyurl.php?choice=flim>Flim</a>";
echo "<a href=getdatabyurl.php?choice=restaurant>Restaurnat</a>";


echo "<hr>";
if(isset($_GET['choice']))
{
echo "you choose ";
 echo $_GET['choice'];
}

?>