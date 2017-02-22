// $(function(){

//     //Gradient animation
//     (function(){
//         var gradientStyle = $('.header').css('background-image');
//         console.log(gradientStyle);
//         var deg = 90;
//         function gradientAnimation(step){
//             var style = "linear-gradient("+ deg +"deg," + gradientStyle.slice(22);
//             $('.header').css({
//                 background : style
//             });

//             (deg === 360) ? deg = 0 : deg += 0.2;
//         }

//         // setInterval(gradientAnimation, 10);
//     })();


// });


$(document).ready(function() {
  $('.js-date--west').mask('00/00/0000');
  
  // Validation
  $('.js-btn').on('click', function () {
    $('.js-validation-message').removeClass('red');
    $('.js-validation-message').removeClass('green');
    var dateObj = $('.js-date--west');
    
    if (dateObj.val() == null || dateObj.val() != "") {      
            var d1 = Date.parse(dateObj.val().replace(/([0-9]+)\/([0-9]+)/,'$2/$1'));
            if (d1 == null || isNaN(parseFloat(d1))) {
                $('.js-validation-message').html('Error!');
                $('.js-validation-message').addClass('red');
            }
            else {
              $('.js-validation-message').html('Valid!');
              $('.js-validation-message').addClass('green');
            }
    }
    else {
      $('.js-validation-message').html('Required');
      $('.js-validation-message').addClass('red');
    }    
  });
});



$( document ).ready(function() {
  function alertHeight() {
         console.log("Window Height: " + $(window).height() + ", Document Height: " + $(document).height());
     }
     var windowsSize = $(window).height();
     var headerSize = "300px"

     var totalsize = windowsSize - parseInt( headerSize ) + "px";

     $(".footer_fixator").css('min-height',totalsize);

});
