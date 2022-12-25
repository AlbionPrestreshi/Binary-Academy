const fjalkalimi = document.getElementById('pass');
const email = document.getElementById('emaili');

if (fjalkalimi.value === "") {
alert("Ju lutem shkruani Fjalekalimin.");
fjalkalimi.focus();
return false;
}

if (email.value === "") {
    alert("Ju lutem shkruani Emailin.");
    email.focus();
    return false;
        }