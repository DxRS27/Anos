 <?php
    //RECIBE LA INFO POR TIPO POST.
    if (isset($_POST['año1'])) {

            $Año1 = $_POST['año1'];
            $Año2 = $_POST['año2'];
        
    //operacion para llegar a los meses.
        $total_años = $Año1 - $Año2;
        $total_mese = $total_años * 12;
    // dice el resultado de las operaciones.
        echo $total_años. " anos son el total de anos trascurridos de el ". $Año1 . " y el ". $Año2; 
        echo "<br>";
        echo  $total_mese. " meses son el total de meses que pasaron en esos ". $total_años. " anos";
    //error
    } else {
        echo "no has comletado los parametros";
    }
    ?>