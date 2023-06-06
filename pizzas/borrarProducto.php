<?php
    $id = $_GET["id"];
    $consulta  = "DELETE FROM tb_detalle_pedidos WHERE fk_clave_pro = ? ";
    $query = $conn->prepare($consulta);
    $query->bindParam(1, $id);
    $query->execute();
?>
<p>Se elimino el producto</p>
