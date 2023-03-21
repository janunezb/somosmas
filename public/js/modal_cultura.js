$(document).ready(function() {
    
    var $videoSrc;
    
    $('#modal01').on('hide.bs.modal', function (e) {
    
    $("#video").attr('src',$videoSrc);
})
});

// video = document.getElementById ("video");

// function ocultar_video(){
//     video.style.display = "none";
//     video.src = "";
// }

// document.getElementById(".btn-close").addEventListener("click", ocultar_video);