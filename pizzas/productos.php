<?php
    $consulta  = "SELECT * FROM tb_productos";

    if(isset($_GET["categoria"]))
        $consulta .= " WHERE fk_clave_cat = ".$_GET["categoria"];
    $query = $conn->prepare($consulta);
    $query->execute();
    
    while($registro = $query->fetch())
    {
    ?>
        <div class="col-12 col-md-4 text-center">
            <div class="card">
                <img src="imagenes/<?=$registro["txt_foto_pro"]?>" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?=$registro["txt_nombre_pro"]?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="?accion=anadirPedido&id=<?=$registro["pk_clave_pro"]?>" class="btn btn-primary">Añadir a mi pedido</a>
                </div>
            </div>
        </div>
    <?php
    }
?>