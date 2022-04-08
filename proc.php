<?php
    //variaveis globais
    
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $senha = $_POST ['senha'];
    $confirma = $_POST ['confirma'];
    

    echo "<p><b> Nome: ". $nome . "</b></p>";
    echo "<p><b>Sexo: ". $sexo . "</b></p>";
    echo "<p><b>Senha " . $email . "</b></p>";
    echo "<p><b>Senha " . $senha . "</b></p>";
    
    if( strlen($nome)==0)
    {
        header("location:form.php?erro=nome");
    }

    if ($sexo != "F" || $sexo != "M") {
        header("location:form.php?erro=sexo");
    }

    if ($email == "") {
        header("location:form.php?erro=email");
    }
    
    if(strlen($senha)<=6)
    {
        header("location:form.php?erro=senha");
    }

    if($confirma != $senha)
    {
        header("location:form.php?erro=confirma");
    }

    $_NomeArquivo = $_FILES ['arq']['name'];
    $_Pasta = "arq/".$_NomeArquivo ; // arq/.pdf
    $_tmp = $_FILES ['arq']['tmp_name'];

    move_uploaded_file ($_tmp, $_Pasta)
    ?>