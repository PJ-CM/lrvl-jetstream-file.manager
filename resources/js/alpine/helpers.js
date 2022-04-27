//alert("Aloha!!");

// Necesario para el uso de @entangle
import "alpinejs";
// Este IMPORT no arregla el ERROR de que no acepte la @

/**/
window.helpers = function (config) {
    return {
        // open: false,
        //open: @entangle('open'),
        open: config.value,
        textButton: "Crear",

        toggleFormNewReg(arrTextButton) {
            this.showHide();

            this.textButton = this.open ? arrTextButton[0] : arrTextButton[1];
        },
        //isOpen() {
        //    return this.open === true;
        //},
        showHide() {
            this.open = !this.open;
        },
    };
};
