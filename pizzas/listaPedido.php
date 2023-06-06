<?php
    $consulta  = "SELECT * FROM tb_detalle_pedidos , 
        tb_productos WHERE pk_clave_pro = fk_clave_pro";
    $query = $conn->prepare($consulta);
    $query->execute();
    
    while($registro = $query->fetch())
    {
    ?>
        <p><?=$registro["txt_nombre_pro"]?></p>
        <a href="?accion=borrarProducto&id=<?=$registro["pk_clave_pro"]?>">
            <button class="btn btn-danger">Borrar</button>
        </a>
    <?php
    }
?>