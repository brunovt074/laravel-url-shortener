document.addEventListener('DOMContentLoaded', function(){

    document.addEventListener('click', function(event){
        
        const badUrlMessage = document.getElementById('badUrlMessage');
        const isOutsideClick = !badUrlMessage.contains(event.target);
        const isInputClick = event.target.tagName === 'INPUT';

        if(isOutsideClick && !isInputClick){            
            badUrlMessage.style.display = 'none';
        }
    });
});