
<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../../config/database.php';
    include_once '../../class/buku.php';
    
    $database = new Database();
    $db = $database->getConnect();

    $items = new Buku($db);

    $items->id = $_POST["id"];
    $items->judul = $_POST["judul"];
    $items->categ_id = $_POST["categ_id"];
    $items->writer_id = $_POST["writer_id"];
    
    echo json_encode($items);

    if($items->updateBuku()){
        echo json_encode(true);
    } else{
        echo json_encode(false);
    }
?>