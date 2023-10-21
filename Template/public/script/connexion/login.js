function verifyInputLogin() {
    const form = document.querySelector("#form-login");

    let valueLogin = form.login.value;
    let valuePassword = form.password.value;

    if (valueLogin === "" || valuePassword === "" ) {
        confirm("Merci de saisir tout les champs")
        return false;
    } else {
        return true;
    }
}