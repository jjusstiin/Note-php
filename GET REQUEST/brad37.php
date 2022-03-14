<form action="brad38.php" method="get">
    <span>Account:</span><input type="text" name="account"><br>
    <span>Password:</span><input type="password" name="passwd"><br>
    <span>Zipcode:</span>
    <select name="zipcode" id="">
        <option value="401">北屯區</option>
        <option value="402">西屯區</option>
        <option value="403">南屯區</option>
        <option value="404">東區</option>
    </select>
    <br>
    <span>Gender:</span>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">male<br>
    <span>Habit:</span>
    <input type="checkbox" name="habit[]" value="1">打電腦
    <input type="checkbox" name="habit[]" value="2">打電動
    <input type="checkbox" name="habit[]" value="3">打籃球<br>
    <input type="checkbox" name="habit[]" value="4">打麻將
    <input type="checkbox" name="habit[]" value="5">打羽球
    <input type="checkbox" name="habit[]" value="6">打小孩<br>
    
    <span>Icon:</span><input type="file" name="upload"><br>
    <hr>

    <input type="submit" value="Register">
</form>