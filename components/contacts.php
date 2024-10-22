<section
  id="booking"
  class="section-indentation"
  aria-labelledby="booking-heading"
>
  <div class="container">
    <h2 id="booking-heading" class="visually-hidden">Форма контакту</h2>
    <div class="contact-wrap">
      <div class="contact-item">
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Адреса">
            <use href="./img/symbol-defs.svg#icon-city"></use>
          </svg>
          <span class="contact-text">
            Вул. Спортивна 12, Київ, 03000, Україна
          </span>
        </div>
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Телефон">
            <use href="./img/symbol-defs.svg#icon-phone"></use>
          </svg>
          <span class="contact-text">+380 48 123 45 67</span>
        </div>
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Email">
            <use href="./img/symbol-defs.svg#icon-email"></use>
          </svg>
          <a class="contact-link" href="mailto:support@turnikdodomy.com" aria-label="Написати на email">support@turnikdodomy.com</a>
        </div>
        <img class="contact-img" src="./img/map.webp" alt="карта" width="200">
      </div>

      <?php include './components/form.php' ?>

      <div class="success-message" id="successMessage" style="display: none;">
          Дані успішно надіслані!
      </div>
    </div>
  </div>
</section>
