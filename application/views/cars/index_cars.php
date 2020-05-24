<!DOCTYPE html>
<html>
    <head>
        <title><?php $title;?></title>
        <link rel="stylesheet" type=text/css href="<?php echo base_url()?>assets/css/myStyle.css">
        
    </head>
    <body>
        
        <table class="table-cars">
            <tr><th class="head-title"colspan="2"><?=lang('cars_list')?></th></tr>
            <tr><th class="head-title"colspan="2"><a href="<?php echo site_url('User/logout');?>"><?= lang('logout') ?></a></th></tr>
            <tr><th class="head-add"colspan="2"><a style="color: white" href="<?= site_url('cars/add')?>">Hírdetés feladása</a></th></tr>
          
            <tr>
                <?php if($items != null && !empty($items)):?>
                <?php foreach ($items as $item): ?>
                    <td><b><?=$item['title']?></b>
                    <br><br><b><?=lang('desc')?> </b><?=$item['text']?>
                        <br><b><?=lang('company')?> </b><?=$item['company']?>
                        <br><b><?=lang('engine')?></b><?=$item['car_engine']?>
                        <br><b><?=lang('img')?></b>
                        <br><br><a style="color: black" href="<?=site_url('cars/'.$item['slug'])?>"><?=lang('details')?></a>
                        <br><br><?php if($this->session->userdata("admin") == "1") {?> button onclick="clickDelete()"><a style="color: black" href="<?=site_url('cars/delete/'.$item['slug'])?>"><?=lang('delete')?></a></button> <?php } ?>
                        <br><br>
                    </td>
                    <td><img class="car" src="<?php echo base_url();?>assets/image/<?=$item['title']?>.jpg"></td>
            </tr>
                <?php endforeach;?>
                <?php else:?>
            <p><?=lang('cars_not_found')?></p>
            <?php endif;?> </tr>
        </table>
        <script>
            function clickDelete() {
                alert("<?=lang('deleted')?>");
            }
        </script>
        <table class="header">
            <tr>
                <th><?=lang('carpro')?></th>
            </tr>
        </table>
    </body>
</html>
