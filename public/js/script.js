document.addEventListener('DOMContentLoaded', function() {
    const visionCard = document.getElementById('vision-card');
    const missionCard = document.getElementById('mission-card');

    // Atur elemen agar awalnya tidak terlihat
    visionCard.style.opacity = 0;
    missionCard.style.opacity = 0;

    // IntersectionObserver untuk menangani animasi masuk & keluar
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1; // Tampilkan elemen

                // Tambahkan animasi masuk (fadeInDown)
                entry.target.classList.remove('animate__fadeOutUp');
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
            } else {
                // Tambahkan animasi keluar (fadeOutDown)
                entry.target.classList.remove('animate__fadeInUp');
                entry.target.classList.add('animate__animated', 'animate__fadeOutUp');
            }
        });
    }, {
        threshold: 0.2 // Elemen mulai muncul saat 20% terlihat
    });

    observer.observe(visionCard);
    observer.observe(missionCard);
});

document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card-animate');

    // Intersection Observer untuk animasi masuk & keluar
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.classList.remove('animate__fadeOutDown');
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
            } else {
                entry.target.classList.remove('animate__fadeInUp');
                entry.target.classList.add('animate__animated', 'animate__fadeOutDown');
            }
        });
    }, {
        threshold: 0.2
    });

    cards.forEach(card => {
        observer.observe(card);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const accordions = document.querySelectorAll('[data-accordion-target]');
    
    accordions.forEach(button => {
        button.addEventListener('click', function () {
            const target = document.querySelector(this.getAttribute('data-accordion-target'));

            // Tutup semua yang terbuka
            document.querySelectorAll('.hidden').forEach(el => {
                if (el !== target) {
                    el.classList.add('hidden');
                    el.previousElementSibling.querySelector('[data-accordion-icon]').classList.add('rotate-180');
                    el.previousElementSibling.querySelector('[data-accordion-icon]').classList.remove('rotate-0');
                }
            });

            // Toggle accordion yang diklik
            target.classList.toggle('hidden');
            this.querySelector('[data-accordion-icon]').classList.toggle('rotate-180');
            this.querySelector('[data-accordion-icon]').classList.toggle('rotate-0');
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var typed = new Typed("#typed", {
        strings: ["Voice of Maranatha"], // Tambahkan variasi teks jika diinginkan
        typeSpeed: 90,
        backSpeed: 50,
        showCursor: true,
        cursorChar: '|',
        loop: true
    });
});
