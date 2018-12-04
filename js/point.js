$().ready(function(){

    let pkz = [
        'Citigo',
        'Fabia',
        'Rapid',
        'Scala'
    ];

    let mesta = [
        'Mladá Boleslav',
        'Zámostí',
        'Krnsko',
        'Strenice'
    ];

    let spz = [
        '6A0 1524',
        '3SZ 5124',
        '6AU 3033',
        '2E6 6512'
    ];

    let row = '';

    for (let index = 0; index < pkz.length; index++) {
        if (index === 0) {
            row += '<tr data-tt-id="fotr" data-tt-parent-id="0">';
        } else {
            row += '<tr data-tt-id="x' + index + '" data-tt-parent-id="fotr">';
        }
        row += '<td class="lafa">' + pkz[index] + '</td>'; 
        row += '<td>' + mesta[index] + '</td>';
        row += '<td>' + spz[index] + '</td>';       
        row += '</tr>';
    }

    $('#tt tbody').html(row);

    $('#tt').treetable({expandable : true});

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

    $('.lafa').mouseenter(function(){
        let neco = $(this).parent(this).attr('data-tt-id');
        console.log(neco);
    });

    $('#hover_me').mouseleave(function(){
        $('#pop_up').css('display','none');
    });
});