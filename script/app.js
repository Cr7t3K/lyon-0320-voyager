 /* Animation de texte header*/

document.addEventListener('DOMContentLoaded', function () {
    const planetes = ["Arrakis", "Pandora", "Coruscant","Mars"];
    const change = document.getElementById('changeText');
    let i = 0;
    const intervalId = setInterval(function () {
        change.innerHTML = planetes[i];
        change.classList.add("slide")
        i++;
        if (i > 3) {
            i = 0;
        }
    }, 3000)
})

 /* Animation de fusée*/



 