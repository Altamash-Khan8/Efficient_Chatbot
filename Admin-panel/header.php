<style>
    nav a{
        color:white;
       

    }
    
    nav a:hover{
        color:white;
        text-decoration:none;
    }
    .Top-Right{
        float:right;
    }
</style>
    <nav class="ac">
        <a href="index.php" >Home</a>&nbsp;&nbsp;
        <a href="about.php">About</a>&nbsp;&nbsp;
        <a href="blog.php" >Blog</a>&nbsp;&nbsp;
        <?php
        session_start();
            if(isset($_SESSION['u']) && !empty($_SESSION['u']))
            {
        ?>
        <div class="Top-Right">
         <a  href="logout.php" >LOGOUT</a>&nbsp;&nbsp;
         </div>
         <?php 
        
            }
            else{            
         ?>

      <div class="Top-Right">
      <a href="signup.php">Registration</a>&nbsp;&nbsp;
        <a href="signin.php" >Login</a>&nbsp;&nbsp;
        <?php } ?>
     </div>
    </nav>