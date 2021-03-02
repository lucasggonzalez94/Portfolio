document.addEventListener('DOMContentLoaded', () => {

    window.addEventListener('scroll', () => {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        let position = scrollTop * 0.10;

        // console.log(position)

        const body = document.querySelector('body');
        body.style.backgroundPosition = `0 -${position}px`;
    })
})