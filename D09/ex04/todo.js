var ft_list;

$(document).ready(function(){
    $('#new').click(newTodo);
    $('#ft_list div').click(deleteTodo);
    ft_list = $('#ft_list');
    loadTodo();
});

function loadTodo(){
    ft_list.empty();
	$.get('select.php', function(data){
		data = jQuery.parseJSON(data);
        jQuery.each(data, function(i, val) {
            ft_list.prepend($('<div data-id="' + i + '">' + val + '</div>').click(deleteTodo));
        });
	});
}

function newTodo(){
    var todo = prompt("What do you want to do?", '');
    if (todo !== '') {
		$.get('insert.php?todo=' + todo, function(){
			loadTodo();
		})
	}
}

function deleteTodo(){
	$.get('delete.php?id=' + $(this).data('id'), function(){
		loadTodo();
	})
}