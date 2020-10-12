function checkInputs() {
    // remove blanks
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    
    if(usernameValue === '') {
        setErrorFor(username, 'Enter a username');
    } else {
        setSuccessFor(username);
    }
    
    if(emailValue === '') {
        setErrorFor(email, 'Enter an email');
    } else if (isEmail(emailValue)) {
        setSuccessFor(email);
    } else {
        setErrorFor(email, 'Not a valid SRM email');
    }

    if(phoneValue === '') {
        setErrorFor(phone, 'Enter a phone number');
    } else if (isphone(phoneValue)) {
        setSuccessFor(phone);
    } else {
        setErrorFor(phone, 'Not a valid phone number');
    }
    
    if(passwordValue === '') {
        setErrorFor(password, 'Enter a password');
    } else if(ispass(passwordValue)) {
        setSuccessFor(password);
    } else {
        setErrorFor(password, 'Put 8 letters, upper,lower and atl one number');
    }
    
    if(password2Value === '') {
        setErrorFor(password2, 'Re-type your password');
    } else if(passwordValue !== password2Value) {
        setErrorFor(password2, 'Password does not match');
    } else{
        setSuccessFor(password2);
    }
}
function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(email)){
        //SRM email valid
        if(email.indexOf("@srmist.edu.in", email.length - "@srmist.edu.in".length) !== -1){
            return true;
        }
    }
}
function isphone(phone) {
    return /^\d{10}$/.test(phone);
}

function ispass(password) {
    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(password)
}