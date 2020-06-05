<?php 
?>
</body>
</html>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>ecostagram : 이벤트</title>
	<style>
		@import url("css/event.css");
		@import url("css/header.css");

	</style>
</head>
<body>
	<?php 
		require_once("lib/header_bottom.php");
	?>
	<div class="wrraper">
		<div class="container">
			<div class="top">
				<div class="event-title">
					EVENT
				</div>
				<div class="event-sub-title">
					#SAVE THE EARTH
				</div>
				<div class="explain">
					<p>환경의 날을 맞이하여 환경으로 이행시를 지어보세요</p>
					<p>추첨을 통해 다양한 선물을 드립니다</p>
				</div>
				<div class="sub-explain">
					<div class="left">
						이벤트기간 2020.06.05 ~ 2020.06.08
					</div>
					<div class="right">
						당첨자발표 추첨 후 개별안내
					</div>
				</div>
            </div>
            <form action="event_process.php" method="post">

                <div class="main">

                    <div class="first">
                        <span class="first-text">환</span><input type="text" name="first" class="firstinput">
                    </div>
                    <div class="second">
                        <span class="second-text">경</span><input type="text" name="second" class="secondinput">
                    </div>
                </div>
                <div class="bottom">
                    <div class="buttondiv">
                        <input type="submit" value="이벤트 응모하기" class="button">
                    </div>
                </div>
            </form>
		</div>
	</div>
</body>
</html>