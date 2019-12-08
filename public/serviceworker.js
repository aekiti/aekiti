var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
  '/offline',
  '/assets/css/styles.css',
  '/assets/css/responsive.css',
  '/assets/css/plugins/bootstrap.min.css',
  '/assets/dashboard/plugins/@fortawesome/fontawesome-free/css/all.min.css',
  '/assets/css/plugins/owl.carousel.min.css',
  '/assets/js/custom.js',
  '/assets/js/plugins/bootstrap.bundle.min.js',
  '/assets/js/plugins/jquery.easing.min.js',
  '/assets/js/plugins/jquery.magnific-popup.min.js',
  '/assets/js/plugins/jquery.min.js',
  '/assets/js/plugins/owl.carousel.min.js',
  '/assets/js/plugins/swiper.min.js',
  '/assets/images/web/logo-white.png',
  '/assets/images/web/footer-logo.png',
  '/assets/images/web/diversity.png',
  '/assets/images/web/technologies/smart-contracts.png',
  '/assets/images/web/technologies/state-channels.png',
  '/assets/images/web/technologies/oracles.png',
  '/assets/images/web/technologies/naming-system.png',
  '/assets/images/web/team/emmanuel_joseph_jet.png',
  '/assets/images/web/team/jesulonimi_akingbesote.png',
  '/assets/images/web/team/moritz_stellmacher.png',
  '/assets/images/web/team/stephen_sunday.png',
  '/assets/images/icons/icon-48x48.png',
  '/assets/images/icons/icon-72x72.png',
  '/assets/images/icons/icon-96x96.png',
  '/assets/images/icons/icon-128x128.png',
  '/assets/images/icons/icon-144x144.png',
  '/assets/images/icons/icon-152x152.png',
  '/assets/images/icons/icon-192x192.png',
  '/assets/images/icons/icon-384x384.png',
  '/assets/images/icons/icon-512x512.png',
];

// Cache on install
self.addEventListener("install", event => {
  this.skipWaiting();
  event.waitUntil(
    caches.open(staticCacheName)
    .then(cache => {
      return cache.addAll(filesToCache);
    })
  )
});

// Clear cache on activate
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames
        .filter(cacheName => (cacheName.startsWith("pwa-")))
        .filter(cacheName => (cacheName !== staticCacheName))
        .map(cacheName => caches.delete(cacheName))
      );
    })
  );
});

// Serve from Cache
self.addEventListener("fetch", event => {
  event.respondWith(
    caches.match(event.request)
    .then(response => {
      return response || fetch(event.request);
    })
    .catch(() => {
      return caches.match('offline');
    })
  )
});
