<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-transform" />
    <meta http-equiv="Cache-control" content="no-cache" />
    <meta name="google" content="nopagereadaloud" />
    <link rel="icon" type="image/svg+xml" href="./img/favicon.webp" />
    <link rel="stylesheet" href="./css/style.css">

    <title>Товари для спорту та тренувань</title>

    <meta name="description" content="Широкий вибір спортивного обладнання для дому: турніки, бруси, шведські стінки та багато іншого. Замовляйте обладнання для тренувань з доставкою по Україні." />
    <meta name="keywords" content="спортивне обладнання, турніки, бруси, шведські стінки, спорттовари, товари для тренувань, домашні тренування" />
    <meta name="robots" content="index, follow" />
</head>

<body>
    <?php include './components/header.php' ?>
    <main>
        <?php include './components/main.php' ?>
        <?php include './components/about-us.php' ?>
        <?php include './components/goods.php' ?>
        <?php include './components/advantages.php' ?>
        <?php include './components/contacts.php' ?>
    </main>
    <?php include './components/footer.php' ?>

    <?php include './components/nav-modal.php' ?>
    <?php include './components/cookie-notice.php' ?>
    
    <script src="./js/cookieNotice.js" defer></script>
    <script src="./js/modal.js" defer></script>
    <script src="./js/formHandler.js" defer></script>

    <div style="display: none">
      <div itemscope itemtype="http://schema.org/Organization">
        <span itemprop="name">turnikdodomy.com</span>
        Контактна інформація:
        <div
          itemprop="address"
          itemscope
          itemtype="http://schema.org/PostalAddress"
        >
          Адреса:
          <span itemprop="streetAddress">Вул. Спортивна 12</span>
          <span itemprop="postalCode">03000</span>
          <span itemprop="addressLocality">Київ, Україна</span>,
        </div>
        Телефон:<span itemprop="telephone">+380 48 123 45 67</span>,
        E-mail:<span itemprop="email">contact@turnikdodomy.com</span>, Фото:
        <img
          src="./img/map.webp"
          alt="Зображення контактної інформації"
          width="520"
          loading="lazy"
          itemprop="image"
        />
      </div>
    </div>
</body>

</html>
