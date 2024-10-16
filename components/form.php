<form
  class="application-form"
  id="myForm"
  aria-labelledby="booking-heading"
  itemscope
  itemtype="http://schema.org/ContactPage"
>
  <div class="input-container">
    <svg class="icon" aria-hidden="true" focusable="false">
      <use href="./img/symbol-defs.svg#icon-user"></use>
    </svg>
    <input
      type="text"
      name="name"
      class="input-field"
      placeholder="Ім'я"
      required
      aria-label="Ім'я"
      itemprop="name"
    />
  </div>

  <div class="input-container">
    <svg class="icon" aria-hidden="true" focusable="false">
      <use href="./img/symbol-defs.svg#icon-email"></use>
    </svg>
    <input
      type="email"
      name="email"
      class="input-field"
      placeholder="Email"
      required
      aria-label="Email"
      itemprop="email"
    />
  </div>

  <div class="input-container">
    <svg class="icon" aria-hidden="true" focusable="false">
      <use href="./img/symbol-defs.svg#icon-phone"></use>
    </svg>
    <input
      type="tel"
      name="phone"
      class="input-field"
      placeholder="Телефон"
      required
      aria-label="Телефон"
      itemprop="telephone"
    />
  </div>

  <div class="input-container">
    <textarea
      name="message"
      class="textarea-field"
      placeholder="Коментар до замовлення"
      aria-label="Коментар до замовлення"
      itemprop="additionalType"
    ></textarea>
  </div>

  <div class="input-container">
    <input
      type="checkbox"
      name="privacy_policy"
      id="privacy_policy"
      class="checkbox"
      required
    />
    <label for="privacy_policy" class="checkbox-label">
      Я ознайомлений з
      <a class="form-link-policy" href="/privacy-policy/">політикою конфіденційності</a>
    </label>
  </div>

  <input type="submit" value="Надіслати" class="submit-button" />
</form>
