let animado = document.querySelectorAll(".animado");

function mostrarScroll () {
    let scrolltop = document.documentElement.scrollTop;
    for(var i=0;i<animado.length;i++)
    { let alturaAnimado = animado[i].offsetTop;
        if(alturaAnimado-500<scrolltop)
        {
            animado[i].style.opacity=1;
            animado[i].classList.add('mostrarAbajo')
        }
    }
}
window.addEventListener('scroll',mostrarScroll);
//derecha

let animadoDerecha = document.querySelectorAll(".animadoDerecha");

function mostrarScrollDerecha () {
    let scrolltopDerecha = document.documentElement.scrollTop;
    for(var i=0;i<animadoDerecha.length;i++)
    { let alturaAnimadoDerecha = animadoDerecha[i].offsetTop;
        if(alturaAnimadoDerecha-500<scrolltopDerecha)
        {
            animadoDerecha[i].style.opacity=1;
            animadoDerecha[i].classList.add('mostrarDerecha')
        }
    }
}
window.addEventListener('scroll',mostrarScrollDerecha);

//Header banner
