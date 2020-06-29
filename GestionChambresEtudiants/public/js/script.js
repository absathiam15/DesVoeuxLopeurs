const form = document.getElementById('form');
const prenom = document.getElementById('prenom');
const nom = document.getElementById('nom');
const date = document.getElementById('date');
const tel = document.getElementById('tel');
const email = document.getElementById('email');
const type = document.getElementById('type');
const ajout = document.getElementById('ajout');

const numChambre = document.getElementById('numChambre');
const labelChambre = document.getElementById('label');
numChambre.setAttribute("class","d-none");
labelChambre.setAttribute("class","d-none");
const numBatiment = document.getElementById('numBatiment');
const typeChambre = document.getElementById('typeChambre');

var error;
//Fonctions
function target(){
    const inputs = document.getElementsByTagName("input");
    for(input of inputs){
        input.addEventListener("keyup",function(e){
            if(e.target.hasAttribute("name")){
                var small = e.target.getAttribute("name");
                document.getElementById('error-'+small).innerText = ""
            }
        })
    }
}
function checkRequired(inputArray) {
    error = false;
    inputArray.forEach(input => {
        if(input.value.trim() === ''){
            showError(input, `${getFiedName(input)} est obligatoire`);  
            error = true;  
        }else{
            showSuccess(input);
        }
    });
}
//
function showError(input, message) {
    
    input.className = 'border border-danger text-dark';
    const small  = document.getElementById('error-'+input.name);
    small.innerText = message;
}
//
function showSuccess(input) {
    input.className = 'border border-success';
    const small  = document.getElementById('error-'+input.name);
    small.innerText = '';
}
//
function getFiedName(input){
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}
//
function ajouterChamps(){
    var formulaire = document.getElementById('formulaire');
    if (type.value) {
        if(type.value == 'NonBoursier'){
            formulaire.setAttribute("class","form-group text-right input-inscript");
            formulaire.innerText = '';
            label = document.createElement("label");
            label.innerHTML = "Adresse";
            label.setAttribute("class","text-label");
            formulaire.appendChild(label);
            champ = document.createElement("input");
            champ.setAttribute("type","text"); 
            champ.setAttribute("name","adresse");
            champ.setAttribute("id","adresse");
            formulaire.appendChild(champ);
            formulaire.appendChild(document.createElement("br"));
            err = document.createElement("small");
            err.setAttribute("id","error-adresse");
            err.setAttribute("class","text-info");
            formulaire.appendChild(err);
            const adresse = document.getElementById('adresse');
        }
        else{
                formulaire.setAttribute("class","form-group text-right input-inscript-bourse");
                formulaire.innerText = '';
                label = document.createElement("label");
                label.innerHTML = "Bourse";
                label.setAttribute("class","text-label");
                formulaire.appendChild(label);
                champ = document.createElement("select");
                champ.setAttribute("class","text-dark");
                champ.setAttribute("name","bourse");
                champ.setAttribute("id","bourse");
                Option1 =  document.createElement("option");
                Option1.setAttribute("value","DB");
                Option1.innerHTML = "DB";
                Option2 =  document.createElement("option");
                Option2.setAttribute("value","BE");
                Option2.innerHTML = "BE";
                champ.appendChild(Option1);
                champ.appendChild(Option2);
                formulaire.appendChild(champ);
                formulaire.appendChild(document.createElement("br"));
                err = document.createElement("small");
                err.setAttribute("id","error-bourse");
                err.setAttribute("class","text-info");
                formulaire.appendChild(err);
                if (type.value == 'Boursier_Logé') {
                    labelChambre.setAttribute("class","text-label");
                    numChambre.setAttribute("class","text-dark mdb-select md-form");
                }
                const bourse = document.getElementById('bourse');
        }
    }
}

//Events
form.addEventListener('submit',(e)=>{

    if (form.name === 'form-etudiant') {
        checkRequired([prenom,nom,date,tel,email,type]);
    }
    else{
        checkRequired([numBatiment,typeChambre]);
    }
    if (type.value) {
        if (type.value === "NonBoursier") {
            checkRequired([adresse]);
        }else {
            checkRequired([bourse]);
        }
    }
    target();
    if (error) {
        e.preventDefault();
    }
});
ajout.addEventListener('click',(e)=>{
    checkRequired([type]);
    ajouterChamps();
});