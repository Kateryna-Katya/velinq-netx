<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $domainTitle ?> — Карьерный апгрейд и инновации</title>
<link rel="icon" href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='32' height='32' rx='8' fill='%237C3AED'/%3E%3Cpath d='M10 22L14.5 17.5L17.5 20.5L23 14' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M18 14H23V19' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3Ccircle cx='23' cy='14' r='1.5' fill='white'/%3E%3C/svg%3E" type="image/svg+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@700;800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
  <body>
    <load
      src="./partials/header.html"
/>

<main>
    <section class="pages contact-page">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="info-label">Свяжитесь с нами</span>
                <h1>Наши контакты</h1>
                <p class="section-subtitle">
                    Экспертная поддержка по всем вопросам карьерного роста в <?= $domainTitle ?>. 
                    Мы всегда на связи, чтобы помочь вам построить карьеру, которая работает на вас.
                </p>
            </div>

            <div class="contact-grid">
                <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card__icon">
                        <i data-lucide="phone-forwarded"></i>
                    </div>
                    <h3>Телефон</h3>
                    <p>Для звонков из Англии и стран Европы</p>
                    <a href="tel:+442079460681" class="contact-card__value">+44 20 7946 0681</a>
                </div>

                <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i data-lucide="mail-check"></i>
                    </div>
                    <h3>Электронная почта</h3>
                    <p>Пишите нам по любым вопросам</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-card__value">hello@<?= $fullDomain ?></a>
                </div>

                <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i data-lucide="map-pin"></i>
                    </div>
                    <h3>Офис в Лондоне</h3>
                    <p>Главный штаб платформы года</p>
                    <address class="contact-card__value">221B Baker St, London NW1 6XE, UK</address>
                </div>
            </div>

            <div class="contact-footer" data-aos="fade-up">
                <p>Предложение активно только в странах ЕС. Доступ к платформе <strong><?= $domainTitle ?></strong> открыт 24/7.</p>
            </div>
        </div>
    </section>
</main>
    <load src="./partials/footer.html" />
    <div id="cookie-popup" class="cookie-popup">
      <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.
        </p>
        <button id="accept-cookies" class="btn btn--primary btn--sm">Принять</button>
      </div>
    </div>
<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script type="module" src="./main.js"></script>
  </body>
</html>
