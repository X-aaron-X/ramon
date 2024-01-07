let partidos = document.querySelectorAll('.valor')

partidos.forEach(partido => {
    let puntos = parseInt(partido.innerHTML);

    if (puntos >= 4){
        partido.style.color = 'green'
        partido.style.background = '#90ee9059'
    }
    else{
        if (isNaN(puntos)){
            partido.style.background = '#3f51b538'
        }
        else{
            partido.style.color = 'red'
            partido.style.background = '#f0808029'
        }
    }
})
