document.addEventListener('DOMContentLoaded', function(){
    let badUrlMessage = document.getElementById('badUrlMessage');

    if(badUrlMessage){
        document.addEventListener('click', function(event){
            if (!badUrlMessage.contains(event.target)) {
                badUrlMessage.style.display = 'none';    
            }
        });
    }    
});