const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const contact = document.getElementById('contact');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const date = document.getElementById('date');
const gender = document.getElementById('gender');
const resident = document.getElementById('resident');
const comment = document.getElementById('comment');

const form = document.getElementById('my_form');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = ' ';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
    
};

const validateInputs = () => {
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const contactValue = contact.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    const dateValue = date.value.trim();
    const genderValue = gender.value.trim();
    const residentValue = resident.value.trim();
    const commentValue = comment.value.trim();

    if(fnameValue === ' '){
        setError(fname, 'First name is required');
    } else {
        setSuccess(fname);
    }

    if(lnameValue === ' '){
        setError(lname, 'Last name is required');
    } else {
        setSuccess(lname);
    }

    if(contactValue === ' '){
        setError(contact, 'Contact is required');
    } else {
        setSuccess(contact);
    }

    if(passwordValue === ' '){
        setError(password, 'Password is required');
    } else {
        setSuccess(password);
    }

    if(password2Value === ' '){
        setError(password2, 'Repeat password is required');
    } else {
        setSuccess(password2);
    }

    if(commentValue === ' '){
        setError(comment, 'Comment is required');
    } else {
        setSuccess(comment);
    }

}