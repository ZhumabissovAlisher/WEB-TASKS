let list=document.getElementsByTagName('span');
let buttons = document.getElementsByTagName('button');
for(let i=0; i<buttons.length;i++){
    buttons[i].addEventListener("click",function(){
        list[i].style.textDecoration = "line-through";
    });
}
