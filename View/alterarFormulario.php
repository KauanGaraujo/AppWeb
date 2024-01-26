<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");

extract($_REQUEST, EXTR_OVERWRITE);

$idContato = isset($idContato) ? $idContato : "";

if ($idContato) {

    $contatos = buscarContatoID($conexao, $idContato);
?>

    <div class="container">
        <form class="row g-3" method="Post" action="../Controller/alterarContato.php">
        <input type="hidden" value="<?php echo ($contatos["idContato"]); ?>"  name="idContato">   
        
        <div class="col-md-8">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["nomeContato"]); ?>" name="nomeContato" id="inputNome">
            </div>

            <div class="col-md-4">
                <label for="inputFone" class="form-label">Fone</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["foneContato"]); ?>" name="foneContato" id="inputFone">
            </div>

            <div class="col-12">
                <!-- Button trigger modal -->
                
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </form>
    </div>
    
<?php
} else {
    echo ("Dados não encontrados");
};
include_once("footer.php");
?>