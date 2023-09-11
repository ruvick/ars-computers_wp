<section id="consult" class="consult">
  <div class="_container">
    <h2 class="consult__title title">
      Остались вопросы по нашим товарам или нужна помощь <br>
      в подборе оборудования?
    </h2>
    <p class="consult__subtitle ">Оставьте заявку и наши менеджеры свяжутся с Вами в ближайшее время.</p> 

    <form id="consult_form" class="consult__form form">

      <div class="consult__form-line form__line">
				<input type="hidden" name = "form_name" data-valuem = "Название формы" value = "Заявка на консультацию">
				<input type="hidden" name = "page_lnk" data-valuem = "Адрес страницы" value = "<? echo (is_home())?"http://arscomp.ru/":get_the_permalink()?>">
				<input type="text" name="name" required data-valuem = "Имя*" placeholder="Имя*" class="consult__form-input input">
				<input type="tel" name="tel" required data-valuem = "Телефон*" placeholder="Телефон*" class="consult__form-input input headen_form_blk">
				<input disabled type="text" placeholder="Сообщение отправлено*" class="consult__form-input input SendetMsg form_msg" style="display:none;">
        <button type="submit" class="consult__form-btn btn new_send_btn" data-formmsg="Заявка на консультацию" data-formid="consult_form">Заявка на расчет стоимости</button>
      </div>

    </form>

  </div>
</section>