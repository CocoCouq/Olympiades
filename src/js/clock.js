// Clock
function timer() {
    let time = Math.trunc(new Date().getTime() / 1000)
    let d_day = Math.trunc(new Date('07/25/2020').getTime() / 1000)
    let diff = d_day - time > 0 ? d_day - time : 0;
    let seconds = diff % 60
    let minutesSup = Math.trunc(diff / 60)
    let minutes = minutesSup % 60
    let hours = Math.trunc(minutesSup / 60)
    let days = Math.trunc(hours / 24)
    hours = hours % 24

    let tabDay = getByTen(days)
    let tabHour = getByTen(hours)
    let tabMin = getByTen(minutes)
    let tabSec = getByTen(seconds)

    document.getElementById('clock1').innerText = tabDay[0]
    document.getElementById('clock2').innerText = tabDay[1]
    document.getElementById('clock3').innerText = tabHour[0]
    document.getElementById('clock4').innerText = tabHour[1]
    document.getElementById('clock5').innerText = tabMin[0]
    document.getElementById('clock6').innerText = tabMin[1]
    document.getElementById('clock7').innerText = tabSec[0]
    document.getElementById('clock8').innerText = tabSec[1]

    window.setTimeout("timer()", 999);
}

function getByTen(number) {
    let tab = []
    tab[0] = Math.trunc(number / 10)
    tab[1] = number % 10
    return tab
}

timer()

const whatIsIt = function whatIsIt() {
    alert('Tu copierais n\'importe quoi, t\'es un gland')
}

