<?php
  
  $idade = array(43,39,10,1,73);
  $smidade_maior = 0;
  $smidade_menor = 0;

  for($i = 0; $i <=count($idade)-1; $i++)
    {
      if($idade[$i]> 18)
      {
        $smidade_maior = $smidade_maior + 1;
    }
    else
    {
      $smidade_menor  = $smidade_menor + 1;
    }
  }
   
   echo "Maior de Idade são:".$smidade_maior;
   echo"<br>";
   echo "Menor de Idade são:".$smidade_menor;

?>