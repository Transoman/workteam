</div><!-- /.content -->

<footer class="footer">
  <div class="container">
    <p class="copy">&copy; <?php echo date('Y');?>. Все права защищены</p>
    <?php if (get_field('policy', 'option')): ?>
      <a href="<?php echo esc_url(get_field('policy', 'option')); ?>" target="_blank">Политика конфиденциальности</a>
    <?php endif; ?>
  </div>
</footer><!-- #colophon -->

</div><!-- /.wrapper -->

<div id="callback" class="modal">
  <button type="button" class="modal__close callback_close"></button>

  <h3 class="modal__title">Обратный звонок</h3>

  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="5" title="Обратный звонок"]'); ?>
    <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
  </div>
</div>

<div id="consultation" class="modal">
  <button type="button" class="modal__close consultation_close"></button>

  <h3 class="modal__title">Заказать консультацию</h3>

  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="77" title="Заказать консультацию"]'); ?>
    <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
  </div>
</div>

<div id="personal" class="modal">
  <button type="button" class="modal__close personal_close"></button>

  <h3 class="modal__title">Заявка на персонал</h3>

  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="78" title="Заявка на персонал"]'); ?>
    <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
  </div>
</div>

<div id="order-vacancy" class="modal">
  <button type="button" class="modal__close order-vacancy_close"></button>

  <h3 class="modal__title">Вакансии</h3>

  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="79" title="Вакансии"]'); ?>
    <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
  </div>
</div>

<div id="questionnaire" class="modal">
  <button type="button" class="modal__close questionnaire_close"></button>

  <h3 class="modal__title">Заполнить анкету</h3>

  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="91" title="Анкета"]'); ?>
    <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
