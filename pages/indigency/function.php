<?php

//add_modal.php
if(isset($_POST['btn_add'])){
    $ddl_resident = $_POST['ddl_resident'];
    $txt_name = $_POST['ddl_resident'];
    $txt_age = $_POST['txt_age'];
    $txt_address = $_POST['txt_address'];
    $purpose = $_POST['txt_purpose'];
    $txt_ornum = 0;
    $txt_amount = 0;
    $date = date('Y-m-d H:i:s');

    if(isset($_SESSION['role'])){
        $action = 'Added indigency with name of '.$txt_name;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) 
        values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($_SESSION['role'] == "administrator")
    {
        $query = mysqli_query($con,"INSERT INTO tblindigency (residentid,name,age,address,purpose,orNo,samount,dateRecorded,recordedBy,status) 
            values ('$ddl_resident', '$txt_name', '$txt_age', '$txt_address', '$purpose', '$txt_ornum', '$txt_amount', '$date', '".$_SESSION['role']."','Approved')") or die('Error: ' . mysqli_error($con));

        $last = "SELECT MAX(id) AS last_id FROM tblindigency";
        $result = mysqli_query($con, $last);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $last_id = $row['last_id'];

        $fullname_update = mysqli_query($con,"UPDATE tblindigency i JOIN tblresident rt ON i.residentid=rt.id SET i.name=CONCAT(rt.lname, ', ' ,rt.fname, ' ' ,rt.mname) WHERE i.status='Approved' AND i.id='".$last_id."' AND i.residentid='".$ddl_resident."' ") or die('Error: ' . mysqli_error($con));
    
    }
    else
    {
        $query = mysqli_query($con,"INSERT INTO tblindigency (residentid,name,age,address,purpose,orNo,samount,dateRecorded,recordedBy,status) 
            values ('$ddl_resident', '$txt_name', '$txt_age', '$txt_address', '$purpose', '$txt_ornum', '$txt_amount', '$date', '".$_SESSION['username']."','New')") or die('Error: ' . mysqli_error($con));

        $last = "SELECT MAX(id) AS last_id FROM tblindigency";
        $result = mysqli_query($con, $last);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $last_id = $row['last_id'];

        $fullname_update = mysqli_query($con,"UPDATE tblindigency i JOIN tblresident rt ON i.residentid=rt.id SET i.name=CONCAT(rt.lname, ', ' ,rt.fname, ' ' ,rt.mname) WHERE i.status='New' AND i.id='".$last_id."' AND i.residentid='".$ddl_resident."' ") or die('Error: ' . mysqli_error($con));
    
    }
    if($query == true && $fullname_update == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   
}
//req_modal.php
if(isset($_POST['btn_req'])){
    $txt_name = $_POST['txt_name'];
    $txt_address = $_POST['txt_address'];
    $purpose = $_POST['txt_purpose'];
    $date = date('Y-m-d H:i:s');

    $reqquery = mysqli_query($con,"INSERT INTO tblindigency (residentid,name,address,purpose,orNo,samount,dateRecorded,recordedBy,status) 
        values ('".$_SESSION['userid']."', '$txt_name', '$txt_address', '$purpose', '$txt_ornum', '$txt_amount', '$date', '".$_SESSION['username']."','New')") or die('Error: ' . mysqli_error($con));

    if($reqquery == true)
    {
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   
}

if(isset($_GET["action"]))
{
    include "../connection.php";
    $id = $_GET["id"];
    $action = $_GET["action"];

    //if ($action = 'approve'){
    if ($action == 'approve'){
        $sql = "UPDATE tblindigency SET Status = 'Approved' WHERE id = '$id'";
        
        if(mysqli_query($con, $sql))
        {
            header("location: indigency.php");
        }

    //} elseif ($action = 'disapproved'){
    } elseif ($action == 'disapproved'){
        $sql = "UPDATE tblindigency SET Status = 'Disapproved' WHERE id = '$id'";

        if(mysqli_query($con, $sql))
        {
          header("location: indigency.php");
        }
    }
   
}

if(isset($_POST['btn_approve']))
{

    $txt_id = $_POST['hidden_id'];
    $txt_ornum = $_POST['txt_ornum'];
    $txt_amount = $_POST['txt_amount'];

    $approve_query = mysqli_query($con,"UPDATE tblindigency set orNo = '".$txt_ornum."', samount = '".$txt_amount."',status = 'Approved' WHERE id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

   if($approve_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_disapprove']))
{
    $txt_id = $_POST['hidden_id'];
   
   $disapprove_query = mysqli_query($con,"UPDATE tblindigency set status = 'Disapproved' WHERE id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($disapprove_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
   }
}

if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_name = $_POST['txt_edit_name'];
    $txt_edit_add = $_POST['txt_edit_add'];
    $ddl_edit_tob = $_POST['ddl_edit_tob'];
    $txt_edit_ornum = $_POST['txt_edit_ornum'];
    $txt_edit_amount = $_POST['txt_edit_amount'];

    $update_query = mysqli_query($con,"UPDATE tblindigency set name = '".$txt_edit_name."', address = '".$txt_edit_add."', purpose= '".$ddl_edit_tob."', orNo = '".$txt_edit_ornum."', samount = '".$txt_edit_amount."'  where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Update indigency with name of '.$txt_edit_name;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tblindigency WHERE id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>