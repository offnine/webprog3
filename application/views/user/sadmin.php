<html>
    <head>

        <link rel="stylesheet" type=text/css href="<?php echo base_url()?>assets/css/myStyle.css">
        
    </head>
    <body>
        <table class="table-cars">
           
            <tr><th class="head-add"colspan="2"><a style="color: white" href="<?php echo site_url('User/logout');?>"><?= lang('logout') ?></a></th></tr>
            <tr><th class="head-add"><a style="color: white" href="<?php echo site_url('Cars/admin');?>">admin oldal</a></th></tr>
            <tr><th class="head-add"><a style="color: white" href="<?php echo site_url('Cars/list_users');?>">Felhasználók</a></th></tr>
</table>
        <table class="header">
            <tr>
                <th>Szuper admin oldal</th>
            </tr>
        </table>
       
    </body>

