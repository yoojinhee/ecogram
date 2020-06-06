function clickpost(IsGETid){
	if(IsGETid==1){
		document.getElementById("over").style.display="block";
		document.getElementById("post").style.display="block";
	}
}
function clickover(url){
	document.getElementById("over").style.display="none";
	document.getElementById("post").style.display="none";
	history.back();
}
