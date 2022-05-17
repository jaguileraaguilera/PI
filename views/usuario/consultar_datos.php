<section>
    <h2>Mis datos</h2>

    <table>
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Correo</td>
            <td>Contraseña</td>
        </tr>
        <tr>
            <td><?=$usuario->getDni()?></td>
            <td><?=$usuario->getNombre()?></td>
            <td><?=$usuario->getApellidos()?></td>
            <td><?=$usuario->getCorreo()?></td>
            <td><?=$usuario->getPassword()?></td>
        </tr>
    </table>
</section>