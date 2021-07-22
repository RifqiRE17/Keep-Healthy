<?php 

include 'connection.php';

if($_POST){

    // data
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $response = []; 
    
    // cek email di dalam database
    $userQuery = $connection->prepare("SELECT * FROM users where email = ?");
    $userQuery ->EXECUTE(array($email));
    $query = $userQuery->fetch();

    if($userQuery->rowCount() == 0){
        $response['status'] = false;
        $response['message'] = "Email Tidak Terdaftar";
    } else {
        // ambil password di database

        $passwordDB = $query['password'];

        if(strcmp(md5($password),$passwordDB) == 0){
            $response['status'] = true;
            $response['message'] = "login berhasil";
            $response['data'] = [
                'user_id' => $query['id'],
                'name' => $query['name'],
                'email' => $query['email'],
                'alamat' => $query['alamat'],
                'nomor' => $query['nomor'],
            ];
        } else {
            $response['status'] = false;
            $response['message'] = "password anda salah";
        }
    }

    // jadikan json
    $json = json_encode($response, JSON_PRETTY_PRINT);
    // PRINT
    echo $json;
}