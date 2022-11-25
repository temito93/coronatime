const email = document.getElementById("email");
const username = document.getElementById("username");
const password = document.getElementById("password");
const repeat_password = document.getElementById("confirm_password");

if(username) {
    username.addEventListener("keyup", (e) => {
        if (e.target.value.length > 3) {
            e.target.classList.remove("border-custom-neutral-200");
            e.target.classList.add("border-custom-green");
            e.target.classList.add("border-solid");
            e.target.nextSibling.nextSibling.classList.remove("hidden");
        } else {
            e.target.classList.add("border-custom-neutral-200");
            e.target.classList.remove("border-custom-green");
            e.target.classList.remove("border-solid");
            e.target.nextSibling.nextSibling.classList.add("hidden");
        }
    });
}

if(password) {
    password.addEventListener("keyup", (e) => {
        if (e.target.value.length > 3) {
            e.target.classList.remove("border-custom-neutral-200");
            e.target.classList.add("border-custom-green");
            e.target.classList.add("border-solid");
            e.target.nextSibling.nextSibling.classList.remove("hidden");
        } else {
            e.target.classList.add("border-custom-neutral-200");
            e.target.classList.remove("border-custom-green");
            e.target.classList.remove("border-solid");
            e.target.nextSibling.nextSibling.classList.add("hidden");
        }
    });
}


if (email) {
    email.addEventListener("keyup", (e) => {
        if (
            e.target.value.length > 5 &&
            e.target.value.includes("@") &&
            e.target.value.includes(".")
        ) {
            e.target.classList.remove("border-custom-neutral-200");
            e.target.classList.add("border-custom-green");
            e.target.classList.add("border-solid");
            e.target.nextSibling.nextSibling.classList.remove("hidden");
        } else {
            e.target.classList.add("border-custom-neutral-200");
            e.target.classList.remove("border-custom-green");
            e.target.classList.remove("border-solid");
            e.target.nextSibling.nextSibling.classList.add("hidden");
        }
    });
}

if (repeat_password) {
    repeat_password.addEventListener("keyup", (e) => {
        if (e.target.value === password.value) {
            e.target.classList.remove("border-custom-neutral-200");
            e.target.classList.add("border-custom-green");
            e.target.classList.add("border-solid");
            e.target.nextSibling.nextSibling.classList.remove("hidden");
        } else {
            e.target.classList.add("border-custom-neutral-200");
            e.target.classList.remove("border-custom-green");
            e.target.classList.remove("border-solid");
            e.target.nextSibling.nextSibling.classList.add("hidden");
        }
    });
}
