<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package puzzle-agency
 */

?>

<footer>
		<div class="footer-wrapper">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-md-5 footer-inner">

                        <i class="demo-icon icon-location">&#xe802;</i> г. Минск, ул.
                        Каховская 28а, офис 121
                    </div>
                    <div class="col-md-3 footer-inner">
                        <i class="demo-icon icon-phone">&#xe801;</i>
                        <a style="color: #8ca8a8;" href="tel:+3752984545990">+375 (29) 845-45-99</a></div>
                    <div class="col-md-4 footer-inner">
                        <div class="">
                            <a href="http://instagram.com/puzzle_minsk" style="color: #f54785;" target="_blank"
                                class="inline-module__link">
                                <i class="demo-icon icon-instagram">&#xf16d;</i>
                            </a>
                            <a href="https://vk.com/puzzleagencyby" style="color: #ffc107;" target="_blank"
                                class="inline-module__link">
                                <i class="demo-icon icon-telegram">&#xf2c6;</i>
                            </a>
                            <a href="https://vk.com/puzzleagencyby" style="color: #4cc0c2;" target="_blank"
                                class="inline-module__link">
                                <i class="demo-icon icon-vk">&#xe800;</i>
                            </a>
                            <a href="mailto:hello@puzzle-agency.by" style="color: #8ca8a8;"><i
                                    class="fa fa-envelope"></i> hello@puzzle-agency.by</a>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
    <div class="modal fade" id="form-modal-window" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Оставьте заявку и мы вам перезвоним</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="footer-form__body">
                    <div class="footer-form__field">
                        <div class="field">
                            <div><label for="footer-form__number" class="form-label h0">
                                Номер телефона:<span class="label__hint_red">*</span>
                            </label></div>
                            <input type="text" placeholder="+375(xx)xxx-xx-xx" id="footer-form__number" class="form__input">
                        </div>  
                    </div>
                </div>
                <div class="footer-form__body">
                    <div class="footer-form__field">
                        <div class="field mt-3">
                            <div><label for="footer-form__number" class="form-label h0">
                                Ваше Имя:<span class="label__hint_red">*</span>
                            </label></div>
                            <input type="text" placeholder="" class="form__input">
                        </div>  
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="cyan-button">Отправить</button>
            </div>
          </div>
        </div>
      </div>
      
    <div class="modal fade" id="bloger-form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Оставьте заявку и мы вам перезвоним</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="footer-form__body">
                    <div class="footer-form__field">
                        <div class="field">
                            <div><label for="footer-form__number" class="form-label h0">
                                Номер телефона:<span class="label__hint_red">*</span>
                            </label></div>
                            <input type="text" placeholder="+375(xx)xxx-xx-xx" class="form__input">
                        </div>  
                    </div>
                </div>
                <div class="footer-form__body">
                    <div class="footer-form__field">
                        <div class="field mt-3">
                            <div><label for="footer-form__number" class="form-label h0">
                                Instagram*:<span class="label__hint_red">*</span>
                            </label></div>
                            <input type="text" placeholder="" class="form__input">
                        </div>  
                    </div>
                </div>
                <div class="footer-form__body">
                    <div class="footer-form__field">
                        <div class="field mt-3">
                            <div><label for="footer-form__number" class="form-label h0">
                                Ваше Имя:<span class="label__hint_red">*</span>
                            </label></div>
                            <input type="text" placeholder="" class="form__input">
                        </div>  
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="cyan-button">Отправить</button>
            </div>
          </div>
        </div>
      </div>
</footer>
        


		</main>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
