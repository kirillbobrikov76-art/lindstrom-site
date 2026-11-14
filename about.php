<?php 
$pageTitle = 'О компании | Lindstrom'; 
$currentPage = 'about'; 
include 'includes/header.php'; 
?>

    <div class="page-header">
      <div class="page-header-left">
        <div class="page-breadcrumb"><span>●</span> <a href="index.php">Главная</a> / О компании</div>
        <h1>О компании<br>Lindstrom</h1>
        <p>Мы — команда профессионалов с многолетним опытом в сфере металлоконструкций. Наша миссия — создавать надёжные и эстетичные решения из металла.</p>
      </div>
      <div class="page-header-right">
        <div class="line"></div>
        <p>Настоящее<br>качество<br>в деталях</p>
      </div>
    </div>

    <div class="about-grid">
      <!-- РЕКОМЕНДУЕМЫЙ РАЗМЕР: 800x1000px (соотношение 3:4 на десктопе, 4:3 на мобильном) -->
      <img class="about-img" src="images/about-production.jpg" alt="Производство" loading="lazy">
      <div class="about-text">
        <h2>Более 6 лет создаём металлические конструкции</h2>
        <p>Компания Lindstrom специализируется на проектировании, изготовлении и монтаже металлоконструкций любой сложности. Мы работаем как с частными заказчиками, так и с крупными коммерческими объектами.</p>
        <p>Наше собственное производство оснащено современным оборудованием, что позволяет контролировать качество на каждом этапе — от проектирования до финального монтажа.</p>
        <div class="about-stats">
          <div>
            <div class="about-stat-num">6+</div>
            <div class="about-stat-label">Лет успешной работы</div>
          </div>
          <div>
            <div class="about-stat-num">245</div>
            <div class="about-stat-label">Реализованных проектов</div>
          </div>
          <div>
            <div class="about-stat-num">98%</div>
            <div class="about-stat-label">Клиентов рекомендуют нас</div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-header">
      <span class="section-label">Как мы работаем</span>
      <h2 class="section-title">Процесс работы</h2>
    </div>

    <section class="process">
      <div class="accordion">
        <details class="accordion__item" open>
          <summary class="accordion__header">
            <span><span class="accordion__num">01</span> Консультация и замер</span>
            <span class="accordion__icon">+</span>
          </summary>
          <div class="accordion__body">
            <p>Наш специалист приезжает на объект, делает точные замеры и обсуждает с вами все детали проекта. Это бесплатно и ни к чему не обязывает.</p>
          </div>
        </details>
        <details class="accordion__item">
          <summary class="accordion__header">
            <span><span class="accordion__num">02</span> Проектирование и 3D-визуализация</span>
            <span class="accordion__icon">+</span>
          </summary>
          <div class="accordion__body">
            <p>Создаём техническую документацию и 3D-модель будущего изделия. Вы видите результат до начала производства и можете внести правки.</p>
          </div>
        </details>
        <details class="accordion__item">
          <summary class="accordion__header">
            <span><span class="accordion__num">03</span> Производство</span>
            <span class="accordion__icon">+</span>
          </summary>
          <div class="accordion__body">
            <p>Изготавливаем конструкцию на собственном производстве. Контроль качества на каждом этапе — от резки металла до сварки и покраски.</p>
          </div>
        </details>
        <details class="accordion__item">
          <summary class="accordion__header">
            <span><span class="accordion__num">04</span> Доставка и монтаж</span>
            <span class="accordion__icon">+</span>
          </summary>
          <div class="accordion__body">
            <p>Доставляем готовое изделие на объект и выполняем профессиональный монтаж. Предоставляем гарантию на все виды работ.</p>
          </div>
        </details>
      </div>
    </section>

    <section class="contact-cta">
      <div>
        <span class="section-label">Готовы начать?</span>
        <h2>Обсудим ваш проект</h2>
        <p>Свяжитесь с нами любым удобным способом — мы на связи 7 дней в неделю.</p>
      </div>
      <div>
        <a href="contacts.php" class="btn btn--primary">Оставить заявку <span class="btn-arrow">→</span></a>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>