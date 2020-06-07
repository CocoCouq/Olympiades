// Materialize
document.addEventListener('DOMContentLoaded', function() {
    let sidenav = document.querySelectorAll('.sidenav')
    M.Sidenav.init(sidenav)
    let dropNav = document.querySelectorAll('.dropNav')
    M.Dropdown.init(dropNav, {
        hover: true
    })
    let dropProofs = document.querySelectorAll('.dropProofs')
    M.Dropdown.init(dropProofs, {
        coverTrigger: false,
        onOpenStart: startDropProofs,
        onCloseStart: closeDropProofs
    })
    let collapse = document.querySelectorAll('.collapsible')
    M.Collapsible.init(collapse)
    let box = document.querySelectorAll('.materialboxed')
    M.Materialbox.init(box)
    let modal = document.querySelectorAll('.modal')
    M.Modal.init(modal)
})

// chartes.php
if (document.getElementById('fakeSubmit')) {
    document.getElementById('fakeSubmit').addEventListener('click', function (event) {
        M.toast({
            html: '<div class="row">' +
                '<h4 class="red-text col s12 center-align text-30">HOP, à la poubelle !</h4> ' +
                '<h5 class="col s12 center-align">Tu penses vraiment que ton avis compte pour nous ?!</h5>' +
                '<div class="col s12 center-align"><i class="large material-icons red-text">delete</i></div> ' +
                '</div>'
        }, false, 12000)
        document.getElementById('name').value = ""
        document.getElementById('textarea').value = ""
    })
}

function startDropProofs() {
    document.getElementById('arrowProofs').textContent = 'close'
}

function closeDropProofs() {
    document.getElementById('arrowProofs').textContent = 'arrow_downward'
}

// ADMIN COPY NUMBERS
if (document.getElementById('copyNum')) {
    const btnCopy = document.getElementById('copyNum')
    btnCopy.addEventListener('click', function () {
        let toCopy = document.getElementById('toCopy')
        toCopy.select()
        if (document.execCommand('copy')) {
            btnCopy.classList.add('blue')
            btnCopy.innerHTML = '<i class="material-icons">content_copy</i>COPIÉ !'
        }
    })
}

// Btn Return
if (document.getElementById('btnReturn')) {
    document.getElementById('btnReturn').addEventListener("click", function (event) {
        window.history.back();
    })
}
