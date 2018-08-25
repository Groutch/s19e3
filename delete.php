<?php
    session_start ();
    if(!isset($_SESSION['username'])){
        header('Location: index.php');
        exit();
    }
    include 'connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $req = ORM::for_table('hiking')->find_one($id);
        if($req->delete()){  
            header('Location: index.php');
            exit();
        }else{ ?>
            <script>
                alert("Il y a eu un soucis");
            </script>
        <?php }
    }

