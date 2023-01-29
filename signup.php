<?php
error_reporting(0);
session_start();

include("connection.php");
include("functions.php");

$success=0;
$error=0;

$myroll="NONE";
// image part start
$status = $statusMsg = ''; 

if (isset($_POST["submitbtn"])) {

    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif','jfif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
       
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
 
// Display status message 


// image part end

    //something was posted
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $roll = $_POST['roll'];
   
    $section = $_POST['section'];
    $skill_1 = $_POST['skill_1'];
    $skill_2 = $_POST['skill_2'];
    $skill_3 = $_POST['skill_3'];
    $skill_4 = $_POST['skill_4'];
    $skill_5 = $_POST['skill_5'];
    $skill_6 = $_POST['skill_6'];
    $skill_7 = $_POST['skill_7'];
    $skill_8 = $_POST['skill_8'];
    $others = $_POST['others'];
    $cgpa = $_POST['cgpa'];
    $linkedin_ID = $_POST['linkedin'];
    $instagram_ID = $_POST['instagramid'];
    $email_ID = $_POST['email'];
    $github_ID = $_POST['github_ID'];
    $contact_number = $_POST['contact_number'];
    $password = $_POST['password_1'];
    $conf_pass=$_POST['cnf-password'];
    $achievements = $_POST['achievements'];

        $arr=array(0,0,0,0,0,0,0,0);
        if($skill_1!=0){$arr[$skill_1]=1;}
        if($skill_2!=0){$arr[$skill_2]=1;}
        if($skill_3!=0){$arr[$skill_3]=1;}
        if($skill_4!=0){$arr[$skill_4]=1;}
        if($skill_5!=0){$arr[$skill_5]=1;}
        if($skill_6!=0){$arr[$skill_6]=1;}
        if($skill_7!=0){$arr[$skill_7]=1;}
        if($skill_8!=0){$arr[$skill_8]=1;}



          //validation
          $exitRows="SELECT * FROM `users` WHERE roll='$roll' ";
          $result=mysqli_query($con,$exitRows);
          $numRows=mysqli_num_rows($result);
          if($numRows>0){
            $errorAlert="same roll no already exists ! please try again !";
               $error=1;
          }
          else if(($pass!=$cpassword) ){
               $errorAlert="Password and confirm passsword do not match";
               $error=1;
          }
                 
        if($error==0){
          $user_id = random_num(20);
          $query = "INSERT INTO `users`(`id`, `user_id`, `first_name`, `last_name`, `roll`, `section`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`, `others`, `cgpa`, `linkedIn_id`, `Instagram_id`, `email_id`, `github_id`, `contact_number`, `password`, `acheivements`) VALUES ('$user_id','$first_name','$first_name','$last_name','$roll','$section','$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]','$arr[5]','$arr[6]','$arr[7]','$others','$cgpa','$linkedin_ID','$instagram_ID','$email_ID','$github_ID','$contact_number','$passowrd_1','$achievements')";
         
          $insert_rec=$con->query("INSERT INTO `users`(`id`, `user_id`, `first_name`, `last_name`, `roll`, `section`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`, `others`, `cgpa`, `linkedIn_id`, `Instagram_id`, `email_id`, `github_id`, `contact_number`, `password`, `acheivements`,`image`, `created`) VALUES ('$user_id','$first_name','$first_name','$last_name','$roll','$section','$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]','$arr[5]','$arr[6]','$arr[7]','$others','$cgpa','$linkedin_ID','$instagram_ID','$email_ID','$github_ID','$contact_number','$passowrd','$achievements','$imgContent',NOW())");
          $myroll=$roll;  
          $update_query="UPDATE images SET roll = '$myroll' WHERE roll='NONE';";
          $updaterol=$con->query($update_query);
          $success=1;


        }
        else{
          $query_t="DELETE FROM `images` WHERE roll='NONE'";
          $delNoneEntry=$con->query($query_t);
        }
 
       
   
}
?>


<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <title>Subscribe to our Newsletter</title>
     <link rel="stylesheet" type="text/css" href="style5.css">

          <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
     <?php  
          if($success==1){
               echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Congrats!</strong> Your signup process successfully completed.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div><a href="login.php" class="logq">Log in</a>
                    ';
          }
          else if($error==1){
               // error to be displayed
          }
     ?>
     <div class="logo"><a href="index.php" class="homeli">Home</a> </div>
     <div class="div1">

     <div class="contenlg">Already have an account? <a href="login.php" style="color:#166fc7;text-decoration:none;" class="logq"> &nbsp;Log in</a></div>
      
        
          <form method="POST" name="formname" id="formname" action="signup.php" enctype="multipart/form-data">

            <!-- page 1 start -->
            <div class="page1">
                <div class="img-sec">
                    <div class="img">           
                             <div class="gallery">
                                     <img style="height:7rem ;width:7rem; border-radius:50%;object-fit: cover;margin:2rem;"class="profile_pic" id="preview_img" src="images/preview_img.jfif" /> 
                             </div> 
                    </div>
                    <div class="container wrap1">                  
                         <input type="file" style="display:none;" name="image" id="myfile" class="inputfile hidden"  accept="image/*" />
                         <label for="myfile" name="upload_img" class="label_brow" style="display:flex;align-item:center;justify-content:center;cursor:pointer;height:60px;width:200px; border-radius:30px;padding:10px;" >
                         <div class="ic" style="font-weight: 500;">
                         Browse Photo
                         </div></label>  
                    </div>
                </div>
            </div>
        
            <!-- page 1 end -->
   
               <fieldset id="f1">
                    <!-- <legend > Fill the Form </legend> -->
                         <div class="name1">

                              <br /> <input placeholder="First Name *" type="text" name="first_name" size="30" required="required"
                                    />&nbsp;
                              <input placeholder="Last Name *" type="text" name="last_name" size="30" required="required"
                                    />
                              <br />
                              
                         </div>
                         <br /> <input placeholder="Email *" type="text" name="email" size="30" required="required"
                                    />
                             
                         <br /> <input placeholder="Enrollment No *" type="text" name="roll" size="15" required="required"
                              />
                              <br />
                         <div class="container1 skill">
                              
                              <ul class="list">
                              <h4>Section:</h4>
                                   <li><input type="radio" name="section" id="sectionA" value="A" /><label
                                             for="sectionA" id="secA">Section A</label></li>
                                   <li><input type="radio" name="section" id="sectionB" value="B"
                                             checked="checked" id="secB"/><label for="sectionB">Section B</label>
                                   </li>
                              </ul>
                         </div>
                         <br /> <input placeholder="Linkedin Id *" type="text" name="linkedin" size="15" required="required"
                              />
                          
                         <br /> <input placeholder="Instagram Id" type="text" name="instagramid" size="15"
                              />
                            
                         <br /> <input placeholder="Github ID" type="text" name="github" size="15"
                              />
                           
                         <br /> <input placeholder="Tagline ( appears in your profile ) " type="text" name="achievements" size="30"
                              />
                              
                              <br /> <input placeholder="Password *" type="password" name="password" size="15" required="required"
                              />
                              
                         <br /> <input placeholder="Confirm Password *" type="password" name="cnf-password" size="15" required="required"
                              />     
              
                         <h4>Skills </h4>
                         <div class="container1 skill">
                              <ul class="list">
                                   <li><input type="checkbox" name="skill_1" id="checkboxOne" value="1" /><label
                                             for="checkboxOne">Web Development</label></li>
                                   <li><input type="checkbox" name="skill_2" id="checkboxTwo" value="2"
                                             checked="checked" /><label for="checkboxTwo">App Development</label>
                                   </li>
                                   <li><input type="checkbox" name="skill_3" id="checkboxThree" value="3"
                                             checked="checked" /><label for="checkboxThree">UI/UX</label></li>
                                   <li><input type="checkbox" name="skill_4" id="checkboxFour" value="4" /><label
                                             for="checkboxFour">Competitive Programming</label></li>
                                   <li><input type="checkbox" name="skill_5" id="checkboxFive" value="5" /><label
                                             for="checkboxFive">Data Science</label></li>
                                   <li><input type="checkbox" name="skill_6" id="checkboxSix" value="6"
                                             checked="checked" /><label for="checkboxSix">AI/ML</label></li>
                                   <li><input type="checkbox" name="skill_7" id="checkboxSeven" value="7" /><label
                                             for="checkboxSeven">Open Source</label></li>
                                   <li><input type="checkbox" name="skill_8" id="checkboxEight" value="8" /><label
                                             for="checkboxEight">Game Development</label></li>
                              </ul>
                         </div>
                         <input type="text" name="others" size="15"
                          placeholder="Other skills ( comma separated )"/>
                         <input type="submit" name="submitbtn" value="Sign Up" >
                    </fieldset>
                    <div class="contenlg">Already have an account? <a href="login.php" style="color:#166fc7;text-decoration:none;" class="logq">&nbsp;Log in</a></div>
          </form>
     </div>


     <script >
        let inpFile=document.querySelector("#myfile");
        const previewImage=document.querySelector("#preview_img");
        inpFile.addEventListener("change",function(){
            const file =this.files[0];
            console.log(file);

            if(file){
                const reader = new FileReader();
                

                reader.addEventListener("load" ,function() {
                    previewImage.setAttribute("src", this.result);//result contains data url
                });
            
                reader.readAsDataURL(file);
            }
            else{
               previewImage.setAttribute("src", "images/preview_img.jfif");
            }
        });
    </script>
</body>

</html>
