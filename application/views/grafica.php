<div class="site-section">
        <div class="container">
            <br>
            <section >
              <div class="row">
                  <div class="col-md-12 section-bgg">
                      <div class="box">
                          <div class="box-header with-border">
                              <center><h3 class="box-title">GRÁFICO ESTADÍSTICO ANUAL</h3>

                              <div class="box-tools pull-right">
                                  <select name="anio" id="anioo" class="form-control">
                                    <?php foreach($anios as $anio):?>
                                      <option value="<?php echo $anio->anio;?>"><?php echo $anio->anio; ?></option>
                                    <?php endforeach;?> 
                                  </select>
                              </div>
                              <br>
                          </div>
                          <br>
                          <div class="box-body">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div id="grafico" style="margin: 0 auto"></div>
                                   </div>
                              </div>
                              <!-- /.row -->
                          </div>
                          <br>
                      </div>
                      <!-- /.box -->
                  </div>
                  <!-- /.col -->
              </div>
            </section>
<!-- /.row -->


            
        </div>

        
  </div>
</div>
       
