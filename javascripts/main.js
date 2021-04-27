const $ = jQuery;
$(() => {
  const closeButton = document.getElementById("close-menu");
  const openButton = document.getElementById("open-menu");
  const expandButtons = document.querySelectorAll(".expand-menu");

  openButton.addEventListener("click", () => {
    const tl = gsap.timeline();
    tl.to("#mobile-nav", { right: 0, duration: 0.3 }).to("#close-menu", {
      opacity: 1,
      duration: 0.5,
    });
  });

  closeButton.addEventListener("click", () => {
    const tl = gsap.timeline();
    tl.to("#mobile-nav", { right: -260, duration: 0.3 }).to("#close-menu", {
      opacity: 0,
      duration: 0.5,
    });
  });

  const timelines = [];

  expandButtons.forEach((button) => {
    const tl = gsap.timeline();
    tl.reversed(true);
    const subMenu = button.nextElementSibling;
    tl.to(subMenu, {
      display: "block",
      height: "100%",
      opacity: 1,
      duration: 0.33,
      ease: "power1.in",
    });
    timelines.push(tl);
  });

  const animateMenu = (index) => {
    timelines[index].reversed(!timelines[index].reversed());
  };

  expandButtons.forEach((button, index) =>
    button.addEventListener("click", () => {
      animateMenu(index);
    })
  );
});
