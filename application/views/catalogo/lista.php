<div class="site-section">
    <div class="container">

            
            <section>
                <h1 class="text-center">
                CATALOGO DE PRODUCTOS
                </h1>
                <br>
            </section>
    
          <section>
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="col-md-12">
              <center><form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                  <div class="form-group">
                      <div class="col-md-3">
                          <label for="">Ver productos por categoria :</label>
                      </div>
                      <div class="col-md-5">
                          <!-- <input type="text" class="form-control" name="stockMin" pattern="[0-9 ]+" value="</?php echo !empty($stockMin) ? $stockMin:" ";?>"> -->
                          <select name="categori" class="form-control" id="categori" >
                              <?php foreach($categoria as $categori):?>
                              <!-- <option>..........</option> -->
                                 <!-- <option  value="</?php echo $categori->idCategoria;?>"></?php echo $categori->nombreCategoria; ?></option> -->
                              
                                  <option  value="<?php echo $categori->idCategoria;?>"><?php echo $categori->nombreCategoria; ?></option>
                              <?php endforeach;?> 
                          </select>

                      </div>

                      <div class="col-md-4">
                          <input type="submit" name="buscar" value="Buscar" class="btn btn-round btn btn-primary">
                          <a href="<?=base_url()?>index.php/catalogo/listaCatalogo" class="btn btn-round btn btn-warning"><i class="fa fa-refresh "></i></a>
                      </div>
                  </div>

                  
              </form>
              <br>
                  <section>
                      <p><h4><strong>PRODUCTOS</strong><br><?php echo !empty($categorii) ? $categorii:" ";?><h4></p>
                      <br>
                  </section>
                  <br>
            </div>
                
            </div>
            <div class="col-md-1"></div>
            </section>
            <br> <br>



          <section>
            <!-- <div class="col-md-12"> -->
              <?php foreach ($producto->result() as $data) { ?>
                <div class="col-sm-6 col-md-3">
                  <div class="portfolio-wrap  section-bggg">
                    <br>
                    <center><div class="blog-entry">
                      <a href="<?=base_url()?>assets/ImagenesBDD/productos/picture/<?=$data->imagen?>" class="img-link">
                        <img src="<?=base_url()?>assets/ImagenesBDD/productos/picture/<?=$data->imagen?>" class="img-fluid" class="img-pop-up" alt="Image" height="200" width="200">
                        <div class="single-gallery-image" ></div>
                      </a>
                    </div>
                    <div class="caption">
                      <center><button type="button" class="btn btn-round btn btn-info btn-vistaproducto" data-toggle="modal" data-target="#modal-vistaproducto" value="<?php echo $data->idProducto;?>"><span class="fa fa-eye"></span></button>
                      <h4 class="text-center"><?php echo $data->nombreProducto?></h4>
                      <h5 class="text-center">Precio:<?php echo $data->precioVenta ?> Bs<h5>
                      <br>
                    </div>
                  </div>
                </div>
                <?php                                
                    }
                ?>
            <div>
          </section>
          
  </div>
</div>


        
       
<div class="modal fade" id="modal-vistaproducto">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <center><h4><b>INFORMACION DEL PRODUCTO</b></h4></center>
                                
        
        <div class="modal-body">
            
                                
        </div>
    </div>
    </div>
  </div>
</div>


  </div>
</div>

    