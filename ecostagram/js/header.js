function logoutchk(){
		value=document.getElementById("log").innerText;
		if(value==="로그아웃"){
			if(confirm("로그아웃하시겠습니까?")){
			location.href = "lib/session_delete.php";
	    }
        return false;
	}
}//로그아웃 체크

function loginchk(){
	if(confirm("로그인이 필요합니다. 로그인 하시겠습니까?")){
		location.href = "login.php";
	}
    return false;
}//로그아웃 체크