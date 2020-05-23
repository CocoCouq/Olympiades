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
        M.toast({html: '<div class="row">' +
                '<h4 class="red-text col s12 center-align text-30">HOP, à la poubelle !</h4> ' +
                '<div class="col s12 center-align"><i class="large material-icons red-text">delete</i></div> ' +
                '</div>'})
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
