<div class="bg-primary"><!-- class="footer" -->

  <div class="container">
  <br>
    <div class="text-white">
      <center><p class="bg-primary text-white"><a>Sistema de Ventas de Productos de limpieza</a></p>
    </div>
      
    </div>
    <div class="row">
            <center><p> &copy;<script>document.write(new Date().getFullYear());</script><a href="https://colorlib.com" target="_blank" ></a></p>
            <br>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>


<!-- DataTables -->
<script src="<?php echo base_url();?>assets/template/datatables.net/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/dataTables.bootstrap.js"></script>
<!-- AutoComplet en el imput y el otro para select -->
<script src="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/template/select2/dist/js/select2.full.min.js"></script>
<!-- para imprimir de ventanas modales  -->
<script src="<?php echo base_url();?>assets/template/jquery-print/jquery.print.js"></script>
<!-- para mensajes de alert de error -->
<script src="<?php echo base_url();?>assets/template/alertify/lib/alertify.min.js"></script>
<!-- para la tabla de reportess -->
<script src="<?php echo base_url();?>assets/template/datatables-export/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.print.min.js"></script>

                <!-- para EL CATALOGO -->
			<!-- <script src="<?php echo base_url();?>assets/template/hidee/js/jquery.magnific-popup.min.js"></script>	 -->
			<!-- <script src="<?php echo base_url();?>assets/template/hidee/js/main.js"></script>	 -->


<!-- para el narvar celeste -->
<!-- <script src="<?php echo base_url();?>assets/template/panelCel/js/jquery-3.3.1.min.js"></script> -->
<script src="<?php echo base_url();?>assets/template/panelCel/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url();?>assets/template/panelCel/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/template/panelCel/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url();?>assets/template/panelCel/js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url();?>assets/template/panelCel/js/aos.js"></script>
<script src="<?php echo base_url();?>assets/template/panelCel/js/jquery.sticky.js"></script>
<script src="<?php echo base_url();?>assets/template/panelCel/js/main.js"></script>


<!-- para dashorts -->
<script src="<?php echo base_url();?>assets/template/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/template/highcharts/highcharts-3d.js"></script>
<script src="<?php echo base_url();?>assets/template/highcharts/cylinder.js"></script>
<script src="<?php echo base_url();?>assets/template/highcharts/exporting.js"></script>
<script src="<?php echo base_url();?>assets/template/highcharts/export-data.js"></script>




<script>
////// son para tablas 
$(document).ready(function () {
    var base_url="<?php echo base_url();?>";
    // graficar();
    // para busqueda de las tablas
    $('#tabel').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "No se encontraron resultados en su busqueda",
                "searchPlaceholder": "Buscar registros",
                "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                "infoEmpty": "No existen registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            }
        });
    $('.sidebar-menu').tree()

    $('#tabell').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ TOP",
                "zeroRecords": "No se encontraron resultados en su busqueda",
                "searchPlaceholder": "Buscar registros",
                "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                "infoEmpty": "No existen registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            }
        });
    $('.sidebar-menu').tree()

    // para busqueda de las tablas
    $('#example1').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });
    $('.sidebar-menu').tree();

    $(".btn-vistaproducto").on("click", function(){
        var id = $(this).val();
        $.ajax({
            url: base_url + "producto/vista/" + id,
            type:"POST",
            success:function(resp){
                $(".modal-title").text("Informacion del Producto");
                $("#modal-vistaproducto .modal-body").html(resp);
                //alert(resp);
            }

        });

    });

    /// modal para mostrar el detalle venta
    $(document).on("click",".btn-view-venta", function(){
       valorID = $(this).val(); 
       $.ajax({
           url: base_url + "venta/view",
           type:"POST",
           dataType:"html",
           data:{idVenta: valorID},
           success:function(data){
               $("#modal-default .modal-body").html(data);
           }
       });
    });
    $(document).on("click",".btn-view-venta", function(){
       valorID = $(this).val(); 
       $.ajax({
           url: base_url + "venta/recibo",
           type:"POST",
           dataType:"html",
           data:{idVenta: valorID},
           success:function(data){
               $("#modal-defaultt .modal-body").html(data);
           }
       });
    });

    // pra imprimir de ventanas modales 
    $(document).on("click",".btn-print",function(){
        $("#modal-default .modal-body").print();
    })
    
    // pra imprimir de ventanas modal de recibo 
    $(document).on("click",".btn-printt",function(){
        $("#modal-defaultt .modal-body").print();
    })


    // modal para mostrar a los clientes para venta
    $(document).on("click",".btn-check",function(){
        cliente= $(this).val();
        infocliente=cliente.split("*");
        $("#idCliente").val(infocliente[0]);
        $("#cliente").val(infocliente[1]);
        $("#nit").val(infocliente[2]);
        $("#modal-defaul").modal("hide");

    });







    
//para busqueda de productos en el imput
$('#inputProductoVenta').keypress(function(event){
        codigo_barra = $(this).val();

        if (event.which == '10' || event.which == '13') {

            $.ajax({
                url: base_url+"venta/getProductoBB",
                type: "POST",
                dataType:"json",
                data:{ codigo_barra: codigo_barra},
                success:function(data){
                    var cant=1;
                    if (data =="0") {
                        alertify.error("El codigo no esta registrado o no cuenta con stock disponible");
                    	
                    }else{
                    	if (verificar(data.idProducto)) {
		            		alertify.error("El producto ya fue agregado");
                            
                            //html += "<td><input type='text' name='cantidad[]' value='"+ cant+1 +"' class='cantidad'></td>";
                            
		        		}else{

                            html = "<tr>";
                            html += "<td><input type='hidden' name='idProducto[]' value='"+data.idProducto+"'><img src='"+base_url+"assets/ImagenesBDD/productos/picture/"+data.imagen+"' width='50' height='50'></td>";
                            html += "<td>"+data.nombreProducto+"</td>";
                            html += "<td>"+data.stock+"</td>";
                            html += "<td><input type='hidden' name='precio[]' value='"+data.precioVenta+"'>"+data.precioVenta+"</td>";
                            html += "<td><input type='text' name='cantidad[]' required value='"+cant+"' class='cantidad'></td>";
                            html += "<td><input type='hidden' name='importe[]' value='"+data.precioVenta+"'><p>"+data.precioVenta+"</p></td>";
                            html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fa fa-remove'></span></button></td>";
                            html +="</tr>";

	                        $("#tbventas tbody").append(html);
	                        $(".btn-guardar").removeAttr("disabled");
	                        sumar();
	                        if (Number($("input[name=total]").val()) != 0) {
	                            $("#tbventas tbody tr.message").remove();
	                        }
                        }
                    }
                }
            });
            $('#inputProductoVenta').val(null);
            event.preventDefault();
        }
    });
 
    // para busqueda con autocomplementacion de productos
    $("#inputProductoVenta").autocomplete({
        source:function(request, response){
            $.ajax({
                url: base_url+"venta/getproductos",
                type: "POST",
                dataType:"json",
                data:{ valor: request.term},
                success:function(data){
                    response(data);
                }
            });
        },
        minLength:2,
        select:function(event, ui){
            if (verificar(ui.item.idProducto)) {
                alertify.error("El producto ya fue agregado");
		    }else{ 

                html = "<tr>";
                html += "<td><input type='hidden' name='idProducto[]' value='"+ui.item.idProducto+"'><img src='"+base_url+"assets/ImagenesBDD/productos/picture/"+ui.item.imagen+"' width='50' height='50'></td>";
                html += "<td>"+ui.item.nombreProducto+"</td>";
                html += "<td>"+ui.item.stock+"</td>";
                html += "<td><input type='hidden' name='precio[]' value='"+ui.item.precioVenta+"'>"+ui.item.precioVenta+"</td>";
                html += "<td><input type='text' name='cantidad[]' required value='1' class='cantidad'></td>";
                html += "<td><input type='hidden' name='importe[]' value='"+ui.item.precioVenta+"'><p>"+ui.item.precioVenta+"</p></td>";
                html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fa fa-remove'></span></button></td>";
                html +="</tr>";
                $("#tbventas tbody").append(html);
                $(".btn-guardar").removeAttr("disabled");
                sumar();
                this.value = "";
                return false;
            }
                    
        },
    });

    // para eliminar product
    $(document).on("click",".btn-remove-producto",function(){
        $(this).closest("tr").remove();
        sumar();
    });

    //para la cantidad
    $(document).on("keyup","#tbventas input.cantidad", function(){
        cantidad = $(this).val();
        precio =Number($(this).closest("tr").find("td:eq(3)").text());
        stock = Number($(this).closest("tr").find("td:eq(2)").text());

        //importe = cantidad * precio;
            if (cantidad!='') {
                if (cantidad == 0) {
                    alertify.error("El valor ingresada no puede ser menor a la unidad");
                    $(this).val('1');
                    importe = precio;
                }else if(cantidad > stock){
                    alertify.error("El valor ingresada no puede sobrepasar el stock");
                    $(this).val(stock);
                    importe = precio * stock;
                }else{
                    importe = Number(cantidad) * precio;
                }
            }else{
                alertify.error("Ingrese un valor mayor a 1");
                //$(this).val('1');
                importe = 0;
            }
        $(this).closest("tr").find("td:eq(5)").children("p").text(importe.toFixed(2));
        $(this).closest("tr").find("td:eq(5)").children("input").val(importe.toFixed(2));
        sumar();
        
    });
    $("#btn-guardar-venta").on("click", function(){
        // cantidadproductos = Number($("#tbventas tbody tr").length);
        cantidadproductos = $("input[name=idCliente]").val()
        // cantidadproductos =$("#idCliente");
        if (cantidadproductos != "") {

            alertify.success("La venta fue registrada correctamente");
            // alertify.success("Error de registro....");

        }else{
            // alertify.success("La venta fue registrada correctamente");
            alertify.error("Error de registro....");
        }

    });

    // para mensaje de eliminacion
    $(document).on("click",".btn-btnEliminar",function(){
        alertify.error("Registro Eliminado....");
    });

    
    // para Cambiar contrasena
    $(document).on("click","#camb-password",function(){

    $("input[name=idusuario]").val($(this).val());

    });
    $(document).on("submit","#form-camb-password",function(e){
    e.preventDefault();
    info = $(this).serialize();
    actPassword = $("input[name=actPassword]").val();
    newpassword = $("input[name=nuevPassword]").val();
    repeatpassword = $("input[name=repPassword]").val();
    //actPassword = $($this->session->userdata("password"));
    if (newpassword != repeatpassword) {
        error = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Nueva Contraseña ingresada no coindicen</div>';
        $(".error").html(error);
    }else{
        $.ajax({
            url: base_url + "usuarios/cambPassword",
            type: "POST",
            data: info,
            success: function(resp){
                //window.location.href = base_url + resp;
                if (resp == "0") {
                    $('#modal-password').modal('hide');
                    alertify.success("Contraseña Modificado Correctamente.");
                } else {
                    alertify.error("La contraseña actual no es válida");
                } 
            }
        });
    }
    })


    $("#btn-restablecerPassword").on("click", function(){
       
       alertify.success("Correctamente.");
 
    });


		




    //botones de imprimir reperte
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: "LISTADO DE VENTAS",
                exportOptions: {
                    columns: [ 0,1,2, 3]
                },
            },
            {
                extend: 'pdfHtml5',
                title: "LISTADO DE VENTAS",
                exportOptions: {
                    columns: [ 0,1,2,3]
                },
            }
        ],

        language: {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });




})




function sumar(){
    total=0;
    $("#tbventas tbody tr").each(function(){
        total = total + Number($(this).find("td:eq(5)").text());
    });
    
    $("input[name=total]").val(total.toFixed(2));
}

// para validar si existe o no existe productos en detalle venta    
function verificar(idProductooo){
    var existe = 0;
    $('input[name^="idProducto"]').each(function() {
        if ($(this).val() == idProductooo) {
            existe = 1;
        }
    });

    return existe;
}



//para la cantidad
/*function existee(idProductooo){
    var existe = 0;
    $('input[name^="cantidad"]').each(function() {
        if ($(this).val() == idProductooo) {
            
            $('input[name^="cantidad"]'+existe+)
            existe = existe+1;
        }
    });

    return existe;
}

function existe(){
    $(document).on("#tbventas input.cantidad", function(){
        cantidad = $(this).val();
        
            if (cantidad!='') {
                cantidad=cantidad+1
                importe = Number(cantidad) * precio;
            }else{
                importe = 0;
            }
            $(this).closest("tr").find("td:eq(5)").children("p").text(importe.toFixed(2));
            $(this).closest("tr").find("td:eq(5)").children("input").val(importe.toFixed(2));
            sumar();

    });
}*/


  



</script>


<script>
   
  
    var base_url="<?php echo base_url();?>";

    var anio = (new Date).getFullYear();
    datagraficoMeses(base_url,anio);
    $("#anioo").on("change",function(){
        yearselect = $(this).val();
        datagraficoMeses(base_url,yearselect);
    });
   
    function datagraficoMeses(base_url,anio){
       namesMonth= ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Set","Oct","Nov","Dic"];
       $.ajax({
           url: base_url + "Welcome/getData",
           type:"POST",
           data:{anio:anio},
           dataType:"json",
           success:function(data){
               var meses = new Array();
               var montos = new Array();
               $.each(data,function(key, value){
                   meses.push(namesMonth[value.mes - 1]);
                   valor = Number(value.monto);
                   montos.push(valor);
               });
               graficarMeses(meses,montos,anio);
           }
       });
    }

function graficarMeses(meses,montos,anio){
    Highcharts.chart('grafico', {
    chart: {
        type: 'cylinder',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 0
        }
    },
    title: {
        text: 'Monto acumulado por las ventas de los meses ' + anio
    },
    xAxis: {
            categories: meses,
            crosshair: false
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Monto Acumulado (Bs)'
            }
        },
    tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">Monto: </td>' +
                '<td style="padding:0"><b>{point.y:.2f} Bs</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },

    plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            },
            series:{
                depth: 100,
                colorByPoint: true,
                dataLabels:{
                    enabled:true,
                    formatter:function(){
                        return Highcharts.numberFormat(this.y,2)
                    }

                }
            }
        },

    series: [{
        data: montos,
        // name: 'Monto Bs',
        showInLegend: false
    }]
});
}




    // function graficarMeses(meses,montos,anio){
    // Highcharts.chart('grafico', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         text: 'Monto acumulado por las ventas de los meses'
    //     },
    //     subtitle: {
    //         text: 'Año:' + anio
    //     },
    //     xAxis: {
    //         categories: meses,
    //         crosshair: true
    //     },
    //     yAxis: {
    //         min: 0,
    //         title: {
    //             text: 'Monto Acumulado (soles)'
    //         }
    //     },
    //     tooltip: {
    //         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">Monto: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} soles</b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     plotOptions: {
    //         column: {
    //             pointPadding: 0.2,
    //             borderWidth: 0
    //         },
    //         series:{
    //             dataLabels:{
    //                 enabled:true,
    //                 formatter:function(){
    //                     return Highcharts.numberFormat(this.y,2)
    //                 }

    //             }
    //         }
    //     },
    //     series: [{
    //         name: 'Meses',
    //         data: montos

    //     }]
    // });
    // }






</script>



</body>
</html>
