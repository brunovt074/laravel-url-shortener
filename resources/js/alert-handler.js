document.addEventListener('DOMContentLoaded', function(){

    document.addEventListener('click', function(event){
        const successMessage = document.getElementById('successMessage');
        const badUrlMessage = document.getElementById('badUrlMessage');
        const isOutsideClick = !successMessage.contains(event.target);
        const isInputClick = event.target.tagName === 'INPUT';

        if(isOutsideClick && !isInputClick){
            successMessage.style.display = 'none';
            badUrlMessage.style.display = 'none';
        }
    });
});