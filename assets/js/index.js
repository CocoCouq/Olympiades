// Materialize
document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.sidenav')
    let instances = M.Sidenav.init(elems)
});

document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.modal')
    let instances = M.Modal.init(elems)
});

document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.carousel');
    let instances = M.Carousel.init(elems, {
        fullWidth: true,
        indicators: true
    });
});

// Clock
function writeTime() {
    let time = Math.trunc(new Date().getTime() / 1000)
    let d_day = Math.trunc(new Date('05/11/2020').getTime() / 1000)
    let diff = d_day - time
    let seconds = diff % 60
    let minutesSup = Math.trunc(diff / 60)
    let minutes = minutesSup % 60
    let hours = Math.trunc(minutesSup / 60)
    let days = Math.trunc(hours / 24)
    hours = hours % 24

    let tabDay = []
    let tabHour = []
    let tabMin = []
    let tabSec = []

    function getByTen(number) {
        let tab = []
        tab[0] = Math.trunc(number / 10)
        tab[1] = number % 10
        return tab
    }

    tabDay = getByTen(days)
    tabHour = getByTen(hours)
    tabMin = getByTen(minutes)
    tabSec = getByTen(seconds)


    let dayOne = document.getElementById('clock1')
    let dayTwo = document.getElementById('clock2')
    let hourOne = document.getElementById('clock3')
    let hourTwo = document.getElementById('clock4')
    let minuteOne = document.getElementById('clock5')
    let minuteTwo = document.getElementById('clock6')
    let secondOne = document.getElementById('clock7')
    let secondTwo = document.getElementById('clock8')

    dayOne.innerText = tabDay[0]
    dayTwo.innerText = tabDay[1]
    hourOne.innerText = tabHour[0]
    hourTwo.innerText = tabHour[1]
    minuteOne.innerText = tabMin[0]
    minuteTwo.innerText = tabMin[1]
    secondOne.innerText = tabSec[0]
    secondTwo.innerText = tabSec[1]

    setTimeout("writeTime()", 999);
}

writeTime();
