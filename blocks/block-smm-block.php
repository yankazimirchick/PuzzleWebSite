



               
               
           

<div class="row project_page_block"  style="background-color:#fff;">
<div class="col-md-12">
    <div class="row">
        <div class="col-1" style="font-size: 35px;color:<?php block_field( 'color' ); ?>;">
        <?php

$icon=block_value( 'icon' );

switch ($icon) {
    case 'icon-heart':
        echo "<span class='icon-heart'></span>";
        break;
    case 'icon-users':
        echo "<span class='icon-users'></span>";
        break;
    case 'icon-paper-plane':
        echo "<span class='icon-paper-plane'></span>";
        break;
    case 'icon-bubble':
        echo "<span class='icon-bubble'></span>";
    break;
}
?> 
         
    </div>
        <div class="col-11">
             <h3 class="title-block" ><?php block_field( 'title' ); ?></h3>
             <hr>
           
        </div>

        <div class="col-1">
            
        </div>
        <div class="col-11">            
             <?=block_value( 'description' );?>
        </div>
    </div>




</div>
</div>




