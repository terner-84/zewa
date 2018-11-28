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

});