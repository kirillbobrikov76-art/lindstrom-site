// Маска телефона
document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phoneInput');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 0) {
                if (value[0] === '7' || value[0] === '8') {
                    value = value.substring(1);
                }
                let formatted = '+7';
                if (value.length > 0) formatted += ' (' + value.substring(0, 3);
                if (value.length >= 3) formatted += ') ' + value.substring(3, 6);
                if (value.length >= 6) formatted += '-' + value.substring(6, 8);
                if (value.length >= 8) formatted += '-' + value.substring(8, 10);
                e.target.value = formatted;
            }
        });
    }
});

// Мобильное меню
function toggleMobileNav() {
    const nav = document.getElementById('mobileNav');
    if (nav) {
        nav.classList.toggle('open');
    }
}

// Закрытие меню при клике на ссылку
document.addEventListener('DOMContentLoaded', function() {
    const mobileLinks = document.querySelectorAll('.mobile-nav-list a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            const nav = document.getElementById('mobileNav');
            if (nav) {
                nav.classList.remove('open');
            }
        });
    });
});

// Отправка формы
function submitForm(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    
    fetch('send.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            form.style.display = 'none';
            const success = document.getElementById('formSuccess');
            if (success) {
                success.style.display = 'block';
            }
        } else {
            alert('Ошибка отправки. Попробуйте позже.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ошибка отправки. Попробуйте позже.');
    });
}

function resetForm() {
    const form = document.getElementById('contactForm');
    if (form) {
        form.reset();
        form.style.display = 'block';
    }
    const success = document.getElementById('formSuccess');
    if (success) {
        success.style.display = 'none';
    }
}