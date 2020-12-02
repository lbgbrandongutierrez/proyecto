<div class="col-md-12">
    <div class="col-md-4">
        <div>
        <center><img src="<?php echo base_url().'assets/ImagenesBDD/productos/picture/'.$producto->imagen?>" alt="<?php echo $producto->imagen?>" style="margin: 10px auto; width: 200px; " class="img-responsive">
        <center><p><strong>Nombre:</strong> <?php echo $producto->nombreProducto;?></p>
            <p><strong>Código:</strong> <?php echo $producto->codigo;?></p>

        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <p><strong>Descripcion:</strong> <?php echo $producto->descripcion;?></p>
            <p><strong>Peso:</strong> <?php echo $producto->peso;?></p>
            <p><strong>Stock Disponible:</strong> <?php echo $producto->stock;?></p>
            <p><strong>Precio Bs:</strong> <?php echo $producto->precioVenta;?></p>

        </div> 
        
    </div>
</div>