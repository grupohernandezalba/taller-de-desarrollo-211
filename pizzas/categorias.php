<?php
    $consulta  = "SELECT * FROM tb_categorias";
    $query = $conn->prepare($consulta);
    $query->execute();
    
    while($registro = $query->fetch())
    {
    ?>
        <li class="nav-item">
          <a class="nav-link" href="?categoria=<?=$registro["pk_clave_cat"]?>"><?=$registro["txt_nombre_cat"]?></a>
        </li>
    <?php
    }
?>