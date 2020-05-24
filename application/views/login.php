<html>
  <head>
    <meta charset="utf-8">
    <title>Használtautó login</title>
 <link rel="stylesheet" type=text/css href="<?php echo base_url()?>assets/css/myStyle.css">
  </head>
  <body>
 
    <body>
 
      <div class="container">
       <div class="">
         <form action="<?php echo site_url('User/login_user');?>" method="post">
           <h2 ></h2>
           <?php echo $this->session->flashdata('msg');?>
           <label for="username" class="sr-only">Username</label>
           <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
           <label for="password" class="sr-only">Password</label>
           <input type="password" name="password" class="form-control" placeholder="Jelszó" required>
          
           <button type="submit">Belépés</button>
         </form>
       </div>
       </div> 
 
  </body>
</html>