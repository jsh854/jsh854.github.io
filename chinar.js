var image=document.getElementById("chinar");
var show=["k3.jpg","kshmir1.jpg"];
var index=0;
function change(){
	image.setAttribute("src",show[index]);
	index++;
	if(index>=show.length){
		index=0;
	}
}
setInterval(change,5000);