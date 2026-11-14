<?php 
$pageTitle = 'Услуги | Lindstrom'; 
$currentPage = 'services'; 
include 'includes/header.php'; 
?>

    <div class="page-header">
      <div class="page-header-left">
        <div class="page-breadcrumb"><span>●</span> <a href="index.php">Главная</a> / Услуги</div>
        <h1>Наши услуги</h1>
        <p>Полный цикл работ с металлоконструкциями — от проектирования до монтажа. Каждый этап контролируется специалистами с многолетним опытом.</p>
      </div>
      <div class="page-header-right">
        <div class="line"></div>
        <p>Качество<br>в каждом<br>этапе</p>
      </div>
    </div>

    <section class="services">
      <div class="services-scroll">
        <div class="service-card">
          <svg class="service-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
          <h3>Монтаж конструкций</h3>
          <p>Профессиональный монтаж металлоконструкций любой сложности. Работаем с частными и коммерческими объектами. Гарантия на все виды работ.</p>
        </div>
        <div class="service-card">
          <svg class="service-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          <h3>Изготовление на заказ</h3>
          <p>Производство металлоизделий по вашим чертежам и техническим заданиям. Любые размеры, формы и конфигурации.</p>
        </div>
        <div class="service-card">
          <svg class="service-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2zM22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
          <h3>Проектирование</h3>
          <p>Разработка проектной документации, 3D-моделирование и визуализация. Поможем оптимизировать конструкцию.</p>
        </div>
        <div class="service-card">
          <svg class="service-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <h3>Лестницы и ограждения</h3>
          <p>Изготовление металлических лестниц, перил и ограждений. Индивидуальный дизайн под ваш интерьер.</p>
        </div>
        <div class="service-card">
          <svg class="service-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
          <h3>Навесы и козырьки</h3>
          <p>Практичные и долговечные навесы для дома, дачи и коммерческих объектов. Защита от осадков и солнца.</p>
        </div>
        <div class="service-card">
          <svg class="service-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          <h3>Заборы и ограждения</h3>
          <p>Стильные и надёжные заборы из металла. Защита территории с сохранением эстетичного внешнего вида.</p>
        </div>
      </div>
    </section>

    <section class="contact-cta">
      <div>
        <span class="section-label">Остались вопросы?</span>
        <h2>Свяжитесь с нами</h2>
        <p>Мы с радостью расскажем о наших возможностях и поможем реализовать ваш проект.</p>
      </div>
      <div>
        <a href="contacts.php" class="btn btn--primary">Оставить заявку <span class="btn-arrow">→</span></a>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>