const fjalkalimi = document.getElementById('pass');
const emrin = document.getElementById('emri');
const mbiemrin = document.getElementById('mbiemri');
const email = document.getElementById('emaili');
if (fjalkalimi.value === "") {
alert("Ju lutem shkruani Fjalekalimin.");
fjalkalimi.focus();
return false;
}
if (emrin.value === "") {
alert("Ju lutem shkruani Emrin.");
emrin.focus();
return false;
}
if (mbiemrin.value === "") {
    alert("Ju lutem shkruani mbiemrin.");
    mbiemrin.focus();
    return false;
    }

if (email.value === "") {
    alert("Ju lutem shkruani Emailin.");
    email.focus();
    return false;
        }