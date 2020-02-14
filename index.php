<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Conta</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Conta.php';
            
            $pessoaUm = new Conta();
            $pessoaDois = new Conta();
            
            $pessoaUm->abrirConta("CC");
            $pessoaUm->setnumConta(1111);
            $pessoaUm->setDono("Jubileu");
            
            $pessoaDois->abrirConta("CP");
            $pessoaDois->setnumConta(2222);
            $pessoaDois->setDono("Creusa");
            
            $pessoaUm->depositar(300);
            $pessoaDois->depositar(500);
            
           $pessoaDois->sacar(300);
           
           $pessoaUm->pagarMensal();
           $pessoaDois->pagarMensal();
           
           $pessoaUm->sacar(338);
           $pessoaDois->sacar(330);
           
           $pessoaUm->fecharConta();
           $pessoaDois->fecharConta();
            
            print_r($pessoaUm);
            print_r($pessoaDois);
        ?>
        </pre>
    </body>
</html>