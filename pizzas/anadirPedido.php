<?php
    $id = $_GET["id"];
    $pedido = 1;
    $consulta  = "INSERT INTO tb_detalle_pedidos 
                  (fk_clave_pro,num_pedido_det) VALUES (?,?)";
    $query = $conn->prepare($consulta);
    $query->bindParam(1, $id);
    $query->bindParam(2, $pedido);
    $query->execute();
?>
<p>Se agrego el producto con éxito.</p>
<?php
    include("listaPedido.php");
?>