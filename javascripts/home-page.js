const $ = jQuery;

$(() => {
  new Glide(".glide", {
    autoplay: 6000,
    breakpoints: {
      768: { perView: 1 },
    },
    perView: 1,
    type: "carousel",
  }).mount();
});
