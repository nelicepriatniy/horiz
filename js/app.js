
const section = document.querySelector('.h-scroll');
const content = document.querySelector('.h-scroll__content');

window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const start = section.offsetTop;
  const end = start + section.offsetHeight - window.innerHeight;


  if (scrollTop >= start && scrollTop <= end) {
    const progress = (scrollTop - start) / (end - start);
    const maxScroll = content.scrollWidth - window.innerWidth;
    content.style.transform = `translateX(-${progress * maxScroll}px)`;
  }
});

const menu = document.querySelector('.menu-popup')
const openMenu = document.querySelectorAll('.open-menu')

openMenu.forEach((el) => {
  el.onclick = () => {
    menu.classList.add('active')
  }
})

menu.addEventListener('click', function (e) {
  if (!e.target.classList.contains('menu-list-item')) {
    menu.classList.remove('active')
  }
})
