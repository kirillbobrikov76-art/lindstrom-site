// ============================================
// УПРАВЛЕНИЕ МОБИЛЬНЫМ МЕНЮ
// ============================================
function toggleMobileNav() {
  const nav = document.getElementById('mobileNav');
  nav.classList.toggle('open');
  document.body.style.overflow = nav.classList.contains('open') ? 'hidden' : '';
}

// Закрытие мобильного меню по клавише Escape
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    const nav = document.getElementById('mobileNav');
    if (nav && nav.classList.contains('open')) toggleMobileNav();
  }
});

// ============================================
// ОТПРАВКА ФОРМЫ ЧЕРЕЗ FETCH API
// ============================================
function submitForm(event) {
  event.preventDefault();
  
  const form = event.target;
  const formData = new FormData(form);
  const successBlock = document.getElementById('formSuccess');
  const submitButton = form.querySelector('button[type="submit"]');
  
  // Блокируем кнопку на время отправки
  submitButton.disabled = true;
  submitButton.innerHTML = 'Отправка... <span class="btn-arrow">→</span>';

  fetch('send.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      form.style.display = 'none';
      successBlock.style.display = 'block';
      if (navigator.vibrate) navigator.vibrate(50);
    } else {
      alert('Произошла ошибка при отправке. Пожалуйста, позвоните нам.');
    }
  })
  .catch(error => {
    console.error('Ошибка:', error);
    alert('Произошла ошибка при отправке. Пожалуйста, позвоните нам.');
  })
  .finally(() => {
    submitButton.disabled = false;
    submitButton.innerHTML = 'Отправить заявку <span class="btn-arrow">→</span>';
  });
}

function resetForm() {
  const form = document.getElementById('contactForm');
  const successBlock = document.getElementById('formSuccess');
  form.reset();
  form.style.display = 'block';
  successBlock.style.display = 'none';
}

// ============================================
// МАСКА ДЛЯ ТЕЛЕФОНА (АВТОМАТИЧЕСКОЕ ФОРМАТИРОВАНИЕ)
// Формат: +7 (XXX) XXX-XX-XX
// ============================================
(function() {
  const phoneInput = document.getElementById('phoneInput');
  if (!phoneInput) return; // Если поля нет на странице — выходим

  // Функция форматирования: принимает строку, возвращает отформатированную
  function formatPhone(value) {
    // Убираем всё, кроме цифр
    const digits = value.replace(/\D/g, '');
    
    // Если пользователь ввёл 8 как первую цифру — заменяем на 7
    let cleaned = digits;
    if (cleaned.startsWith('8')) {
      cleaned = '7' + cleaned.slice(1);
    }
    
    // Если первая цифра не 7 — добавляем 7 автоматически
    if (cleaned.length > 0 && !cleaned.startsWith('7')) {
      cleaned = '7' + cleaned;
    }
    
    // Ограничиваем до 11 цифр (7 + 10 цифр номера)
    cleaned = cleaned.slice(0, 11);
    
    // Формируем маску по частям
    let result = '';
    
    if (cleaned.length === 0) {
      return '';
    }
    
    // Код страны: +7
    result = '+7';
    
    if (cleaned.length > 1) {
      // Код оператора: (XXX)
      result += ' (' + cleaned.slice(1, 4);
      
      if (cleaned.length >= 4) {
        result += ')';
      }
      
      if (cleaned.length > 4) {
        // Первые 3 цифры номера: XXX
        result += ' ' + cleaned.slice(4, 7);
      }
      
      if (cleaned.length > 7) {
        // Следующие 2 цифры: -XX
        result += '-' + cleaned.slice(7, 9);
      }
      
      if (cleaned.length > 9) {
        // Последние 2 цифры: -XX
        result += '-' + cleaned.slice(9, 11);
      }
    }
    
    return result;
  }

  // Обработчик ввода
  phoneInput.addEventListener('input', function(e) {
    const oldValue = e.target.value;
    const newValue = formatPhone(e.target.value);
    
    e.target.value = newValue;
    
    // Восстанавливаем позицию курсора с учётом добавленных символов
    if (newValue.length > oldValue.length) {
      e.target.setSelectionRange(newValue.length, newValue.length);
    }
  });

  // При фокусе на пустое поле — сразу показываем "+7 ("
  phoneInput.addEventListener('focus', function(e) {
    if (e.target.value === '') {
      e.target.value = '+7 (';
    }
  });

  // При потере фокуса — если поле пустое или только "+7 (", очищаем
  phoneInput.addEventListener('blur', function(e) {
    if (e.target.value === '+7 (' || e.target.value === '+7') {
      e.target.value = '';
    }
  });

  // Запрещаем вводить нецифровые символы (кроме служебных клавиш)
  phoneInput.addEventListener('keydown', function(e) {
    if ([8, 9, 27, 13, 46].indexOf(e.keyCode) !== -1 ||
        (e.keyCode >= 35 && e.keyCode <= 40) ||
        (e.ctrlKey && (e.keyCode === 65 || e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 88)) ||
        (e.metaKey && (e.keyCode === 65 || e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 88))
    ) {
      return;
    }
    
    // Блокируем всё, кроме цифр
    if ((e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
    }
  });

  // Обработчик вставки из буфера обмена
  phoneInput.addEventListener('paste', function(e) {
    e.preventDefault();
    const pastedText = (e.clipboardData || window.clipboardData).getData('text');
    const formatted = formatPhone(pastedText);
    phoneInput.value = formatted;
  });
})();