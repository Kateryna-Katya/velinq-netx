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
    <section class="pages">
        <div class="container">
            <h1>Политика использования файлов cookie</h1>

            <p>
                Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашим сайтом, обеспечить его корректную работу и
                анализировать активность пользователей, мы используем файлы cookie и
                схожие технологии. Настоящая политика подробно объясняет, какие
                именно технологии мы применяем, для каких целей, и как вы можете ими
                управлять.
            </p>

            <h2>Что такое файлы cookie?</h2>
            <p>
                Файл cookie — это небольшой фрагмент данных (текстовый файл),
                который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                или смартфоне), когда вы его посещаете. Это позволяет платформе 
                <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                (например, логин, язык, настройки региона Англия и другие параметры) 
                в течение определенного времени, чтобы вам не приходилось вводить их 
                повторно при каждом визите.
            </p>

            <h2>Какие типы файлов cookie мы используем?</h2>
            <p>
                Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                следующим категориям:
            </p>
            <ul>
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                    критически важны для функционирования сайта. Они позволяют вам
                    перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать его базовые возможности. 
                    Без этих cookie предоставление услуг, которые вы запрашиваете, невозможно.
                </li>
                <li>
                    <strong>Аналитические и производительные файлы cookie:</strong>
                    Эти файлы собирают анонимную информацию о том, как посетители
                    используют наш сайт. Они помогают нам понять, какие разделы блога
                    наиболее популярны и как пользователи взаимодействуют с контентом.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                    сайту запоминать ваш выбор для предоставления более
                    персонализированного опыта в рамках ваших карьерных консультаций.
                </li>
                <li>
                    <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                    используются для доставки объявлений, которые наиболее
                    соответствуют вашим профессиональным интересам.
                </li>
            </ul>

            <h2>Зачем мы используем файлы cookie?</h2>
            <p>Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
            <ul>
                <li>Обеспечение стабильной и безопасной работы сайта.</li>
                <li>
                    Анализ пользовательского поведения для оптимизации
                    функциональности и структуры сайта.
                </li>
                <li>
                    Персонализация контента и настроек для удобства пользователей.
                </li>
                <li>
                    Предоставление релевантных маркетинговых и рекламных материалов.
                </li>
            </ul>

            <h2>Ваш выбор и как управлять файлами cookie</h2>
            <p>
                Вы имеете полный контроль над файлами cookie. Вы можете в любой
                момент изменить свои настройки в браузере. Однако, обратите
                внимание: отключение строго необходимых cookie может привести к
                некорректной работе некоторых функций нашего сайта.
            </p>

            <h2>Файлы cookie третьих сторон</h2>
            <p>
                На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы
                сторонних компаний, например, Google Analytics или Lottie.js для визуализаций. 
                Мы рекомендуем вам ознакомиться с политиками конфиденциальности соответствующих 
                сервисов для получения подробной информации.
            </p>

            <h2>Обновления настоящей политики</h2>
            <p>
                Мы можем время от времени обновлять эту Политику, чтобы отразить изменения в технологиях или
                законодательстве. Продолжение использования нашего сайта после внесения изменений будет означать
                ваше согласие с ними.
            </p>

            <h2>Контактная информация</h2>
            <p>
                Если у вас возникли какие-либо вопросы касательно нашей политики
                использования файлов cookie на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+442079460681">+44 20 7946 0681</a>
            </p>
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
