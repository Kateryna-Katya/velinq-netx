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
            <h1>Политика возврата средств</h1>
            
            <h2>Условия для оформления возврата</h2>
            <p>
                Вы можете претендовать на полный или частичный возврат средств в
                следующих ситуациях:
            </p>
            <ul>
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание
                    предоставленной консультации или учебного материала существенно отличается от программы,
                    заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При
                    возникновении критических технических проблем на платформе
                    <strong><?= $fullDomain ?></strong>, которые делают доступ к материалам или сессиям невозможным и не были
                    устранены нашей командой в разумные сроки.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Если вы
                    решили отказаться от участия в программе в течение 14 (четырнадцати) календарных
                    дней с момента оплаты, при условии, что вы еще не получили доступ
                    к значительному объему материалов (см. раздел «Исключения»).
                </li>
            </ul>

            <h2>Процедура запроса на возврат</h2>
            <p>
                Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                следующие шаги:
            </p>
            <ol>
                <li>
                    Составьте письмо и отправьте его на наш официальный email:
                    <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма обязательно укажите: «Запрос на возврат средств».
                </li>
                <li>
                    В теле письма предоставьте полную информацию: ваше имя и фамилию,
                    email, который использовался при регистрации, и точное название выбранной программы.
                </li>
                <li>
                    Четко и подробно опишите причину, по которой вы запрашиваете
                    возврат, со ссылкой на один из пунктов наших условий.
                </li>
                <li>
                    После получения письма наша служба поддержки рассмотрит ваш запрос
                    и свяжется с вами для предоставления дальнейших инструкций.
                </li>
            </ol>

            <h2>Сроки и способ возврата</h2>
            <p>
                После одобрения вашего запроса, возврат денежных средств будет
                произведен в течение 7–14 рабочих дней. Средства будут возвращены
                тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                может зависеть от регламента работы вашего банка или платежной системы в Англии или стране вашего пребывания.
            </p>

            <h2>Исключения и ограничения</h2>
            <p>Возврат средств не может быть осуществлен, если:</p>
            <ul>
                <li>
                    Запрос подан по истечении 14 календарных дней с момента оплаты.
                </li>
                <li>
                    Вы уже изучили, просмотрели или скачали более 50% материалов программы, независимо
                    от времени, прошедшего с момента покупки.
                </li>
                <li>
                    Причиной невозможности пройти обучение являются технические
                    проблемы на стороне пользователя (например, проблемы с соединением или софтом).
                </li>
                <li>
                    Были нарушены другие условия Пользовательского соглашения <strong><?= $domainTitle ?></strong> с вашей
                    стороны.
                </li>
            </ul>

            <h2>Изменения в политике</h2>
            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую
                Политику возврата. Актуальная версия всегда доступна на этой
                странице <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>Свяжитесь с нами</h2>
            <p>
                По всем вопросам, связанным с возвратом средств или условиями
                консультаций, пожалуйста, обращайтесь в нашу службу поддержки:
                <br>
                <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
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
