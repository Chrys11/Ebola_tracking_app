<?php
require_once('conn.php');

if(isset($_POST['report_suspect'])){
    $fullname = $_POST['fullname'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $status = $_POST['status'];
    $symptoms = $_POST['symptoms'];
    $location = $_POST['location'];
    $array_date = [$year,$month,$day];
    $dob = implode("-",$array_date);
    $statement = mysqli_prepare($conn,"INSERT INTO suspected_case (full_name,date_of_birth,current_status,signs_and_symptoms,district_country) VALUES (?,?,?,?,?)");
    mysqli_stmt_bind_param($statement,'sssss',$fullname,$dob,$status,$symptoms,$location);
    mysqli_execute($statement);
    mysqli_commit($conn);
    header('location:view_suspected.php');
}
elseif(isset($_POST['add_patient'])){
    $fullname = $_POST['fullname'];
    $day_ob = $_POST['day_ob'];
    $month_ob = $_POST['month_ob'];
    $year_ob = $_POST['year_ob'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nationality'];
    $day_oa = $_POST['day_oa'];
    $month_oa = $_POST['month_oa'];
    $year_oa = $_POST['year_oa'];
    $status = $_POST['status'];
    $location = $_POST['location'];
    $kin = $_POST['kin'];
    #Array  used to join date of birth in the format (yyyy-mm-dd)
    $array_date_ob = [$year_ob,$month_ob,$day_ob];
    $array_date_oa = [$year_oa,$month_oa,$day_oa];
    $dob = implode("-",$array_date_ob);
    $doa = implode("-",$array_date_oa);

    #An example of a query that is used to insert data into the database
    $statement = mysqli_prepare($conn,"INSERT INTO patient_data (full_name,D_O_B,date_of_admission,current_state,phone_no,district,nationality,next_of_kin) VALUES (?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement,'ssssssss',$fullname,$dob,$doa,$status,$phone,$location,$nationality,$kin);
    mysqli_execute($statement);
    mysqli_commit($conn);
    header('location:view_patients.php');
}


?>