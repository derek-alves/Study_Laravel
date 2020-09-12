<h1>Listagem de Imoveis</h1>

<p><a href="<?= url('/imoveis/novo');?>">Cadastrar novo imóvel</a></p>

<?php

if(!empty($properties)){


  echo "<table>";
  echo "
  <tr>
      <td>Titulo</td>
      <td>Valor de locação</td>
      <td>Valor de compra</td>
  </tr>";
  
  foreach($properties as $property){
      echo "<tr>
                <td>{$property->title}</td>
                <td>R$". number_format($property->rental_price, decimals:2 ,dec_point:',', thousands_sep:'.') ."</td>
                <td>R$". number_format($property->sale_price, decimals:2 ,dec_point:',', thousands_sep:'.') ."</td>
           </tr>";
  }

  echo "</table>";
}