const titreSpans = document.querySelectorAll('h2 span');
const li = document.querySelectorAll('.puces');

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, {top: -50, opacity: 0, ease : "power2.out"}, 0.3)
    .staggerFrom(li,  1, {top: -50, opacity: 0, ease : "power2.out"}, 0.3, '-=1')

    
    TL.play();
})