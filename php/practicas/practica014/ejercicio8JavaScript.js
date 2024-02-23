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