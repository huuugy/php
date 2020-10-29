<?php
function manyArgs($fst,$scnd,$thrd,$frth){
  echo "первый параметр $fst <br>";
  echo "второй параметр $scnd <br>";
  echo "третий параметр $thrd <br>";
  echo "четвертый параметр $frth <br>";
}
$planets=["zemlia","venera","mars","Yupiter"];
manyArgs(...$planets);
echo 2.5+2.5;
