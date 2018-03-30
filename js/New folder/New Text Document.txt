var authors = {
	{
		name:"zeev",
		email:"zeev@hotmail.com"
	},
	{
		name:"Ann",
		email:"ann@gmail.com"
	}
	
},authlist,addToList;

authlist=document.getElementByID("auth-list");

addToList=function(object){
	var textNode,li,ul;
	
	textNode=document.createTextNode(object.name+ ":" + object.email);
	
	li=document.createElement('li')
	ul=document.createElement('ul')
	
	li.appendChild(textNode);
	ul.appendChild(li);
	
	authlist.appendChild(ul);
};

for(var auth in authors){
	addToList(authors[auth]);
}