document.addEventListener('DOMContentLoaded', () => {
    
    agregarProyectos();
    darkMode();

})

function darkMode() {

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', () => {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    })

    const btnDarkMode = document.querySelector('#btn-dark');
    btnDarkMode.addEventListener('click', (e) => {
        e.preventDefault();
        document.body.classList.toggle('dark-mode');
    })
}

async function agregarProyectos() {

    const path = '/proyectos.json';

    const respuesta = await fetch(path);
    const proyectos = await respuesta.json();

    agregarHTML(proyectos);
}

function agregarHTML(proyectos) {

    const divProyectos = document.querySelector('.proyectos');
    
    proyectos.forEach(proyecto => {
        const {titulo, imagen, descripcion, link, repositorio} = proyecto;

        const articleProyecto = document.createElement('article');
        articleProyecto.classList.add('card');

        const img = document.createElement('img');
        img.src = `/build/img/${imagen}`;
        img.alt = titulo;
        img.loading = 'lazy';

        const h3 = document.createElement('h3');
        h3.classList.add('titulo-proyecto');
        h3.innerText = titulo;

        const divDescripcion = document.createElement('div');
        divDescripcion.classList.add('descripcion-proyecto');

        const pDescripcion = document.createElement('p');
        pDescripcion.classList.add('texto-proyecto');
        pDescripcion.innerText = descripcion;

        const linkSitio = document.createElement('a');
        linkSitio.href = link;
        linkSitio.classList.add('btn');
        linkSitio.target = '_blank';
        linkSitio.innerText = 'Ir al Sitio';

        const linkRepositorio = document.createElement('a');
        linkRepositorio.href = repositorio;
        linkRepositorio.classList.add('btn');
        linkRepositorio.target = '_blank';
        linkRepositorio.innerText = 'Repositorio';

        divDescripcion.appendChild(pDescripcion);
        divDescripcion.appendChild(linkSitio);
        divDescripcion.appendChild(linkRepositorio);

        articleProyecto.appendChild(img);
        articleProyecto.appendChild(h3);
        articleProyecto.appendChild(divDescripcion);

        // console.log(articleProyecto);

        divProyectos.appendChild(articleProyecto);
    });

}