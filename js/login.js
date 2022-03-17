const inputs = docment.qeurySelectorAll('input');

inputs.forEach(elem => {
    elem.onkeyUp = function () {
        if (document.contact.message.value.length > 4) {
            Style.border = "1px solid red"
            return false;
        } else {
            Style.border = "none"
        }
    }
});