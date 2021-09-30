<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/Usuario.inc.php';
include_once 'app/Entrada.inc.php';
include_once 'app/Comentario.inc.php';

include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/RepositorioEntrada.inc.php';
include_once 'app/RepositorioComentario.inc.php';

Conexion::abrir_conexion();

for ($usuarios = 0; $usuarios < 100; $usuarios++) {
    $nombre = sa(10);
    $apellido = sa(10);
    $cedula = sa(10);
    $email = sa(5) . '@' . sa(3);
    $password = password_hash('123456', PASSWORD_DEFAULT);

    $usuario = new Usuario('', $nombre, $apellido, $cedula, $email, $password, '', '');
    RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(), $usuario);
}

for ($entradas = 0; $entradas < 100; $entradas++) {
    $titulo = sa(10);
    $url = $titulo;
    $texto = lorem();
    $autor = rand(1, 100);

    $entrada = new Entrada('', $autor, $url, $titulo, $texto, '', '');
    RepositorioEntrada::insertar_entrada(Conexion::obtener_conexion(), $entrada);
}

for ($comentarios = 0; $comentarios < 100; $comentarios++) {
    $titulo = sa(10);
    $texto = lorem();
    $autor = rand(1, 100);
    $entrada = rand(1, 100);

    $comentario = new Comentario('', $autor, $entrada, $titulo, $texto, '');
    RepositorioComentario::insertar_comentario(Conexion::obtener_conexion(), $comentario);
}

function sa($longitud) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numero_caracteres = strlen($caracteres);
    $string_aleatorio = '';

    for ($i = 0; $i < $longitud; $i++) {
        $string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];
    }
    return $string_aleatorio;
}

function lorem() {
    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pharetra sodales eros, non convallis tortor consequat quis. Quisque gravida semper efficitur. Integer vitae metus tortor. Maecenas vel tincidunt urna. Integer condimentum, odio sit amet condimentum pellentesque, lacus magna pretium enim, quis cursus mauris purus id nulla. Curabitur imperdiet, quam et ornare bibendum, orci turpis cursus lectus, interdum sagittis velit augue ut elit. Sed ut vestibulum elit. Duis vitae massa eu ante malesuada imperdiet. Donec eu tempus odio, vel commodo arcu.

Nunc placerat purus consequat tortor volutpat, id lacinia dui posuere. Duis gravida justo ut est hendrerit, nec lacinia mauris porttitor. Morbi sodales nisl ac eros gravida, feugiat laoreet ante blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis est tristique, pharetra sapien vel, consequat urna. Mauris venenatis vulputate consectetur. Vestibulum consequat vehicula ex in ornare. In ut posuere orci, eu ultrices leo. Ut velit ipsum, posuere tristique facilisis scelerisque, mattis et mauris. Maecenas velit nulla, suscipit non hendrerit nec, finibus sit amet sapien. Sed tincidunt, ligula non placerat convallis, tortor orci sagittis justo, eget eleifend massa nulla non ligula. Mauris venenatis erat at arcu interdum, quis sodales urna condimentum. Phasellus hendrerit dui vel faucibus vestibulum.

Vivamus pharetra magna diam, et mollis mauris ultrices et. Duis feugiat aliquam ligula id faucibus. Suspendisse non justo ultricies, faucibus turpis ac, iaculis massa. Pellentesque massa tellus, tincidunt nec leo in, consectetur tempus est. Duis pharetra velit sed mi placerat, ac pretium nulla sagittis. Sed pretium nisi sed nisi varius, a pharetra arcu aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum non convallis velit, vel imperdiet urna. Suspendisse rutrum ultrices urna at suscipit. Fusce porttitor ligula sit amet augue porta blandit. Phasellus scelerisque, dolor gravida mollis tristique, felis dolor varius libero, quis auctor risus ipsum non massa. Etiam mollis consectetur magna, in bibendum lectus pellentesque vitae. Vestibulum molestie tincidunt aliquam. Vestibulum et semper risus. Nullam accumsan turpis libero, non pellentesque nibh vehicula id. Donec non dui id sapien pulvinar suscipit id non dolor.

Donec venenatis lectus nec justo gravida, et pharetra enim euismod. Quisque suscipit dui mollis iaculis volutpat. Donec id tellus rhoncus, convallis ipsum in, auctor lorem. Etiam ac neque sit amet lorem tincidunt commodo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sem sapien, laoreet in placerat sit amet, aliquam ut leo. Vivamus sodales dolor nec vulputate sodales. Quisque pharetra rhoncus orci, in pellentesque arcu fringilla nec. Nulla pellentesque sagittis ante eu ullamcorper. Maecenas turpis urna, cursus nec viverra ut, lobortis at nisl. Donec eget egestas libero. Ut maximus volutpat arcu, vel accumsan eros hendrerit et. Phasellus id nunc pretium, dignissim nisl vitae, ornare nisi.

Etiam elit justo, aliquam eget enim quis, tincidunt finibus orci. Nam at posuere ante. Proin feugiat sollicitudin metus, ac tincidunt diam volutpat quis. Etiam ligula mi, efficitur id dolor et, vulputate ultrices nunc. Aliquam ut nunc molestie, consectetur dolor ac, sagittis turpis. Nulla facilisi. Nullam purus quam, vestibulum in ex eget, aliquet semper ligula.';

    return $lorem;
}
