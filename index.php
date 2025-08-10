<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fajar Hermawan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="assets/img/favicon.ico" />
</head>
<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200">

<!-- HEADER -->
<header class="bg-white dark:bg-gray-900 shadow">
  <div class="container mx-auto px-5 py-3 flex justify-between items-center">
    <a href="#" class="text-white bg-black px-3 py-1 rounded text-xl font-bold">FH</a>
    <nav class="hidden md:flex items-center space-x-6">
      <a href="#tech-stack" class="text-gray-500 dark:text-gray-400 text-sm">Tech stack</a>
      <a href="#experience" class="text-gray-500 dark:text-gray-400 text-sm">Experience</a>
      <a href="#education" class="text-gray-500 dark:text-gray-400 text-sm">Education</a>
      <a href="#contact" class="text-gray-500 dark:text-gray-400 text-sm">Contact</a>
      <a href="https://wa.me/62895331438446" target="_blank"
         class="bg-green-400 rounded-lg px-4 py-2 flex items-center font-medium text-sm text-black">
        <img src="assets/img/logo-whatsapp-png-46041.png" alt="WhatsApp" class="w-5 h-5 mr-2" />Let's Talk
      </a>
      <a href="/pkm.html" class="bg-black text-white text-sm px-4 py-2 rounded-lg font-medium">
        Lihat Sertifikat PKM
      </a>
    </nav>
    <button id="menu-toggle" class="md:hidden focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 dark:text-gray-200" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 px-5 pb-4 space-y-3">
    <a href="#tech-stack" class="block text-gray-500 dark:text-gray-400">Tech stack</a>
    <a href="#experience" class="block text-gray-500 dark:text-gray-400">Experience</a>
    <a href="#education" class="block text-gray-500 dark:text-gray-400">Education</a>
    <a href="#contact" class="block text-gray-500 dark:text-gray-400">Contact</a>
    <a href="https://wa.me/62895331438446" target="_blank" class="block bg-green-400 rounded-lg px-4 py-2 text-black">Let's Talk</a>
    <a href="/pkm.html" class="block bg-black text-white rounded-lg px-4 py-2">Lihat Sertifikat PKM</a>
  </div>
</header>

<!-- HERO -->
<section id="hero" class="mt-10">
  <div class="container mx-auto px-10 py-12 flex flex-col lg:flex-row items-center gap-8">
    <div class="relative w-full lg:w-1/3 flex justify-center">
      <img src="assets/img/fajar.JPG" alt="Profile"
           class="w-64 h-64 lg:w-[320px] lg:h-[320px] rounded-xl shadow-lg transition-all hover:scale-105 hover:shadow-blue-500/50"/>
    </div>
    <div class="w-full lg:w-2/3">
      <h1 class="text-6xl font-bold mb-6 text-black dark:text-white">Hi, I'm Fajar 👋</h1>
      <p class="text-2xl text-gray-600 dark:text-gray-400 font-medium mb-6">Full-Stack Developer</p>
      <p class="text-base text-gray-500 dark:text-gray-400 leading-relaxed">
        Individu yang bersemangat dan proaktif, berpengalaman sebagai Marketing/Admin, cepat belajar,
        adaptif, dan siap berkontribusi dalam proyek-proyek digital maupun teknologi.
      </p>
      <div class="flex flex-col items-start space-y-3 mt-6">
        <div class="flex items-center space-x-2">
          <img src="assets/img/favicon-16x16.png" alt="" class="w-5 h-5"/>
          <p class="text-gray-500 dark:text-gray-400">Jakarta, Indonesia</p>
        </div>
        <p class="text-green-500">Available for new projects</p>
      </div>
    </div>
  </div>
</section>

<!-- TECH STACK -->
<section id="tech-stack" class="py-12 bg-gray-50 dark:bg-gray-800">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6 text-center">Tech Stack</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
      <?php if (!empty($techStacks)): ?>
        <?php foreach ($techStacks as $stack): ?>
          <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow hover:scale-105 transition">
            <img src="<?= $stack['logo_path'] ?>" alt="<?= $stack['name'] ?>" class="w-12 mx-auto mb-2">
            <p class="text-gray-700 dark:text-gray-300"><?= $stack['name'] ?></p>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="col-span-4 text-center text-gray-500">Belum ada data tech stack.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- EXPERIENCE -->
<section id="experience" class="py-12">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6 text-center">Experience</h2>
    <div class="space-y-6">
      <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow">
        <h3 class="font-bold text-xl">Warehouse Staff - PT Vahana Gasti Teknika</h3>
        <p class="text-sm text-gray-500">Sep 2024 – Nov 2024</p>
        <ul class="list-disc pl-5 mt-2">
          <li>Merakit pesanan pelanggan seperti router box.</li>
          <li>Mengelola proses pengiriman dan pengantaran.</li>
          <li>Mencapai target pengiriman harian dan bulanan.</li>
        </ul>
      </div>
      <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow">
        <h3 class="font-bold text-xl">Banking Marketing Staff - BCA</h3>
        <p class="text-sm text-gray-500">Sep 2023 – Jul 2024</p>
        <ul class="list-disc pl-5 mt-2">
          <li>Memasarkan produk perbankan seperti tabungan dan mobile banking.</li>
          <li>Mencapai target penjualan harian.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- EDUCATION -->
<section id="education" class="py-12 bg-gray-50 dark:bg-gray-800">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6 text-center">Education</h2>
    <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow text-center">
      <h3 class="font-bold text-xl">Universitas Pamulang</h3>
      <p class="text-sm text-gray-500">Teknik Elektro | Semester 6</p>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-12">
  <div class="container mx-auto px-6 max-w-lg">
    <h2 class="text-3xl font-bold mb-6 text-center">Contact Me</h2>
    <form action="mailto:fajar.hermawan092001@gmail.com" method="post" enctype="text/plain" class="space-y-4">
      <input type="text" name="name" placeholder="Nama Anda" class="w-full p-3 border rounded-lg" required>
      <input type="email" name="email" placeholder="Email Anda" class="w-full p-3 border rounded-lg" required>
      <textarea name="message" rows="5" placeholder="Pesan Anda" class="w-full p-3 border rounded-lg" required></textarea>
      <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Kirim Pesan</button>
    </form>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white py-4 text-center">
  &copy; <?= date("Y") ?> Fajar Hermawan. All Rights Reserved.
</footer>

<script>
  document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });
</script>
</body>
</html>