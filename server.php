<?php

    $username = "";
    $email = "";

    $errors = array();


      $db = mysqli_connect('localhost', 'root', '', 'project');

    //if register is clicked

    if(isset($_POST['register'])) {
        $DateToday = mysqli_real_escape_string($db, $_POST['DateToday']);
        $FullName = mysqli_real_escape_string($db, $_POST['FullName']);
        $Ioc = mysqli_real_escape_string($db, $_POST['Ioc']);
        $Birthdate = mysqli_real_escape_string($db, $_POST['Birthdate']);
        $Sex = mysqli_real_escape_string($db, $_POST['Sex']);
        $CivilStatus = mysqli_real_escape_string($db, $_POST['CivilStatus']);
        $CountryDes = mysqli_real_escape_string($db, $_POST['CountryDestination']);
        $PurposeReq = mysqli_real_escape_string($db, $_POST['PurposeReq']);
        $ConNumber = mysqli_real_escape_string($db, $_POST['ConNumber']);
        $Email = mysqli_real_escape_string($db, $_POST['Email']);

        //ensure
        if(empty($DateToday)){
        array_push($errors,"DateToday is required");
        }
        if(empty($FullName)){
        array_push($errors,"FullName is required");
        }
        if(empty($Ioc)){
        array_push($errors,"Issuance of Certification is required");
        }
        if(empty($Birthdate)) {
        array_push($errors,"Birthday is required");
        }
        if(empty($Sex)) {
        array_push($errors,"Sex is required");
        }
        if(empty($CivilStatus)) {
        array_push($errors,"Civil Status is required");
        }
        if(empty($CountryDes)) {
        array_push($errors,"Country of Destination is required");
        }
        if(empty($PurposeReq)) {
        array_push($errors,"Purpose of Request is required");
        }
        if(empty($ConNumber)) {
        array_push($errors,"Contact Number is required");
        }
        if(empty($Email)) {
        array_push($errors,"Email is required");
        }


        //if no error, save todatabase
        if(count($errors) == 0) {
         $DateToday = $_POST['DateToday'];
         $FullName = $_POST['FullName'];
    $Ioc = $_POST['Ioc'];
    $PassportNumber = $_POST['PassportNumber'];
    $DateIssue = $_POST['DateIssue'];
    $PlaceIssue = $_POST['PlaceIssue'];
    $Birthdate = $_POST['Birthdate'];
    $Sex = $_POST['Sex'];
    $CivilStatus = $_POST['CivilStatus'];
    $SpouseName = $_POST['SpouseName'];
    $SpouseBday = $_POST['SpouseBday'];
	$SpoNumber = $_POST['SpoNumber'];
    $Child1Name = $_POST['Child1Name'];
    $Child1Bday = $_POST['Child1Bday'];
    $Child2Name = $_POST['Child2Name'];
    $Child2Bday = $_POST['Child2Bday'];
    $Child3Name = $_POST['Child3Name'];
    $Child3Bday = $_POST['Child3Bday'];
    $CountryDestination = $_POST['CountryDestination'];
    $PurposeReq = $_POST['PurposeReq'];
    $ConNumber = $_POST['ConNumber'];
    $Email = $_POST['Email'];

       if($db->connect_error){
        die('Connection Failed: ' .$db->connect_error);
           }else{
        $stmt = $db->prepare("insert into passport(DateToday, FullName, Ioc, PassportNumber, DateIssue, PlaceIssue, Birthdate, Sex, CivilStatus, CountryDestination, PurposeReq, ConNumber, Email) values(? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)");
        $stmt->bind_param("sssisssssssis",$DateToday ,$FullName ,$Ioc ,$PassportNumber ,$DateIssue, $PlaceIssue, $Birthdate, $Sex, $CivilStatus, $CountryDestination, $PurposeReq, $ConNumber, $Email);
        $stmt->execute();
        $stmt->close();

        // $stmt2 = $db->prepare("insert into spouse(PassportNumber, Fullname, SpouseName, SpouseBday, Child1Name, Child1Bday, Child2Name, Child2Bday, Child3Name, Child3Bday, SpoNumber) values(? ,? ,? ,?, ?, ?, ?, ?, ?, ?, ?)");
        // $stmt2->bind_param("isssssssssi",$PassportNumber ,$FullName, $SpouseName, $SpouseBday, $Child1Name, $Child1Bday, $Child2Name, $Child2Bday, $Child3Name, $Child3Bday, $SpoNumber);
        // $stmt2->execute();
        // $stmt2->close();
        if(!empty($Child1Name)){
            $stmt2 = $db->prepare("insert into spouse2(PassportNumber, FullName, SpouseName, SpouseBday, SpoNumber, ChildName, ChildBday) values(? ,? ,? ,? ,? ,? ,?)");
            $stmt2->bind_param("issssss", $PassportNumber, $FullName, $SpouseName, $SpouseBday, $SpoNumber, $Child1Name, $Child1Bday);
            $stmt2->execute();
            $stmt2->close();
        }
        if(!empty($Child2Name)){
            $stmt3 = $db->prepare("insert into spouse2(PassportNumber, FullName, SpouseName, SpouseBday, SpoNumber, ChildName, ChildBday) values(? ,? ,? ,? ,? ,? ,?)");
            $stmt3->bind_param("issssss", $PassportNumber, $FullName, $SpouseName, $SpouseBday, $SpoNumber, $Child2Name, $Child2Bday);
            $stmt3->execute();
            $stmt3->close();
        }
        if(!empty($Child3Name)){
            $stmt4 = $db->prepare("insert into spouse2(PassportNumber, FullName, SpouseName, SpouseBday, SpoNumber, ChildName, ChildBday) values(? ,? ,? ,? ,? ,? ,?)");
            $stmt4->bind_param("issssss", $PassportNumber, $FullName, $SpouseName, $SpouseBday, $SpoNumber, $Child3Name, $Child3Bday);
            $stmt4->execute();
            $stmt4->close();
        }
        $db->close();
    }
        header("Location: thanks.php");
        }
    }


?>