$(document).ready(function() {

    $("#modal01").on('hide.bs.modal', function(){
        document.querySelector('video').pause();
      });    
    
});