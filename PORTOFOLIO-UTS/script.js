// Toggle menu untuk tampilan mobile
document.querySelector('.menu-toggle').addEventListener('click', function() {
    document.querySelector('.nav-links').classList.toggle('active');
});

// Animasi scroll untuk navigasi
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
            
            // Tutup menu mobile setelah mengklik link
            document.querySelector('.nav-links').classList.remove('active');
        }
    });
});

// Efek sticky header
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 100) {
        header.style.padding = '10px 0';
        header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.padding = '20px 0';
        header.style.boxShadow = 'none';
    }
});

// Animasi saat scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        }
    });
}, observerOptions);

// Observasi elemen untuk animasi
document.querySelectorAll('.skill-card').forEach(card => {
    observer.observe(card);
});

document.querySelectorAll('.social-link').forEach(link => {
    observer.observe(link);
});

document.querySelectorAll('.contact-item').forEach(item => {
    observer.observe(item);
});

document.querySelectorAll('.form-group').forEach(group => {
    observer.observe(group);
});

document.querySelectorAll('.about-text p').forEach((p, index) => {
    p.style.animationDelay = `${index * 0.2}s`;
    observer.observe(p);
});

// Form submission
document.querySelector('.contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validasi form sederhana
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    if (name && email && message) {
        // Simulasi pengiriman form
        alert('Terima kasih! Pesan Anda telah dikirim.');
        this.reset();
    } else {
        alert('Harap lengkapi semua field!');
    }
});

// Efek parallax sederhana pada background
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.bg-circle');
    
    parallaxElements.forEach((element, index) => {
        const speed = 0.1 + (index * 0.05);
        element.style.transform = `translateY(${scrolled * speed}px)`;
    });
});

// Typing effect untuk teks home
function initTypingEffect() {
    const typingText = document.querySelector('.typing-text');
    if (typingText) {
        const text = typingText.textContent;
        typingText.textContent = '';
        typingText.style.width = '0';
        
        setTimeout(() => {
            typingText.style.animation = `typing 3.5s steps(${text.length}, end) 0.5s forwards, blink-caret 0.75s step-end infinite`;
            setTimeout(() => {
                typingText.textContent = text;
                typingText.style.borderRight = 'none';
            }, 3500);
        }, 1500);
    }
}

// Inisialisasi setelah preloader selesai
window.addEventListener('load', function() {
    setTimeout(initTypingEffect, 1500);
});

// Background circles animation
function animateCircles() {
    const circles = document.querySelectorAll('.bg-circle');
    circles.forEach((circle, index) => {
        circle.style.animationDelay = `${index * 2}s`;
    });
}

// Panggil fungsi animasi circles
animateCircles();