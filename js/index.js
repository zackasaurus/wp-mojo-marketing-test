const accordionTabs = document.querySelectorAll('.tab-container');
const accordionContent = document.querySelectorAll('.toggle-menu__content');

accordionTabs.forEach(function(i) {
  // Click target
  i.addEventListener('click', toggleAccordion);
});

function toggleAccordion(e) {
  const el = e.target;
  const index = [...el.parentElement.children].indexOf(el);

  accordionTabs.forEach(function(i) {
    i.classList.remove('tab-container--active');
  });
  accordionContent.forEach(function(i) {
    i.classList.remove('toggle-menu__content--active');
  });

  e.target.classList.add('tab-container--active');
  accordionContent[index].classList.add('toggle-menu__content--active');
}
