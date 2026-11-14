<?php
$pageTitle = $pageTitle ?? 'Металлоконструкции любой сложности';
$currentPage = $currentPage ?? 'home';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=5.0">
  <title>Lindstrom — <?= htmlspecialchars($pageTitle) ?></title>
  <link rel="stylesheet" href="style.css?v=6">
</head>
<body>

  <header class="header">
    <div class="header-inner">
      <a href="index.php" class="logo">
        <img src="images/logo.png" alt="Lindstrom" class="logo-img">
        Lindstrom
      </a>
      <nav class="nav">
        <a href="index.php" class="<?= $currentPage === 'home' ? 'active' : '' ?>">Главная</a>
        <a href="about.php" class="<?= $currentPage === 'about' ? 'active' : '' ?>">О компании</a>
        <a href="services.php" class="<?= $currentPage === 'services' ? 'active' : '' ?>">Услуги</a>
        <a href="works.php" class="<?= $currentPage === 'works' ? 'active' : '' ?>">Наши работы</a>
        <a href="contacts.php" class="<?= $currentPage === 'contacts' ? 'active' : '' ?>">Контакты</a>
      </nav>
      <a href="tel:89765432112" class="header-phone">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        8 (976) 543-21-12
      </a>
      <button class="burger" onclick="toggleMobileNav()" aria-label="Меню">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <div class="mobile-nav" id="mobileNav">
    <button class="mobile-nav-close" onclick="toggleMobileNav()" aria-label="Закрыть">✕</button>
    <ul class="mobile-nav-list">
      <li><a href="index.php" class="<?= $currentPage === 'home' ? 'active' : '' ?>">Главная</a></li>
      <li><a href="about.php" class="<?= $currentPage === 'about' ? 'active' : '' ?>">О компании</a></li>
      <li><a href="services.php" class="<?= $currentPage === 'services' ? 'active' : '' ?>">Услуги</a></li>
      <li><a href="works.php" class="<?= $currentPage === 'works' ? 'active' : '' ?>">Наши работы</a></li>
      <li><a href="contacts.php" class="<?= $currentPage === 'contacts' ? 'active' : '' ?>">Контакты</a></li>
    </ul>
    <div class="mobile-nav-contact">
      <div class="label">Позвонить нам</div>
      <a href="tel:89765432112" class="phone">8 (976) 543-21-12</a>
    </div>
  </div>

  <?php if ($currentPage !== 'contacts'): ?>
  <div class="mobile-sticky-cta">
    <a href="contacts.php" class="btn btn--primary btn--block">Оставить заявку <span class="btn-arrow">→</span></a>
  </div>
  <?php endif; ?>

  <nav class="bottom-nav">
    <a class="bottom-nav__item <?= $currentPage === 'home' ? 'active' : '' ?>" href="index.php">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      <span>Главная</span>
    </a>
    <a class="bottom-nav__item <?= $currentPage === 'services' ? 'active' : '' ?>" href="services.php">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
      <span>Услуги</span>
    </a>
    <a class="bottom-nav__item <?= $currentPage === 'works' ? 'active' : '' ?>" href="works.php">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
      <span>Проекты</span>
    </a>
    <a class="bottom-nav__item <?= $currentPage === 'contacts' ? 'active' : '' ?>" href="contacts.php">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      <span>Контакты</span>
    </a>
  </nav>

  <main>