document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Мобильное меню
    const burger = document.querySelector('.burger');
    const mobileNav = document.getElementById('mobile-nav');
    const closeMenu = document.getElementById('close-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = (state) => {
        mobileNav.classList.toggle('active', state);
        document.body.style.overflow = state ? 'hidden' : '';
    };

    burger.addEventListener('click', () => toggleMenu(true));
    closeMenu.addEventListener('click', () => toggleMenu(false));
    mobileLinks.forEach(link => link.addEventListener('click', () => toggleMenu(false)));

    // 3. Header Scroll
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.08)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(255, 255, 255, 0.8)';
            header.style.boxShadow = 'none';
        }
    });

    // 4. Загрузка библиотек и их инициализация
    const scripts = [
        'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js',
        'https://unpkg.com/aos@next/dist/aos.js'
    ];

    function loadScripts(urls, callback) {
        let count = 0;
        urls.forEach(url => {
            const s = document.createElement('script');
            s.src = url;
            s.onload = () => { if (++count === urls.length) callback(); };
            document.head.appendChild(s);
        });
    }

    loadScripts(scripts, () => {
        // AOS
        AOS.init({ duration: 800, once: true });

        // Lottie Hero
        lottie.loadAnimation({
            container: document.getElementById('lottie-hero'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'https://assets9.lottiefiles.com/packages/lf20_m6cuL6.json'
        });

        // Glow Effect для инноваций
        document.querySelectorAll('.innovation-card').forEach(card => {
            const glow = card.querySelector('.innovation-card__glow');
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                glow.style.top = `${e.clientY - rect.top - 150}px`;
                glow.style.left = `${e.clientX - rect.left - 150}px`;
                glow.style.opacity = '1';
            });
            card.addEventListener('mouseleave', () => glow.style.opacity = '0');
        });

        // Counters
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const endValue = parseInt(target.dataset.target);
                    let start = 0;
                    const interval = setInterval(() => {
                        start += Math.ceil(endValue / 100);
                        if (start >= endValue) {
                            target.innerText = endValue;
                            clearInterval(interval);
                        } else target.innerText = start;
                    }, 20);
                    statsObserver.unobserve(target);
                }
            });
        }, { threshold: 0.5 });
        document.querySelectorAll('.stat-item__number').forEach(s => statsObserver.observe(s));
    });

    // 5. Контактная форма и Капча
    let captchaRes;
    const genCaptcha = () => {
        const a = Math.floor(Math.random() * 10) + 1, b = Math.floor(Math.random() * 10) + 1;
        captchaRes = a + b;
        document.getElementById('captcha-question').innerText = `${a} + ${b}`;
    };
    genCaptcha();

    document.getElementById('phone').addEventListener('input', e => e.target.value = e.target.value.replace(/[^0-9]/g, ''));

    document.getElementById('main-contact-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const ans = parseInt(document.getElementById('captcha-answer').value);
        const msg = document.getElementById('form-message');
        if (ans !== captchaRes) {
            msg.textContent = "Ошибка капчи!";
            msg.className = "form-message error";
            return genCaptcha();
        }
        const btn = this.querySelector('button');
        btn.disabled = true; btn.innerText = "Отправка...";
        setTimeout(() => {
            msg.textContent = "Успешно отправлено!";
            msg.className = "form-message success";
            this.reset(); genCaptcha(); btn.disabled = false; btn.innerText = "Отправить запрос";
        }, 1500);
    });

    // 6. Cookie Popup Logic
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('active');
    });
});