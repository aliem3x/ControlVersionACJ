<?php
    $n=$_POST["num"];
    echo "<h3>Tabla del $n</h3>";
    $i=1;
    echo"<table>";
    do{
            echo"<tr>";
            echo "<td>$n x $i</td><td>".($n*$i)."</td>";
            echo"</tr>";
            $i++;
     }while($i<=10);
    echo"<table>";
    echo '<style type="text/css">
                    td{
                            border-style: none;
                            border: solid black;
                            padding-right: .5em;
                            padding-left: .5em;
                            text-align: center;
                    }
    </style>';
    echo'</br></br><a href="../index.html">Volver al MENÚ</a>';
    
    echo 'Primer Añadido';
    echo 'Segund Añadido';
    
?>