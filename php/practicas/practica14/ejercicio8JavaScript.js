document.querySelector("button").addEventListener("click", boton => {
    document.querySelectorAll('input[type="date"]').forEach(inputDate => {
        if (!inputDate.value) {
            boton.preventDefault();

            let campo = inputDate.previousElementSibling.previousElementSibling.innerHTML;
            
            inputDate.style.border = "2px solid red";
            inputDate.nextElementSibling.style.display = "flex";
            inputDate.nextElementSibling.innerHTML = `Por favor, ingrese ${campo}`;
        }
        else {
            inputDate.style.border = "2px solid green";
            inputDate.style.backgroundColor = "#00800017";
            inputDate.nextElementSibling.style.display = "none";
        }
    });
});
//     let fechaInicial = document.querySelector('input[name=fechaInicial]').value
//     let fechaFinal = document.querySelector('input[name=fechaFinal]').value

//     document.querySelectorAll('input[type="date"]').forEach(input => {
//         let fecha = input.value

//         if (!fecha) {
//             event.preventDefault()

//             input.style.border = "1px solid red";
//             document.getElementById('fechaErrorInicial').style.display = "flex";
//             document.getElementById('fechaErrorInicial').textContent = 'Introduce una fecha Inicial';
//         }
//         else {
//             input.style.border = "1px solid black";
//             document.getElementById('fechaError').style.display = "none";
//         }
//     })

//     // if (!fechaInicial) {
//     //     event.preventDefault()
//     //     document.querySelector('input[name=fechaInicial]').style.border = "1px solid red";
//     //     document.getElementById('fechaInicialError').textContent = 'Introduce una fecha Inicial';
//     //     document.getElementById('fechaInicialError').style.display = "flex";
//     // }
//     // else {
//     //     document.querySelector('input[name=fechaInicial]').style.border = "1px solid black";
//     //     document.getElementById('fechaInicialError').style.display = "none";
//     // }

//     // if (!fechaFinal) {
//     //     event.preventDefault()
//     //     document.querySelector('input[name=fechaFinal]').style.border = "1px solid red";
//     //     document.getElementById('fechaFinError').textContent = 'Introduce una fecha Final';
//     //     document.getElementById('fechaFinError').style.display = "flex";
//     // }
//     // else {
//     //     document.querySelector('input[name=fechaFinal]').style.border = "1px solid black";
//     //     document.getElementById('fechaInicialError').style.display = "none";
//     // }
// });