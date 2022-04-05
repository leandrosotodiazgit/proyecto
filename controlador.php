<?php
$id = (isset($_REQUEST["id"]) && (!empty($_REQUEST["id"]) || $_REQUEST["id"] == '0')) ? $_REQUEST["id"] : 0;
$tipo = (isset($_REQUEST["tipo"]) && (!empty($_REQUEST["tipo"]) || $_REQUEST["tipo"] == '0')) ? $_REQUEST["tipo"] : 0;

if($tipo == 1){
    $link = "pregunta-empresa";
    $clase = "empresas";
}else if($tipo == 2){
    $link = "pregunta-contador";
    $clase = "contador";
}else if($tipo == 3){
    $link = "pregunta-sueldos";
    $clase = "sueldos";
}

require_once "Database.php";
$db = Database::getInstance();
$sql = "SELECT * FROM categorias WHERE sub_categoria_id = {$id} ORDER BY orden ASC";
$stm = $db->query($sql);
$categorias = $stm->fetchAll();
$html = ""; 
foreach ($categorias as $row) {
    $html .= '<div class="card">
    <div class="card-header" id="heading' . $row["id"] . '">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed '.$clase.'" data-toggle="collapse" data-target="#collapse' . $row["id"] . '" aria-expanded="false" aria-controls="collapse' . $row["id"] . '">
                <div style="white-space:normal; text-align: left;">' . $row["topico"] . '</div> <i class="fa"></i>
            </button>
        </h5>
    </div>
    <div id="collapse' . $row["id"] . '" class="collapse" aria-labelledby="heading' . $row["id"] . '" data-parent="#accordion">
        <div class="card-body">
            <ul>';
    $sql2 = "SELECT * FROM preguntas WHERE categoria_id = " . $row["id"] . ' ORDER BY orden ASC';
    $stm2 = $db->query($sql2);
    $preguntas = $stm2->fetchAll();
    foreach ($preguntas as $row2) {

        $html .= '<li><a href="'.$link.'.php?pid=' . $row2["id"] . '">' . $row2["pregunta"] . '</a></li>';
    }
    $html .= '</ul>
        </div>
    </div>
</div>';
}

$json = array();
$json["error"] = "ok";
$json["html"] = $html;
$json = json_encode($json);
echo $json;
die;
