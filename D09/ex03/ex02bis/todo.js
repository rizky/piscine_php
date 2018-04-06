var ft_list;
var cookie = [];

$(document).ready(function(){
    $('#new').click(newTodo);
    $('#ft_list div').click(deleteTodo);
	ft_list = $('#ft_list');
	console.log(document.cookie);
    var tmp = document.cookie.replace(/(?:(?:^|.*;\s*)todos\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    if (tmp) {
        cookie = JSON.parse(tmp);
        cookie.forEach(function (e) {
            addTodo(e);
        });
    }
});

function saveToCookie(){
    var todo = ft_list.children();
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
	document.cookie= "todos=" + JSON.stringify(newCookie);
}

function newTodo(){
    var todo = prompt("What do you want to do?", '');
    if (todo !== '') {
        addTodo(todo)
	}
}

function addTodo(todo){
	ft_list.prepend($('<div>' + todo + '</div>').click(deleteTodo));
	saveToCookie();
}

function deleteTodo(){
	this.remove();
	saveToCookie();
}