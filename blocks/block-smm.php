


<? if( (block_value( 'picture-1' ))!==''){
    ?>
<img style="width:100%;" src="<?php block_field( 'picture-1' ); ?>"  />
<?}?>

<? if( (block_value( 'picture-2' ))!==''){
    ?>
<img style="width:100%;" src="<?php block_field( 'picture-2' ); ?>"  />
<?}?>

<? if( (block_value( 'link' ))!==''){
    ?>
<div class="row wrapper_block_webdev mt-4">
    <div class="col-md-12 ">
        <a class="webdev_link" href="  <?php block_field( 'link' ); ?>">Ссылка на сайт</a>


    </div>
</div>
<?}?>



