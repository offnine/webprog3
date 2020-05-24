<html>
  <head>
    <meta charset="utf-8">
    <title>Használtautó belépés</title>
 <link rel="stylesheet" type=text/css href="<?php echo base_url()?>assets/css/myStyle.css"> 
  </head>
  <body>
 
   <table class="header">
            <tr>
                <th>Használtautó</th>
            </tr>
        </table>
      <div class="table-cars" style="text-align:center" >
       
         <form  action="<?php echo site_url('User/login_user');?>" method="post">
           <h2 style="text-align:center" >Belépés</h2>
           <?php echo $this->session->flashdata('msg');?>
           <label style="text-align:center">Email</label>
           <input type="email" name="email" style="align:center" placeholder="Email" required autofocus>
           <br>
           <label for="password" Style="align:center">Jelszó</label>
           <input type="password" name="password" style="align:center" placeholder="Password" required>
           <br>
          
           <button Style="align:center" type="submit">Belépés</button>
         </form>

       </div> 
            
  </body>
</html>