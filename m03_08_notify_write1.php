<?php
//JSON 객체 분리하기
header('Content-type: text/html; charset=utf-8');
$subject = $_POST["subject"];
$author = $_POST["author"];
$content = $_POST["content"];

if(!$subject){
?>
<script>    
    alert("제목이 입력되지 않았습니다.");
    history.go(-1);
</script>
<?php
exit;    
}

if(!$content){
?>
    <script>    
        alert("내용이 입력되지 않았습니다.");
        history.go(-1);
    </script>
<?php
exit;    
}

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "INSERT INTO communityy(subject, author, content) VALUES('". $subject ."', '". $author. "', '". $content ."')";

//db 전송
if ($conn->query($sql) === TRUE) {
?>
<script>
    alert("입력이 완료 되었습니다.");
    location.href="m03_02_communityy.php";
</script>
<?php    
} else {
?>
<script>    
    alert("Error: "+ <?php echo $sql ?> +"\n"+ <?php echo $conn->error ?>);
    history.go(-1);
</script> 
<?php   
}

//db 접속 종료
$conn->close();
?>