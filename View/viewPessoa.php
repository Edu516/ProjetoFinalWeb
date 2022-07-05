<?php
    require '../Classes/admin.php';
    require '../Classes/aluno.php';
    require '../Classes/comunicado.php';
    require '../Classes/especialidade.php';
    require '../Classes/pessoa.php';
    require '../Classes/prefessor.php';
    require '../Classes/turma.php';
    
    $admin         = new admin();
    $aluno         = new aluno();
    $comunicado    = new comunicado();
    $especialidade = new especialidade();
    $pessoa        = new pessoa();
    $professor     = new professor();
    $turma         = new turma();
    var_dump($turma);
    var_dump($comunicado);
    var_dump($especialidade);
    var_dump($aluno);
    var_dump($professor);
    var_dump($turma);
?>
