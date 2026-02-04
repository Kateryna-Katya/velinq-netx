document.addEventListener('DOMContentLoaded', () => {
    // Initialize Lucide icons
    lucide.createIcons();

    // Header scroll effect
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.08)';
        } else {
            header.style.padding = '20px 0';
            header.style.boxShadow = 'none';
        }
    });

    // Smooth scroll for anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});
// Подключаем Lottie и AOS через CDN динамически для этапа
const scripts = [
    'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js',
    'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js',
    'https://unpkg.com/aos@next/dist/aos.js'
];

function loadScripts(urls, callback) {
    let count = 0;
    urls.forEach(url => {
        const s = document.createElement('script');
        s.src = url;
        s.onload = () => {
            count++;
            if(count === urls.length) callback();
        };
        document.head.appendChild(s);
    });
}

loadScripts(scripts, () => {
    // Инициализация AOS
    AOS.init({
        duration: 800,
        once: true
    });

    // Инициализация Lottie
    lottie.loadAnimation({
        container: document.getElementById('lottie-hero'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'https://assets9.lottiefiles.com/packages/lf20_m6cuL6.json' // Абстрактная бизнес-анимация
    });
});
// Tilt effect for cards
const cards = document.querySelectorAll('.about__card');
cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;
        
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0)`;
    });
});
// Counters Animation
const stats = document.querySelectorAll('.stat-item__number');
const observerOptions = { threshold: 0.5 };

const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const target = entry.target;
            const endValue = parseInt(target.getAttribute('data-target'));
            let startValue = 0;
            const duration = 2000;
            const step = endValue / (duration / 16);

            const updateCount = () => {
                startValue += step;
                if (startValue < endValue) {
                    target.innerText = Math.ceil(startValue);
                    requestAnimationFrame(updateCount);
                } else {
                    target.innerText = endValue;
                }
            };
            updateCount();
            statsObserver.unobserve(target);
        }
    });
}, observerOptions);

stats.forEach(stat => statsObserver.observe(stat));
// Innovation Cards Glow Effect
const innovCards = document.querySelectorAll('.innovation-card');

innovCards.forEach(card => {
    const glow = card.querySelector('.innovation-card__glow');
    
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        glow.style.top = `${y - 150}px`;
        glow.style.left = `${x - 150}px`;
        glow.style.opacity = '1';
    });
    
    card.addEventListener('mouseleave', () => {
        glow.style.opacity = '0';
    });
});
// Captcha Logic
let captchaResult;
function generateCaptcha() {
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    captchaResult = num1 + num2;
    document.getElementById('captcha-question').innerText = `${num1} + ${num2}`;
}

// Form Submission
const contactForm = document.getElementById('main-contact-form');
const phoneInput = document.getElementById('phone');
const formMessage = document.getElementById('form-message');

// Validate phone: only numbers
phoneInput.addEventListener('input', (e) => {
    e.target.value = e.target.value.replace(/[^0-9]/g, '');
});

contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const userAnswer = parseInt(document.getElementById('captcha-answer').value);
    
    if (userAnswer !== captchaResult) {
        formMessage.textContent = "Ошибка: Ответ на пример неверный.";
        formMessage.className = "form-message error";
        generateCaptcha();
        return;
    }

    // Имитация AJAX отправки
    const submitBtn = this.querySelector('button');
    submitBtn.disabled = true;
    submitBtn.innerText = "Отправка...";

    setTimeout(() => {
        formMessage.textContent = "Успех! Мы свяжемся с вами в ближайшее время.";
        formMessage.className = "form-message success";
        contactForm.reset();
        generateCaptcha();
        submitBtn.disabled = false;
        submitBtn.innerText = "Отправить запрос";
    }, 1500);
});

// Initial call
generateCaptcha();