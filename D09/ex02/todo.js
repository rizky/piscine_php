var ft_list;
var cookie = [];

window.onload = function () {
    document.querySelector("#new").addEventListener("click", newTodo);
    ft_list = document.querySelector("#ft_list");
	var tmp = document.cookie.replace(/(?:(?:^|.*;\s*)todos\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    if (tmp) {
		cookie = JSON.parse(tmp);
        cookie.forEach(function (e) {
            addTodo(e);
        });
    }
};

function saveToCookie(){
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
	document.cookie= "todos=" + JSON.stringify(newCookie);
};

function newTodo(){
    var todo = prompt("What do you want to do?", '');
    if (todo !== '') {
        addTodo(todo)
	}
}

function addTodo(todo){
    var div = document.createElement("div");
    div.innerHTML = todo;
    div.addEventListener("click", deleteTodo);
	ft_list.insertBefore(div, ft_list.firstChild);
	saveToCookie();
}

function deleteTodo(){
	this.parentElement.removeChild(this);
	saveToCookie();
}