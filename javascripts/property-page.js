$(() => {
  // Create and mount the thumbnails slider.
  var secondarySlider = new Splide("#secondary-slider", {
    rewind: true,
    fixedWidth: 200,
    fixedHeight: 128,
    isNavigation: true,
    gap: 10,
    focus: "center",
    pagination: false,
    cover: true,
    breakpoints: {
      768: {
        fixedWidth: 200,
        fixedHeight: 100,
      },
    },
  }).mount();

  // Create the main slider.
  var primarySlider = new Splide("#primary-slider", {
    type: "fade",
    heightRatio: 0.5,
    pagination: false,
    arrows: false,
    cover: true,
  });

  // Set the thumbnails slider as a sync target and then call mount.
  primarySlider.sync(secondarySlider).mount();
});
