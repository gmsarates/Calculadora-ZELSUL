<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['email'];
$imovel = $_POST['imovel'];
$cidade = $_POST['cidade'];


$arquivo = 'step2.html'; 
$html = file_get_contents( $arquivo );
$html = str_replace('%nome%', $nome, $html);
$html = str_replace('id="hidName"', 'id="hidName" value="' . $nome . '"', $html);
$html = str_replace('id="hidEmail"', 'id="hidEmail" value="' . $email . '"', $html);
$html = str_replace('id="hidTelefone"', 'id="hidTelefone" value="' . $telefone . '"', $html);
$html = str_replace('id="hidImovel"', 'id="hidImovel" value="' . $imovel . '"', $html);
$html = str_replace('id="hidCidade"', 'id="hidCidade" value="' . $imovel . '"', $html);



if (strcmp($imovel, "Residencial") == 0) {
  $html = str_replace('id="empresarial" style="display: unset;">', 'id="empresarial" style="display: none;">', $html);
}


echo $html;
// Exibe o HTML, já alterado.
?>