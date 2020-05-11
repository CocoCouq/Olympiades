let filterVide = /(^$)/;
let filterPseudo = /(^[\wéèêëûüîïôàçæœ\s\-.'"!]{4,20}$)/i;
let filterName = /(^[a-zéèêëôœîïûüàáâæç'-]+\s*)$/i;
let filterMail = /(^[\w.-]+@[\w.-]+\.[\w]{2,4}\s*)$/;
let filterPhone = /(^(06|07)\d{8}$)/;


let element = document.getElementById('btnAddPlayer');


element.addEventListener("click", function verify(event)
{
//  Name
    let name = document.getElementById("nameInput").value;
    if (!filterName.test(name))
    {
        if (!filterVide.test(name))
            document.getElementById("missName").textContent = "Je connais personne avec ce patrônime";
        else
            document.getElementById("missName").textContent = "Il faut nous dire qui tu es";
        event.preventDefault();
    }
    else
        document.getElementById("missName").innerHTML= "<h6 class=\"green-text\">OK</h6>";

//  First name
    let fname = document.getElementById("fnameInput").value;
    if (!filterName.test(fname))
    {
        if (!filterVide.test(fname))
            document.getElementById("missFName").textContent = "C'est pas ton prénom !!";
        else
            document.getElementById("missFName").textContent = "Donnes ton prénom copain";
        event.preventDefault();
    }
    else
        document.getElementById("missFName").innerHTML= "<h6 class=\"green-text\">OK</h6>";

    //  Mail
    let mail = document.getElementById("mailInput").value;
    if (!filterMail.test(mail))
    {
        if (!filterVide.test(mail))
            document.getElementById("missMail").textContent = "Ca ressemble pas à un email ça...";
        else
            document.getElementById("missMail").textContent = "Pas de spam, c'est promis mais il nous la faut";
        event.preventDefault();
    }
    else
        document.getElementById("missMail").innerHTML= "<h6 class=\"green-text\">OK</h6>";

    //  Pseudo
    let pseudo = document.getElementById("pseudoInput").value;
    if (!filterPseudo.test(pseudo))
    {
        if (!filterVide.test(pseudo))
            document.getElementById("missPseudo").textContent = "Ne peut contenir que des lettres, des chiffres, des espaces et les caractères . , - \' \" ou !";
        else
            document.getElementById("missPseudo").textContent = "Allé, trouves un nom";
        event.preventDefault();
    }
    else
        document.getElementById("missPseudo").innerHTML= "<h6 class=\"green-text\">OK</h6>";

    //  Phone
    let phone = document.getElementById("phoneInput").value;
    if (!filterPhone.test(phone))
    {
        if (!filterVide.test(phone))
            document.getElementById("missPhone").textContent = "Juste ton numéro de portable (0600000000)";
        else
            document.getElementById("missPhone").textContent = "Donnes au moins celui de ta mère";
        event.preventDefault();
    }
    else
        document.getElementById("missPhone").innerHTML= "<h6 class=\"green-text\">OK</h6>";

    if (!(document.getElementById('accept').checked))
    {
        document.getElementById("missAccept").textContent = "Acceptes le traitement du formulaire";
        event.preventDefault();
    }
    else
        document.getElementById("missAccept").innerHTML = "";

    //  Password
    let pwd = document.getElementById("pwd1").value
    let pwd_conf = document.getElementById('pwd2').value
    if (pwd !== pwd_conf || pwd.length < 8)
    {
        if (pwd !== pwd_conf)
            document.getElementById("missPwd").textContent = "Les mots de passes ne sont pas identiques";
        else
            document.getElementById("missPwd").textContent = "Le mot de passe doit contenir au moins 8 caractères";
        event.preventDefault();
    }
    else
        document.getElementById("missPwd").innerHTML= "<h6 class=\"green-text\">OK</h6>";

    //  Description
    let description = document.getElementById("description").value
    if (description.length < 5)
        document.getElementById("missDesc").textContent = "Pas assez inspiré";
    else if (description.length >= 50)
        document.getElementById("missDesc").innerHTML= "Trop inspiré (50 caractères max)";
    else
        document.getElementById("missDesc").innerHTML= "<h6 class=\"green-text\">OK</h6>";

});


// Pseudo
let elementPseudo = document.getElementById('pseudoInput');

elementPseudo.addEventListener("input", function nom(event){
    let pseudo = document.getElementById("pseudoInput").value;
    let len = pseudo.length;

    if (len < 4)
        document.getElementById("missPseudo").textContent = `${4 - len} caractères minimum`;
    else if (len >= 20)
        document.getElementById("missPseudo").textContent = `${len} caractères (20max)`;
    else
        document.getElementById("missPseudo").textContent = "<h6 class=\"green-text\">OK</h6>";
});

// Description
let elementSlogan = document.getElementById('description');

elementSlogan.addEventListener("input", function nom(event){
    let slogan = document.getElementById("description").value;
    let len = slogan.length;

    if (len < 5)
        document.getElementById("missDesc").textContent = `${5 - len} caractères minimum`;
    else if (len >= 50)
        document.getElementById("missDesc").textContent = `${len} caractères (50max)`;
    else
        document.getElementById("missDesc").textContent = "<h6 class=\"green-text\">OK</h6>";
});
