<div>
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-12 sm:py-16 lg:py-20">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Eksplorasi Dunia <span class="bg-gradient-to-r from-primary-500 to-secondary-500 text-transparent bg-clip-text">Teknologi</span>, <span class="bg-gradient-to-r from-secondary-500 to-accent-500 text-transparent bg-clip-text">Anime</span>, dan <span class="bg-gradient-to-r from-accent-500 to-primary-500 text-transparent bg-clip-text">Manhwa</span></h1>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">Temukan artikel menarik dari beragam topik favorit kamu dalam satu platform.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#featured" class="btn bg-primary-500 hover:bg-primary-600 text-white">Mulai Membaca</a>
                        <a href="#" class="btn bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600">Masuk</a>
                    </div>
                </div>
                <div class="relative h-64 md:h-auto">
                    <div class="absolute top-1/3 left-1/4 w-24 h-24 md:w-32 md:h-32 bg-primary-500/20 rounded-full blur-2xl"></div>
                    <div class="absolute top-1/2 right-1/3 w-32 h-32 md:w-40 md:h-40 bg-secondary-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-1/3 right-1/4 w-28 h-28 md:w-36 md:h-36 bg-accent-500/20 rounded-full blur-2xl"></div>
                    <div class="relative z-10 grid grid-cols-2 gap-3">
                        <div class="card p-3 row-span-2 transform rotate-1">
                            <div class="w-full h-40 bg-gradient-to-br from-primary-400 to-primary-600 rounded-lg">
                                <img src="/imgs/hero-section-tech.png" class="w-full h-full object-cover rounded-lg">
                            </div>
                            <div class="mt-2">
                                <div class="h-3 w-4/5 bg-gray-200 dark:bg-gray-700 rounded"></div>
                                <div class="h-2 w-3/5 bg-gray-200 dark:bg-gray-700 rounded mt-1"></div>
                            </div>
                        </div>
                        <div class="card p-3 transform -rotate-2">
                            <div class="w-full h-20 bg-gradient-to-br from-secondary-400 to-secondary-600 rounded-lg">
                                <img src="/imgs/hero-section-anim.jpg" class="h-full w-full object-cover rounded-lg">
                            </div>
                            <div class="mt-2">
                                <div class="h-3 w-4/5 bg-gray-200 dark:bg-gray-700 rounded"></div>
                            </div>
                        </div>
                        <div class="card p-3 transform rotate-3">
                            <div class="w-full h-20 bg-gradient-to-br from-accent-400 to-accent-600 rounded-lg">
                                <img src="/imgs/hero-section-manh.jpg" class="h-full w-full object-cover rounded-lg">
                            </div>
                            <div class="mt-2">
                                <div class="h-3 w-4/5 bg-gray-200 dark:bg-gray-700 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-8 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="group relative overflow-hidden rounded-xl">
                    <div class="aspect-video relative p-6 flex flex-col justify-end transition-transform duration-300 group-hover:scale-105 overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('imgs/tech-category.png') }}')"></div>
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-white mb-2">Teknologi</h3>
                            <p class="text-white/80">Perkembangan terbaru di dunia teknologi</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="group relative overflow-hidden rounded-xl">
                    <div class="aspect-video relative p-6 flex flex-col justify-end transition-transform duration-300 group-hover:scale-105 overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('imgs/anim-category.png') }}')"></div>
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-white mb-2">Anime</h3>
                            <p class="text-white/80">Ulasan dan berita anime terkini</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="group relative overflow-hidden rounded-xl">
                    <div class="aspect-video relative p-6 flex flex-col justify-end transition-transform duration-300 group-hover:scale-105 overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('imgs/manhwa-category.jpg') }}')"></div>
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-white mb-2">Manhwa</h3>
                            <p class="text-white/80">Rekomendasi dan update manhwa populer</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section id="featured" class="py-12 lg:py-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold">Artikel Unggulan</h2>
                <a href="#" class="text-primary-600 dark:text-primary-400 hover:underline font-medium">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <article class="card">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-primary-400 to-primary-600"></div>
                        <div class="absolute top-3 left-3">
                            <span class="tag bg-primary-500 text-white">Teknologi</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-bold mb-2 line-clamp-2">Perkembangan AI Dalam 5 Tahun Terakhir</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">Bagaimana artificial intelligence berkembang pesat dan mengubah cara kita bekerja dan hidup dalam lima tahun terakhir.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700"></div>
                                <span class="text-sm text-gray-600 dark:text-gray-400">Adi Nugroho</span>
                            </div>
                            <span class="text-sm text-gray-500 dark:text-gray-500">5 Mei 2025</span>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="card">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-secondary-400 to-secondary-600"></div>
                        <div class="absolute top-3 left-3">
                            <span class="tag bg-secondary-500 text-white">Anime</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-bold mb-2 line-clamp-2">10 Anime Terbaik Musim Ini Yang Wajib Ditonton</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">Rangkuman anime-anime pilihan dengan rating tertinggi yang tayang pada musim ini.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700"></div>
                                <span class="text-sm text-gray-600 dark:text-gray-400">Dewi Lestari</span>
                            </div>
                            <span class="text-sm text-gray-500 dark:text-gray-500">3 Mei 2025</span>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="card">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-accent-400 to-accent-600"></div>
                        <div class="absolute top-3 left-3">
                            <span class="tag bg-accent-500 text-white">Manhwa</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-bold mb-2 line-clamp-2">5 Manhwa Action-Fantasy Dengan Cerita Terbaik</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">Rekomendasi manhwa bergenre action-fantasy dengan alur cerita yang kompleks dan karakter yang berkesan.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700"></div>
                                <span class="text-sm text-gray-600 dark:text-gray-400">Budi Santoso</span>
                            </div>
                            <span class="text-sm text-gray-500 dark:text-gray-500">1 Mei 2025</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Latest Posts -->
    <section class="py-12 lg:py-16 bg-gray-50 dark:bg-gray-800/50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold">Artikel Terbaru</h2>
                <a href="#" class="text-primary-600 dark:text-primary-400 hover:underline font-medium">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Latest 1 -->
                <article class="card">
                    <div class="relative">
                        <div class="aspect-square bg-gradient-to-br from-primary-400/80 to-primary-600/80"></div>
                        <div class="absolute top-3 left-3">
                            <span class="tag bg-primary-500 text-white">Teknologi</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2 line-clamp-2">Tips Mengoptimalkan Kinerja Website Dengan NextJS</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-3 line-clamp-2">Panduan lengkap meningkatkan performa website menggunakan framework NextJS.</p>
                        <span class="text-sm text-gray-500 dark:text-gray-500">29 Apr 2025</span>
                    </div>
                </article>

                <!-- Latest 2 -->
                <article class="card">
                    <div class="relative">
                        <div class="aspect-square bg-gradient-to-br from-secondary-400/80 to-secondary-600/80"></div>
                        <div class="absolute top-3 left-3">
                            <span class="tag bg-secondary-500 text-white">Anime</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2 line-clamp-2">Analisis Mendalam: Pengaruh Anime pada Budaya Global</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-3 line-clamp-2">Bagaimana anime Jepang mempengaruhi tren dan budaya populer di seluruh dunia.</p>
                        <span class="text-sm text-gray-500 dark:text-gray-500">27 Apr 2025</span>
                    </div>
                </article>

                <!-- Latest 3 -->
                <article class="card">
                    <div class="relative">
                        <div class="aspect-square bg-gradient-to-br from-accent-400/80 to-accent-600/80"></div>
                        <div class="absolute top-3 left-3">
                            <span class="tag bg-accent-500 text-white">Manhwa</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2 line-clamp-2">Perbedaan Gaya Gambar Manhwa, Manga, dan Manhua</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-3 line-clamp-2">Perbandingan ciri khas visual dan storytelling dari tiga jenis komik Asia yang populer.</p>
                        <span class="text-sm text-gray-500 dark:text-gray-500">25 Apr 2025</span>
                    </div>
                </article>

                <!-- Latest 4 -->
                <article class="card">
                    <div class="relative">
                        <div class="aspect-square bg-gradient-to-br from-primary-400/80 to-secondary-600/80"></div>
                        <div class="absolute top-3 left-3">
                            <span class="tag bg-primary-500 text-white">Teknologi</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2 line-clamp-2">Pemula Programming: Panduan Lengkap Belajar Coding</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-3 line-clamp-2">Langkah-langkah memulai perjalanan menjadi seorang programmer dari nol.</p>
                        <span class="text-sm text-gray-500 dark:text-gray-500">22 Apr 2025</span>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
