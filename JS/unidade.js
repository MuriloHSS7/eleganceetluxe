const textarea = document.getElementById('unidade');

textarea.addEventListener('input', function () {
    this.style.height = 'auto';
    this.style.height = `${this.scrollHeight}px`;
    this.value = this.value.replace(/[^0-9]/g, '');
});

textarea.addEventListener('keypress' , function(event){
    const charCode = event.charCode || event.keyCode;
    if (charCode !== 0 && (charCode < 48 || charCode > 57)){
        event.preventDefault();
    }
});