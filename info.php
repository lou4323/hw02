<html>
    <head>
        <title>報名資料</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="#e7e1d6">
        <h2>報名資料</h2>

        <?php


        $uName = isset($_POST["uName"]) ? $_POST["uName"] : "";  
        $uID = isset($_POST["uID"]) ? $_POST["uID"] : "";  
        $uPhone = isset($_POST["uPhone"]) ? $_POST["uPhone"] : "";  
        $uEmail = isset($_POST["uEmail"]) ? $_POST["uEmail"] : "";  
        $uGender = isset($_POST["uGender"]) ? $_POST["uGender"] : "";  
        $uBirth = isset($_POST["uBirth"]) ? $_POST["uBirth"] : "";  
        $uAge = isset($_POST["uAge"]) ? $_POST["uAge"] : "";  
        $uLike = isset($_POST["uLike"]) ? $_POST["uLike"] : "";  
        $uInterests = isset($_POST["uInterests"]) ? $_POST["uInterests"] : "";  
        $uCity = isset($_POST["uCity"]) ? $_POST["uCity"] : "";  
        $uComment = isset($_POST["uComment"]) ? $_POST["uComment"] : "";  
        $uSecret = isset($_POST["uSecret"]) ? $_POST["uSecret"] : "";  

            echo "您的姓名：".$uName."<br/>";
            echo "您的學號：".$uID."<br/>";
            echo "您的手機號碼：".$uPhone."<br/>";
            echo "您的電子郵件：".$uEmail."<br/>";
            echo "您的性別：".$uGender."<br/>";
            echo "您的生日：".$uBirth."<br/>";
            echo "您的年齡：".$uAge."<br/>";
            echo "活動期待度:".$uLike."<br>";

            if (!is_array($uInterests)) {
                $uInterests = [];
            }
            $x = count($uInterests); //計算陣列長度
            if ($x == 0) {
                
            } else {
                echo "您的興趣有：";
                for ($i = 0 ; $i < $x ; $i++) {
                    if ($i == $x-1) {
                        echo $uInterests[$i];
                    } else {
                        echo $uInterests[$i]."、";
                    }
                }
                echo "<br/>";
            }
            echo "您的備註：";
            if ($uComment != null) {
                echo 
                "<br/>----------------------------------------".
                "<br/>".nl2br($uComment)."<br/>".
                "----------------------------------------"."<br/>";
            } else {
                echo $uComment."<br/>";
            }

            echo "【".$uSecret."】";
            ?>
            <p>
            <a href="form.php"target="new">回上一頁</a>
            <br/>
            <a href="welcome.html"target="new">回首頁</a>
            </body>
            </html>