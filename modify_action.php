<?php
    $connect = mysqli_connect("220.149.13.245", "root", "1234", "test2") or die ("connect fail");
    $number = $_GET['number'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    $date = date('Y-m-d H:i:s');
    $query = "update board set title='$title', content='$content', date='$date' where number=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./qna.php");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>