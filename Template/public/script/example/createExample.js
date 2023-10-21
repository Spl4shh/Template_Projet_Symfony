const form = document.querySelector("#form-example");

/**
 * To verify if the data entered is valid or not
 * @returns {boolean}
 */
function formVerify() {
    let message = "";
    const valueName = form.name.value;

    if (valueName.trim() === "") {
        message += "Le nom doit être renseigné\n"
    }

    if (message !== "") {
        confirm(message);
        return false
    } else {
        return true
    }
}