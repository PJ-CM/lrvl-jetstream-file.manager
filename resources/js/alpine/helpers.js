//alert("Aloha!!");

/**/
window.helpers = function () {
    return {
        open: false,
        textButton: "Crear",

        toggleFormNewReg(arrTextButton) {
            this.open = !this.open;

            this.textButton = this.open ? arrTextButton[0] : arrTextButton[1];
        },
        //isOpen() {
        //    return this.open === true;
        //},
    };
};
