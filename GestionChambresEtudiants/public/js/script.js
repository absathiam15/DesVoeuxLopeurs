const form = document.getElementById('form');
const prenom = document.getElementById('prenom');
const nom = document.getElementById('nom');
const date = document.getElementById('date');
const tel = document.getElementById('tel');
const email = document.getElementById('email');
const type = document.getElementById('type');

const numChambre = document.getElementById('numChambre');
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
    
    input.className = 'border border-danger';
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

//Events
form.addEventListener('submit',(e)=>{

    if (form.name === 'form-etudiant') {
        checkRequired([prenom,nom,date,tel,email,type]);
    }
    else{
        checkRequired([numBatiment,typeChambre]);
    }
    target();
    if (error) {
        e.preventDefault();
    }
});