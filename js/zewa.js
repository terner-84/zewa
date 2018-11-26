$(document).ready(function(){
   
    $('#getme').click(function(){
        let row = '';
        $('#tb tbody').text('');
        $.getJSON('res.php?i1=kolik&str_fce=somethingDifferent',function(data){
            //console.log(data['name']);
            $.each(data,function(index,item){
                row += '<tr class="w3-hover-blue">';
                row += '<td>' + item['name'] + '</td>';
                row += '<td class="valueRight">' + item['age'] + '</td>';
                row += '<td class="valueCenter">' + item['city'] + '</td>';
                row += '</tr>'
            }); 
            $('#tb tbody').append(row);
        });
    })
    
});

function openTab(tabName) {
    $('.deluxe').css('display', 'none');
    $('#' + tabName).css('display','block');
}

function loadTable() {
    let table = $('#table_name').val();
    console.log(table);
    $('#msg p').text('');
    if (table.length > 0) {
        $.getJSON('fetch_data.php?table_name=' + table, function(data){
            $.each(data, function(index, item){
                if (index === 0) {
                    $('#msg p').append(item['item']);
                } else {
                    $('#msg p').append('<br>' + item['item']);
                }
                
            });
        });
    } else {
        $('#msg p').text('ERROR: table var has not got right val');
    }
}

