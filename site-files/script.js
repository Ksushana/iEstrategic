const form = document.querySelector('.form');
const username = document.getElementById('name');
const lastname = document.getElementById('lastName');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const checkbox = document.getElementById('legal');

form.addEventListener('submit', e => {
    e.preventDefault();
    validate();
});

const setError = (element, message) => {
    const inputParent = element.parentElement;
    const errorSpan = inputParent.querySelector('.error__note');
    errorSpan.innerText = message;
    inputParent.classList.add('error');
    inputParent.classList.remove('success')
}

const setSuccess = element => {
    const inputParent = element.parentElement;
    const errorSpan = inputParent.querySelector('.error__note');
    errorSpan.innerText = '';
    inputParent.classList.add('success');
    inputParent.classList.remove('error');
};

const isValidEmail = email => {
    const emailRule = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailRule.test(String(email).toLowerCase());
}

const isValidPhone = phone => {
    const phoneRule = /^(0034|\+34)?(\d\d\d)-? ?(\d\d)-? ?(\d)-? ?(\d)-? ?(\d\d)$/;
    return phoneRule.test(String(phone).toLowerCase());
}

const validate = () => {
    const usernameValue = username.value.trim();
    const lastnameValue = lastname.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();

    if (usernameValue === '') {
        setError(username, 'Indique su nombre');
    } else {
        setSuccess(username);
    }

    if (lastnameValue === '') {
        setError(lastname, 'Indique sus apellidos');
    } else {
        setSuccess(lastname);
    }

    if (emailValue === '') {
        setError(email, 'Indique su email');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'El formato es incorrecto');
    } else {
        setSuccess(email);
    }

    if (phoneValue === '') {
        setError(phone, 'Indique su telefono');
    } else if (!isValidPhone(phoneValue)) {
        setError(phone, 'El formato es incorrecto');
    } else {
        setSuccess(phone);
    }

    if (checkbox.checked) {
        setSuccess(legal);
    } else {
        setError(legal, 'Campo obligatorio');
    }
};

const scrollBtn = document.querySelector('.hero__arrow');
const products = document.querySelector('.products');
scrollBtn.addEventListener("click", () => {
    products.scrollIntoView({behavior: "smooth", inline: "nearest"});
});