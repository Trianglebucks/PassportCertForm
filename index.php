<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Passport Certification Form</title>
</head>
<body>
    <div class="header">
        <h2>Passport Certification Form</h2>
    </div>

    <form method="post" action="index.php">
        <!-- display validation error here -->
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Date Today</label>
            <input type="date" name="DateToday" id="DateToday">
        </div>
        <div class="input-group">
            <label>Full name</label>
            <input type="text" name="FullName" id="FullName">
        </div>
        <div class="input-group">
            <label>Issuance of Certification</label>
            <select name="Ioc" id="Ioc">
                            <option selected hidden value=""></option>
                            <option value="CTCP">Certified True Copy of Passport</option>
                            <option value="PI">Passport Issuance</option> <option value="CTNP">Certificate of No Passport</option>
                        </select>
        </div>
        <div class="input-group">
            <label>Passport Number</label>
            <input type="text" name="PassportNumber" id="PassportNumber" maxlength="9">
        </div>
        <div class="input-group">
            <label>Date of Issue</label>
            <input type="date" name="DateIssue" id="DateIssue">
        </div>
        <div class="input-group">
            <label>Place of Issue</label>
            <input type="text" name="PlaceIssue" id="PlaceIssue">
        </div>
        <div class="input-group">
            <label>Birthdate</label>
            <input type="date" name="Birthdate" id="Birthdate">
        </div>
        <div class="input-group">
            <label>Sex</label>
            <select name="Sex" id="Sex">
                            <option selected hidden value=""></option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
        </div>
        <div class="input-group">
            <label>Civil Status</label>
                        <select name="CivilStatus" id="CivilStatus">
                            <option selected hidden value=""></option>
                            <option value="Sin">Single</option>
                            <option value="Mar">Married</option>
                        </select>
        </div>
        <!-- Spouse -->
        <div class="input-group">
            <label>Spouse Name</label>
            <input type="text" name="SpouseName" id="SpouseName">
        </div>
        <div class="input-group">
            <label>Spouse Bday</label>
            <input type="date" name="SpouseBday" id="SpouseBday">
        </div>
        <div class="input-group">
            <label>Spouse Contact Number</label>
            <input type="text" name="SpoNumber" id="SpoNumber">
        </div>
        <!-- Children -->
        <div class="input-group">
            <label>Child Name</label>
            <input type="text" name="Child1Name" id="Child1Name">
        </div>
        <div class="input-group">
            <label>Child Bday</label>
            <input type="date" name="Child1Bday" id="Child1Bday">
        </div>
        <div class="input-group">
            <label>Child Name</label>
            <input type="text" name="Child2Name" id="Child2Name">
        </div>
        <div class="input-group">
            <label>Child Bday</label>
            <input type="date" name="Child2Bday" id="Child2Bday">
        </div>
        <div class="input-group">
            <label>Child Name</label>
            <input type="text" name="Child3Name" id="Child3Name">
        </div>
        <div class="input-group">
            <label>Child Bday</label>
            <input type="date" name="Child3Bday" id="Child3Bday">
        </div>
        <!-- Purpose -->
        <div class="input-group">
            <label>Country of Destination</label>
            <input type="text" name="CountryDestination" id="CountryDestination">
        </div>
        <div class="input-group">
            <label>Purpose of Request</label>
            <input type="text" name="PurposeReq" id="PurposeReq">
        </div>
        <div class="input-group">
            <label>Contact Number</label>
            <input type="text" name="ConNumber" id="ConNumber" maxlength="11">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="Email" id="Email">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Submit</button>
        </div>
    </form>
     <script src="main.js"></script>
</body>
</html>