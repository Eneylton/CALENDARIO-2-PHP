
<?php

require_once("funcao.php");


date_default_timezone_set('America/Sao_Paulo');
$monthTime = getMes();

$mes = date('m ',$monthTime  );

switch ($mes){
 
    case 1: $mes = "JANEIRO"; break;
    case 2: $mes = "FEVEREIRO"; break;
    case 3: $mes = "MARÇO"; break;
    case 4: $mes = "ABRIL"; break;
    case 5: $mes = "MAIO"; break;
    case 6: $mes = "JUNHO"; break;
    case 7: $mes = "JULHO"; break;
    case 8: $mes = "AGOSTO"; break;
    case 9: $mes = "SETEMBRO"; break;
    case 10: $mes = "OUTUBRO"; break;
    case 11: $mes = "NOVEMBRO"; break;
    case 12: $mes = "DEZEMBRO"; break;
     
    }
     

echo '<link href="style.css"  rel="stylesheet" >

<header>

<a href="?month='.anteriorMes($monthTime).'">ANTERIOR</a>

<h1>'.$mes.'</h1>

<a href="?month='.proximoMes($monthTime).'">PROXIMO</a>

</header>';

$startDate = strtotime('last sunday',$monthTime);

echo '<body>';
    echo '<table>';
        echo '<thead>
        <tr>
        <th>DOM</th>
        <th>SEG</th>
        <th>TER</th>
        <th>QUA</th>
        <th>QUI</th>
        <th>SEX</th>
        <th>SAB</th>
        </tr>
        </thead>';

        echo '<tbody>';
    
        for($row =0; $row < 6; $row++){

            echo'<tr>';
             
            for($colum = 0; $colum < 7; $colum++){
                if(date('Y-m',$startDate) !== date('Y-m',$monthTime)){

                    echo'<td class="other-month">';
                }else{
                    echo '<td>';
                }

               
                echo date('j',$startDate);

                $mesAno = date('Y-m',$startDate);
                $dia = date('j',$startDate);
                
                $data = ($mesAno.'-'.$dia);

                echo'</br>';
                echo'</br>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000">08:00  / '.$data.'</label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >09:00 / '.$data.' </label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >10:00 / '.$data.'</label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >11:00 / '.$data.'</label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >12:00 / '.$data.'</label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >13:00 / '.$data.'</label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >14:00 / '.$data.'</label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >15:00 / '.$data.'</label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >16:00 / '.$data.' </label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >17:00 / '.$data.'</label><p>';
                echo '<input type="radio" value="'.$dia.'" ><label style="font-size:15px; color:#ff0000" >18:00 / '.$data.'</label><p>';
                echo'</br>';
                
                echo'</td>';

                $startDate = strtotime("+1 day", $startDate);

            }
            echo'</tr>';
        }

        echo '</tbody>';

  echo '</table>';
echo '</body>';
