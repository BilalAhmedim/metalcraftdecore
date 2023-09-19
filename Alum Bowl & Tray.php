<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alum Bowl & Tray - Metal Craft Decor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&family=Raleway:wght@200;400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe.min.css">

  <link rel="stylesheet" href="./../style.css">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

<body>
<?php include 'nav.php';
$page = 'Alum Bowl & Tray';
$count = 1;
$count_max = 22;
$path = './assets/Alum Bowl & Tray';

?>


<section>
  <div class="container">
    <h1><?php echo $page; ?></h1>
  </div>
  <div class="container gallery-js d-grid">

<?php
while ($count <= $count_max) {
  ?>

    <a href="<?php echo $path . '/1 (' . $count . ').jpg'; ?>"
    data-pswp-width="2000" data-pswp-height="2000"
      data-cropped="true" target="_blank">
      <img src="<?php echo $path . '/1 (' . $count . ').jpg'; ?>"
      alt="<?php echo $page; ?>"
      class="img-fluid" loading="lazy"/>
      <div class="caption"><?php echo $page . '#' . $count; ?></div>
    </a>

<?php
$count++;
}
?>
  </div>
</section>

<script type="module">
  import PhotoSwipeLightbox from 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe-lightbox.esm.min.js';

  const options = {
    //Any element with this class will become an individual gallery
    gallery: '.gallery-js',

    // Your slides will be every <a> tag that is children from .gallery-js
    children: 'a',
    // This module will only load when you click to show the images, making your data bundle lighter
    pswpModule: () => import('https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe.esm.min.js')
  };

  const lightbox = new PhotoSwipeLightbox(options);
lightbox.on('uiRegister', function() {
  lightbox.pswp.ui.registerElement({
    name: 'custom-caption',
    order: 9,
    isButton: false,
    appendTo: 'root',
    html: 'Caption text',
    onInit: (el, pswp) => {
      lightbox.pswp.on('change', () => {
        const currSlideElement = lightbox.pswp.currSlide.data.element;
        let captionHTML = '';
        if (currSlideElement) {
          const hiddenCaption = currSlideElement.querySelector('.caption');
          if (hiddenCaption) {
            // get caption from element with class hidden-caption-content
            captionHTML = hiddenCaption.innerHTML;
          } else {
            // get caption from alt attribute
            captionHTML = currSlideElement.querySelector('img').getAttribute('alt');
          }
        }
        el.innerHTML = captionHTML || '';
      });
    }
  });
});
lightbox.init();

</script>
<?php include 'footer.php';?>