<h1 class="page-header">
    <?php echo $prod->idProducto != null ? $prod->nomprod : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto">Productos</a></li>
  <li class="active"><?php echo $prod->idProducto != null ? $prod->nomprod : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-producto" action="?c=producto&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idProducto" value="<?php echo $prod->idProducto; ?>" />

    <div class="form-group">
        <label>Nit Proveedor</label>
        <input type="text" name="nit" value="<?php echo $prod->nit; ?>" class="form-control" placeholder="Ingrese NIT Proveedor" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Nombre Producto</label>
        <input type="text" name="nomprod" value="<?php echo $prod->nomprod; ?>" class="form-control" placeholder="Ingrese nombre producto" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Precio Unitario</label>
        <input type="text" name="precioU" value="<?php echo $prod->precioU; ?>" class="form-control" placeholder="Ingrese precio unitario" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Descripción del Producto</label>
        <input type="text" name="descrip" value="<?php echo $prod->descrip; ?>" class="form-control" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
