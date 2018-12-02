$().ready(function(){
    $('#hover_me').mouseenter(function(){
        $.getJSON('point.php', function(data){
            console.log(data);
            let ctx = $('#car_canvas')[0].getContext('2d');
            //let ctx = c.getContext('2d');
            let imge = document.getElementById('car');
            ctx.drawImage(imge, 0, 0);
            ctx.beginPath();
            ctx.arc(data[0], data[1], 5, 0, 2 * Math.PI);
            ctx.fillStyle = '#000';
            ctx.fill();
            let pos = $('#hover_me').position();
            $('#pop_up').css('display','block');
            $('#pop_up').css('position','absolute');
            $('#pop_up').css('top',pos['top']);
            $('#pop_up').css('left', pos['left'] + 150);
            //$('#pop_up').css('border', '1px solid black');
            //$('#car_canvas').css('border', '1px solid red');
        });
    });

    $('#hover_me').mouseleave(function(){
        $('#pop_up').css('display','none');
    });
});