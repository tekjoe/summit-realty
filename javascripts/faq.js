$(() => {
  // FAQ Accordion
  const faqButtons = document.querySelectorAll(".faq");

  faqButtons.forEach((button, idx) => {
    button.addEventListener("click", (e) => {
      button.classList.toggle("active");
      const answer = button.nextElementSibling;
      if (answer.style.maxHeight) {
        answer.style.maxHeight = null;
      } else {
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
    });
  });
});
