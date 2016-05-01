<h1 class="page-header">Proveedores</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">NIT</th>
            <th style="width:120px;">Razón Social</th>
            <th style="width:120px;">Dirección</th>
            <th style="width:120px;">Teléfono</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nit; ?></td>
            <td><?php echo $r->razonS; ?></td>
            <td><?php echo $r->dir; ?></td>
            <td><?php echo $r->tel; ?></td>
            <td>
                <a href="?c=proveedor&a=Crud&nit=<?php echo $r->nit; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=proveedor&a=Eliminar&nit=<?php echo $r->nit; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
