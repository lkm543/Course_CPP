<?php
if (strcmp($_SESSION['Uploaded'],'True')==0){
echo "<font color=\"red\">作業繳交成功囉!!!!</font><br/>";
echo "檔案名稱: " . $_SESSION['Filename']."<br/>";
echo "檔案類型: " . $_SESSION['FileType']."<br/>";
echo "檔案大小: " . ($_SESSION['FileSize'] / 1024)." Kb<br/>";
}
elseif (strcmp($_SESSION['Uploaded'],'Error')==0){
echo "作業繳交失敗，請重試一次或聯絡lkm543@gmail.com";
}
$_SESSION['Uploaded']='Nothing';
?>

<div class="form-group">
    <form action="UploadHW.php" method="post" enctype="multipart/form-data">
        <label>您的姓名：</label>
        <input type="text" name="name" class="form-control" placeholder="姓名">
        
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" name="HW" value="HW1" checked="checked" class="form-check-input">作業一
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" name="HW" value="HW2" class="form-check-input">作業二
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" name="HW" value="HW3" class="form-check-input">作業三
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" name="HW" value="HW3" class="form-check-input">作業四
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" name="HW" value="HW3" class="form-check-input">作業五
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" name="HW" value="HW3" class="form-check-input">作業六
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" name="HW" value="HW3" class="form-check-input">作業七
            </label>
        </div>
        </br>
        <label>作業檔案(請上傳.cpp或壓縮成一個檔案)：</label>
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control"><br>
        <label>上課心得或建議：</label>
        <textarea name="comment" rows="5" cols="40" class="form-control"></textarea><br>
        <input type="submit" value="上傳檔案" name="submit" class="form-control">
    </form>
</div>