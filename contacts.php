<?php 
$pageTitle = 'Контакты | Lindstrom'; 
$currentPage = 'contacts'; 
include 'includes/header.php'; 
?>

    <div class="page-header">
      <div class="page-header-left">
        <div class="page-breadcrumb"><span>●</span> <a href="index.php">Главная</a> / Контакты</div>
        <h1>Свяжитесь<br>с нами</h1>
        <p>Мы всегда на связи и готовы ответить на ваши вопросы. Оставьте заявку или позвоните нам напрямую.</p>
      </div>
      <div class="page-header-right">
        <div class="line"></div>
        <p>Всегда<br>на связи<br>с вами</p>
      </div>
    </div>

    <div class="contacts-grid" id="contactFormBlock">
      <div class="contact-info-list">
        <a href="tel:89765432112" class="contact-info-item">
          <div class="contact-info-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          </div>
          <div>
            <h4>Телефон</h4>
            <p>8 (976) 543-21-12</p>
          </div>
        </a>
        <a href="mailto:info@lindstrom.ru" class="contact-info-item">
          <div class="contact-info-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div>
            <h4>Email</h4>
            <p>info@lindstrom.ru</p>
          </div>
        </a>
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <h4>Адрес</h4>
            <p>г. Москва, ул. Промышленная, д. 15</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <div>
            <h4>Режим работы</h4>
            <p>Пн–Пт: 9:00–18:00 · Сб: 10:00–15:00</p>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <h3>Оставить заявку</h3>
        
        <form id="contactForm" action="send.php" method="POST" onsubmit="submitForm(event)">
          <div class="form-row">
            <div class="form-group">
              <label>Регион *</label>
              <select name="region" required>
                <option value="">Выберите регион</option>
                <option>Москва</option><option>Санкт-Петербург</option><option>Севастополь</option>
                <option>Московская область</option><option>Ленинградская область</option><option>Краснодарский край</option>
                <option>Ростовская область</option><option>Свердловская область</option><option>Новосибирская область</option>
                <option>Челябинская область</option><option>Республика Татарстан</option><option>Республика Башкортостан</option>
                <option>Нижегородская область</option><option>Самарская область</option><option>Омская область</option>
                <option>Красноярский край</option><option>Пермский край</option><option>Воронежская область</option>
                <option>Волгоградская область</option><option>Саратовская область</option><option>Тюменская область</option>
                <option>Иркутская область</option><option>Хабаровский край</option><option>Приморский край</option>
                <option>Ставропольский край</option><option>Белгородская область</option><option>Брянская область</option>
                <option>Владимирская область</option><option>Вологодская область</option><option>Калининградская область</option>
                <option>Калужская область</option><option>Кемеровская область</option><option>Кировская область</option>
                <option>Костромская область</option><option>Курганская область</option><option>Курская область</option>
                <option>Липецкая область</option><option>Магаданская область</option><option>Мурманская область</option>
                <option>Новгородская область</option><option>Оренбургская область</option><option>Орловская область</option>
                <option>Пензенская область</option><option>Псковская область</option><option>Рязанская область</option>
                <option>Сахалинская область</option><option>Смоленская область</option><option>Тамбовская область</option>
                <option>Тверская область</option><option>Томская область</option><option>Тульская область</option>
                <option>Ульяновская область</option><option>Ярославская область</option><option>Республика Адыгея</option>
                <option>Республика Алтай</option><option>Республика Бурятия</option><option>Республика Дагестан</option>
                <option>Республика Ингушетия</option><option>Кабардино-Балкарская Республика</option><option>Республика Калмыкия</option>
                <option>Карачаево-Черкесская Республика</option><option>Республика Карелия</option><option>Республика Коми</option>
                <option>Республика Крым</option><option>Республика Марий Эл</option><option>Республика Мордовия</option>
                <option>Республика Саха (Якутия)</option><option>Республика Северная Осетия — Алания</option><option>Республика Тыва</option>
                <option>Удмуртская Республика</option><option>Республика Хакасия</option><option>Чеченская Республика</option>
                <option>Чувашская Республика</option><option>Алтайский край</option><option>Забайкальский край</option>
                <option>Камчатский край</option><option>Амурская область</option><option>Архангельская область</option>
                <option>Астраханская область</option><option>Еврейская автономная область</option><option>Ненецкий автономный округ</option>
                <option>Ханты-Мансийский автономный округ</option><option>Чукотский автономный округ</option><option>Ямало-Ненецкий автономный округ</option>
              </select>
            </div>
            <div class="form-group">
              <label>Город *</label>
              <select name="city" required>
                <option value="">Выберите город</option>
                <option>Москва</option><option>Санкт-Петербург</option><option>Новосибирск</option><option>Екатеринбург</option>
                <option>Казань</option><option>Нижний Новгород</option><option>Челябинск</option><option>Самара</option>
                <option>Омск</option><option>Ростов-на-Дону</option><option>Уфа</option><option>Красноярск</option>
                <option>Воронеж</option><option>Пермь</option><option>Волгоград</option><option>Краснодар</option>
                <option>Саратов</option><option>Тюмень</option><option>Тольятти</option><option>Ижевск</option>
                <option>Барнаул</option><option>Иркутск</option><option>Хабаровск</option><option>Ульяновск</option>
                <option>Владивосток</option><option>Ярославль</option><option>Махачкала</option><option>Томск</option>
                <option>Оренбург</option><option>Кемерово</option><option>Новокузнецк</option><option>Рязань</option>
                <option>Астрахань</option><option>Набережные Челны</option><option>Пенза</option><option>Липецк</option>
                <option>Тула</option><option>Киров</option><option>Чебоксары</option><option>Калининград</option>
                <option>Курск</option><option>Улан-Удэ</option><option>Ставрополь</option><option>Сочи</option>
                <option>Тверь</option><option>Магнитогорск</option><option>Иваново</option><option>Брянск</option>
                <option>Белгород</option><option>Сургут</option><option>Владимир</option><option>Архангельск</option>
                <option>Симферополь</option><option>Севастополь</option><option>Якутск</option><option>Мурманск</option>
                <option>Смоленск</option><option>Вологда</option><option>Чита</option><option>Калуга</option>
                <option>Саранск</option><option>Грозный</option><option>Владикавказ</option><option>Йошкар-Ола</option>
                <option>Подольск</option><option>Химки</option><option>Мытищи</option><option>Нижний Тагил</option>
                <option>Кострома</option><option>Петрозаводск</option><option>Таганрог</option><option>Нижневартовск</option>
                <option>Братск</option><option>Дзержинск</option><option>Орёл</option><option>Череповец</option>
                <option>Курган</option><option>Волжский</option><option>Коломна</option><option>Стерлитамак</option>
                <option>Нальчик</option><option>Сыктывкар</option><option>Нижнекамск</option><option>Шахты</option>
                <option>Бийск</option><option>Энгельс</option><option>Балашиха</option><option>Королёв</option>
                <option>Люберцы</option><option>Одинцово</option><option>Новороссийск</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Улица *</label>
              <input type="text" name="street" placeholder="Например, Ленина" required>
            </div>
            <div class="form-group">
              <label>Дом *</label>
              <input type="text" name="house" placeholder="Например, 15" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Ваше имя *</label>
              <input type="text" name="name" placeholder="Иван Иванов" required>
            </div>
            <div class="form-group">
              <label>Телефон *</label>
              <!-- ИЗМЕНЕННОЕ ПОЛЕ ТЕЛЕФОНА С МАСКОЙ -->
              <input 
                type="tel" 
                name="phone" 
                id="phoneInput" 
                placeholder="+7 (___) ___-__-__" 
                maxlength="18"
                autocomplete="tel"
                required
              >
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="your@email.com">
          </div>
          <div class="form-group">
            <label>Услуга</label>
            <select name="service">
              <option>Монтаж</option>
              <option>Изготовление</option>
              <option>Проектирование</option>
            </select>
          </div>
          <div class="form-group">
            <label>Сообщение</label>
            <textarea name="message" placeholder="Опишите ваш проект..."></textarea>
          </div>
          <button type="submit" class="btn btn--primary btn--block">
            Отправить заявку <span class="btn-arrow">→</span>
          </button>
        </form>

        <div class="form-success" id="formSuccess" style="display: none;">
          <svg class="form-success__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <h3>Готово, заявка оставлена!</h3>
          <p>Как только у нашей команды появится свободная минута, мы сразу с вами свяжемся.</p>
          <button class="btn btn--outline" onclick="resetForm()">Отправить ещё одну</button>
        </div>
      </div>
    </div>

<?php include 'includes/footer.php'; ?>