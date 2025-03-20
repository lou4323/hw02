
<html>
    <head>
        <title>高大活動行程與報名表單</title>
        <meta charset="utf-8">
    </head>

    <body bgcolor="#e7e1d6">
        <center>
            <font face="sans-serif">
            <h1>高大迎新活動行程與報名單</h1>

            <h3>&nbsp;活動時間：2025/08/31 10:00~16:00</h3>
            <h3>&nbsp;活動地點：國立高雄大學</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <table border="10px">
                <tr>
                    <th>時間</th>
                    <th>活動內容</th>
                </tr>

                <tr>
                    <td>&nbsp;10:00 - 12:00&nbsp;</td>
                    <td>&nbsp;報到、開幕</td>
                </tr>

                <tr>
                    <td>&nbsp;12:00 - 13:30&nbsp;</td>
                    <td>&nbsp;午餐與交流午餐與交流</td>
                </tr>

                <tr>
                    <td>&nbsp;13:30 - 15:00&nbsp;</td>
                    <td>&nbsp;團隊遊戲時間</td>
                </tr>

                <tr>
                    <td>&nbsp;15:00 - 16:00&nbsp;</td>
                    <td>&nbsp;閉幕</td>
                </tr>
            </table>
        
        <p>
            <text>-------------------------------------------------------------------------------------------</text>
        </p>
        <HR/>

        <h2>報名表單</h2>
        <form method="post" action="info.php">

            姓名：<input type="text" name="uName" required><br/>
            學號：<input type="text" name="uID" required><br/>
            手機號碼：<input type="text" name="uPhone" required><br/>
            電子郵件：<input type="email" name="uEmail" required><br/>
            性別：<input type="radio" name="uGender" value="男">男 <input type="radio" name="uGender" value="女">女<br/>
            生日：<input type="date" name="uBirth" required><br/>
            年齡：<input type="number" name="uAge" min="15" max="30" required><br/>
            活動期待度：<input type="range" name="uLike" required><br/>
            興趣：
            <input type="checkbox" name="uInterests[]" value="閱讀">閱讀
            <input type="checkbox" name="uInterests[]" value="睡覺">睡覺
            <input type="checkbox" name="uInterests[]" value="聽音樂">聽音樂
            <input type="checkbox" name="uInterests[]" value="運動">運動
            <br/>
            
            <br/>
            備註：<textarea cols="25" rows="1" name="uComment"></textarea><br/>
            <input type="submit"><input type="reset">
        </form> 
        <center><a href="welcome.html"target="new">回首頁</a></center>
    </body>

</html>