<?php
require_once('../model/Usuario.php');

$usuario = new Usuario();

$todosUsuarios = $usuario->findAll();

$output =
    '
        <table id="user_data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="1%">id</th>
                    <th width="15%">Nome</th>
                </tr>
            </thead>
            <tbody>
                <tr>
        
    ';

if (!empty($todosUsuarios)) {
    foreach ($todosUsuarios as $value) {
        $output .=
            '
                        <td>' . $value['id'] . '</td>
                        <td>' . $value['nome'] . '</td>                
                ';
    }
} else {
    $output .=
        '     
                    <td colspan="4" align="center">Data not found</td>
                </tr>
        ';
}

$output .=
    '
            </tbody>
        </table>
    ';

echo $output;