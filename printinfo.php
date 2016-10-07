<!DOCTYPE html>
<html>
    <head>
        <title>student registration</title>
        <style>
           
                table{
                    border: 2px;
                }
                table td{
                    padding: 2px;
                }
                     table tr:nth-child(odd){
                     background-color: yellow;
                }
            
        </style>
    </head>
    <body>
        <?php
        require_once 'func.php';
        if($_POST){
            $rollno=fix_rollno($_POST['rollno']);
            $name=fix_name($_POST['name']);
            $gender=$_POST['gender'];
            $address=fix_address($_POST['address']);
            $dob=$_POST['dob'];
            $sem=$_POST['sem'];
            $email=fix_email($_POST['email']);
            $dept=$_POST['dept'];
            $batch=$_POST['batch'];
            if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)
                    &&!empty($sem)&&!empty($email)&&!empty($dept)&&!empty($batch)){
                //Inserting datat in the database
                
                 $link=mysqli_connect('localhost','root','root','AIKTC');
                 if(!link){
                     echo "Unable to connect<br>" .mysqli_connect_error();
                 }
                 $query= "Insert into students values ('$rollno','$name','$gender','$address','$dob','$sem','$email','$dept','$batch')";
                 $result=mysqli_query($link,$query);
                 if(!$result){
                     echo "<br>".mysqli_error($link);
                 }
                else {
                echo '<br><h4>Your data is successfully Inserted.</h4>';
                }
                 $query="select * from Students";
                 $result= mysqli_query($link, $query);
                 if($result){
                     echo"<br>".mysql_error($link);
                 }
                 else{
                     ?>
        <table>
            <?php
            while ($row=mysqli_fetch_array($result)){
    
      
    ?>
        <table>
            <tr>
                <th>
                    Parameters
                </th>
                <th>
                    Values
                </th>
            </tr>
            <tr>
                <td>
                    Roll no
                </td>
                <td>
                    <?php echo fix_rollno($rollno);?>
                </td>
            </tr>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <?php echo fix_name($name);?>
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    <?php echo fix_gender($gender);?>
                </td>
            </tr>
            <tr>
                <td>
                    Address
                </td>
                <td>
                    <?php echo fix_address($address);?>
                </td>
            </tr>
            <tr>
                <td>
                    Date of birth
                </td>
                <td>
                    <?php echo $dob;?>
                </td>
            </tr>
            
            <tr>
                <td>
                    Semester
                </td>
                <td>
                    <?php echo $sem;?>
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <?php echo fix_email($email);?>
                </td>
            </tr>
            <tr>
                <td>
                    Department
                </td>
                <td>
                    <?php echo $dept;?>
                </td>
            </tr>
            <?php } ?>
        </table>
            <?php
           
            }
                    }
                    else{
        echo "<span>Something is Missing!</span>";
        header('Refresh:2,url=exp1.html');
    }
}
else{
    header('Refresh:0,url=exp1.html');
}
?>