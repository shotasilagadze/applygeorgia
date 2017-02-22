$(function(){

    //Gradient animation
    (function(){
        var gradientStyle = $('.header').css('background-image');
        console.log(gradientStyle);
        var deg = 90;
        function gradientAnimation(step){
            var style = "linear-gradient("+ deg +"deg," + gradientStyle.slice(22);
            $('.header').css({
                background : style
            });

            (deg === 360) ? deg = 0 : deg += 0.2;
        }

        //setInterval(gradientAnimation, 10);
    })();


});