<?php
$valorAinserir = $_GET['Mensag'];
$API = 'apiMensagens.json';
$data = json_decode(file_get_contents($API),true);

if (isset($data[0]['Mensagem']) && is_array($data[0]['Mensagem'])) {
    $data['Mensagens']= $valorAinserir;
    echo "Dados 2";
}
else{
    $data["Mensagem"][] = $valorAinserir;
    echo "Dados 1";
}
$newData = json_encode($data,true);
file_put_contents($API, $newData);
echo "Dados atualizados com sucesso! " . json_encode($valorAinserir). json_encode($data);
?>