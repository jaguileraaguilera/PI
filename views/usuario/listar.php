<section>
    <h2>Listado de usuarios</h2>

    <table>
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Correo</td>
        </tr>
    <?php foreach($usuarios as $usuario):?>
        <tr>
            <td><?=$usuario->getDni()?></td>
            <td><?=$usuario->getNombre()?></td>
            <td><?=$usuario->getApellidos()?></td>
            <td><?=$usuario->getCorreo()?></td>
        </tr>
    <?php endforeach;?>
    </table>
</section>
