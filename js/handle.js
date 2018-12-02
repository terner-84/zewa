$().ready(function(){

    $('#generator').submit(function(event){
        event.preventDefault();
        console.log('Generator button clicked!');
        $.getJSON('generator.php', function(data){
            $('h1').next().text(data['res']);
        });
    });

    let arr = ['alpha', 'bravo', 'charlie', 'delta', 'echo',
        'foxtrot', 'golf', 'hotel', 'india', 'juliett', 'kilo'
    ];

    $.each(arr, function(x,y){
        if (x % 6 - 1 === 0) {
            $('#pole_sem').append(y + ' ');
        }
        
    });

    function getCarter(spec) {
        $.getJSON('m_pole.php?spec=' + spec, function(data){
            $('#m_pole_out').text('');
            console.log(data[spec]);
        });
        
    }
    

    $('#sider').click(function(){
        let spec = $("input[name='mnu_fce']:checked").val();
        getCarter(spec);
    });

    let veller;

    $('#formik label').mouseenter(function(){
        let value = $(this).attr('id');
        let pos = $(this).position();
        $.getJSON('m_pole.php?spec=' + value, function(data){
            $('#m_pole_out').text('');
            veller = data[value];
            $('#pop_up').text(veller);
            $('#pop_up').css('display','block');
            $('#pop_up').css('position','absolute');
            $('#pop_up').css('top',pos['top'] - 20);
            $('#pop_up').css('left', pos['left'] + 75);
        });
    });

    $('#formik label').mouseleave(function(){
        $('#pop_up').css('display','none');
    });

});