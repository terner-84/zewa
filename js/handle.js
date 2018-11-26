$().ready(function(){

    $('#generator').submit(function(event){
        event.preventDefault();
        console.log('Generator button clicked!');
        $.getJSON('generator.php', function(data){
            $('h1').next().text(data['res']);
        });
    });

});