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