// CURSOR FOLLOWER
const isTouchDevice = 'ontouchstart' in window;
const createCursorFollower = () => {
  const $el = document.querySelector('.cursor-follower');
window.addEventListener('mousemove', (e) => {
  const { target, clientX, clientY } = e;
  const isTargetLinkOrBtn = target?.closest('a') || target?.closest('button');
  
  gsap.to('.cursor-follower', {
    x: clientX - 10,
    y: clientY - 10,
    duration: 0.8,
    ease: 'power4',
    opacity: isTargetLinkOrBtn ? 0.6 : 1,
    transform: `scale(${isTargetLinkOrBtn ? 3 : 1})`,
  });
});

  document.addEventListener('mouseleave', (e) => {
    gsap.to($el, {
      duration: 0.7,
      opacity: 0,
    });
  });
};
if (!isTouchDevice) {
  createCursorFollower();
}