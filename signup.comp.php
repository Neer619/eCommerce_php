
<!--  Sign up form  -->
<form action="includes/signup.inc.php" method="POST">

 

  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="first" value="<?php echo isset($_GET['first'])? $_GET['first'] : ''; ?>">
  </div>

  <div class="form-group">
    <label for="fname">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="last" value="<?php echo isset($_GET['last'])? $_GET['last'] : ''; ?>">
  </div>

  <div class="form-group">
    <label for="fname">E-mail</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo isset($_GET['email'])? $_GET['email'] : ''; ?>">
  </div>

  <div class="form-group">
    <label for="fname">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname" value="<?php echo isset($_GET['uname'])? $_GET['uname'] : ''; ?>">
  </div>

  <div class="form-group">
    <label for="fname">Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pwd">
  </div>

  <div class="form-group">
    <label for="fname">Confirm Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="repwd">
  </div>

  <button type="submit" class="btn myButton">Create Account</button>


      


        <?php
        
        if(!isset($_GET['status']))
        {

        }
        else{
            $urlInfo=$_GET['status'];

            switch($urlInfo)
            {
                case 'fieldempty':
                    echo " <p class='error'>Field(s) can\'t be left empty </p> ";
                break;
                case 'wrongname':
                    echo " <p class='error'>Wrong name </p> ";
                break;
                case 'emailerror':
                    echo " <p class='error'>Enter correct email </p> ";
                break;
                case 'passworderror':
                    echo " <p class='error'>Password must match </p> ";
                break;
                case 'sqlerror':
                    echo " <p class='error'>sql error </p> ";
                break;
                case 'success':
                    echo " <p class='success'>Account created successfully </p> ";
                break;




            }

        }

        ?>



     </form>