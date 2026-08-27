export default function initSticky() {
  $('#header').stickify({
    reverse: true,
    animationDuration: '0.5',
    zIndex: '7',
    offset: 2
  });
}