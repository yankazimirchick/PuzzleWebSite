<div class="row wrapper_block_webdev">

    <div class="col-md-3">
        <div class="row">
            <div class="col-2">
                <span style="color:#4cc0c2;font-size:32px;display:inline-block;" class="icon-info webdevicon"></span>
            </div>
            <div class="col-10 webdev_title">
                О кейсе
            </div>
        </div>

        <div class="row">
            <div class="col-12 pt-3">
                <?=block_value( 'about' ); ?>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="row">
            <div class="col-2">
            <span style="color:#f54785;font-size:32px;display:inline-block;" class="icon-short_text webdevicon"></span>
            </div>
            <div class="col-10 webdev_title">
            Задачи
            </div>
        </div>

        <div class="row">
            <div class="col-12 pt-3">
            <?php block_field( 'tasks' ); ?>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="row">
            <div class="col-2">
            <span style="color:#ffc107;font-size:32px;display:inline-block;"
            class="icon-featured_play_list webdevicon"></span>
            </div>
            <div class="col-10 webdev_title">
            ОСОБЕННОСТИ
            </div>
        </div>

        <div class="row">
            <div class="col-12 pt-3">
            <?php block_field( 'feature' ); ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-2">
            <span style="color:#f54785;font-size:32px;display:inline-block;" class="icon-hammer webdevicon"></span>
            </div>
            <div class="col-10 webdev_title">
            Дополнительно
            </div>
        </div>

        <div class="row">
            <div class="col-12 pt-3">
            <?php block_field( 'addition' ); ?>
            </div>
        </div>
    </div>
    
    

</div>
<div class="row wrapper_block_webdev">
    <div class="col-md-12 text-center">
        <a class="webdev_link" href="  <?php block_field( 'link' ); ?>">Ссылка на сайт</a>


    </div>
</div>