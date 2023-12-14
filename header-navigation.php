<header class="bg-gray-50 border-b px-5">
  <div class="container flex items-center justify-between mx-auto">
    <?= is_front_page() ? '<h1>' : '<div>' ?>
      <a href="<?= site_url() ?>">Logo</a>
    <?= is_front_page() ? '</h1>' : '</div>' ?>
    <nav>
      <ul class="flex">
        <li><a class="block px-5 py-3" href="">Home</a></li>
        <li><a class="block px-5 py-3" href="">Services</a></li>
        <li><a class="block px-5 py-3" href="">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</header>
