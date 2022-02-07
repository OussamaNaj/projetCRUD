let myform=document.getElementById("ajoutform")
myform.addEventListener('submit',function (e) {
    let myInputCin=document.getElementById("cin")
    let myInputNom=document.getElementById("nom")
    let myInputPrenom=document.getElementById("prenom")
    let myInputEmail=document.getElementById("email")
    let myInputNaissance=document.getElementById("date_naissance")
    let myInputSalaire=document.getElementById("salaire")
    let myInputDepartement=document.getElementById("departement")

    if((myInputCin.value.trim()).length!=8){
        let myerror= document.getElementById("errorcin")
        myerror.innerHTML="La CIN doit etre de longueur 8";
        myerror.style.color='red';
        e.preventDefault();
    }
    if((myInputCin.value.trim()).length==0){
        let myerror= document.getElementById("errorcin")
        myerror.innerHTML="Champ Cin est Obligatoire";
        myerror.style.color='red';
        e.preventDefault();
    }
    if((myInputDepartement.value.trim()).length==0){
        let myerror= document.getElementById("errordepartement")
        myerror.innerHTML="Vous devez spécifier le departement";
        myerror.style.color='red';
        e.preventDefault();
    }
    if(Number(myInputNom.value.trim().charAt(0))){
        let myerror= document.getElementById("errornom")
        myerror.innerHTML="Erreur, le nom ne commence par par un chiffre"
        myerror.style.color='red';
        e.preventDefault();
    }
    if(Number(myInputPrenom.value.trim().charAt(0))){
        let myerror= document.getElementById("errorprenom")
        myerror.innerHTML="Erreur, le prenom ne commence par par un chiffre"
        myerror.style.color='red';
        e.preventDefault();
    }
    function checkEmail(email) {
        var re = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    if(!(checkEmail(myInputEmail.value)) && myInputEmail.value.trim()!='' ){
        let myerror= document.getElementById("erroremail")
        myerror.innerHTML="Adresse e-mail non valide"
        myerror.style.color='red';
        e.preventDefault();
    }
    if((!Number(myInputSalaire.value.trim()) || Number(myInputSalaire.value.trim())<0) && myInputSalaire.value.trim()!='' ){
        let myerror= document.getElementById("errorsalaire")
        myerror.innerHTML="Salaire invalid, Réessayer !!"
        myerror.style.color='red';
        e.preventDefault();
    }


})