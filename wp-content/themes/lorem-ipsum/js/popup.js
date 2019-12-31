var popup = document.getElementById("form-popup");
var button = document.getElementById("open-popup");

button.onclick = function() {
    popup.style.visibility = "visible";
    popup.style.opacity = "1";
}

window.addEventListener('click', function(e){   
  if (document.getElementById('form-popup').contains(e.target)){
  } else{
    // Clicked outside the box
  }
});

window.onclick = function(event) {
  if (event.target == popup) {
    
  }
} 


/*$('#open-popup').on('click', function () {
     $('#form-popup').css('visibility', 'visible');
     $('#form-popup').css('opacity', '1');
 });
$(document).mouseup(function (e) {
     var popup = $("#form-popup");
     if (!$('#open-popup').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
         $('#form-popup').css('visibility', 'hidden');
         $('#form-popup').css('opacity', '0');
     }
 });*/