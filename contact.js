const input_name = document.querySelector('form [name="name"]');
const input_mail = document.querySelector('form [name="email"]');
const textarea = document.querySelector('form [name="mensaje"]');
const form = document.querySelector('form');

const handle_focus = (e) => {
    const label = e.target.nextElementSibling;
    label.style.fontSize = "0.75rem";
    label.style.color = "var(--verde)";
    label.style.transform = "translateY(-0.9688rem)";

}

const handle_blur = (e) => {
    console.log(e.target.value)
    const label = e.target.nextElementSibling;
    if (!e.target.value) {
        label.style.fontSize = "1rem";
        label.style.color = "rgba(0 0 0 / 30%)";
        label.style.transform = "translateY(0)";
    }
}

input_name.addEventListener('focus', handle_focus);
input_mail.addEventListener('focus', handle_focus);
textarea.addEventListener('focus', handle_focus);

input_name.addEventListener('blur', handle_blur);
input_mail.addEventListener('blur', handle_blur);
textarea.addEventListener('blur', handle_blur);

const submit = (e) => {
    e.preventDefault();
    input_name.value = "";
    input_mail.value = "";
    textarea.value = "";
    alert("Esta es una página de prueba")
}

form.addEventListener('submit', submit);
