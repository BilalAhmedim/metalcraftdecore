<?php include 'header.php';
$page = 'Menorah';
$count = 1;
$count_max = 20;
$path = './assets/Menorah';

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