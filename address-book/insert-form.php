<?php require __DIR__ . '/parts/connect_db.php';
$pageName = 'insertForm';
?>
<?php require __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">註冊會員</h5>
                    <form name="form1" onsubmit="checkForm(); return false;">
                        <div class="mb-3">
                            <label for="name" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="name" name="name" required> 
                            <!-- required=此欄位必填，但畫面會因為瀏覽器不同而不同 -->
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">電子郵件</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" 
                            pattern="09\d{2}-?\d{3}-?\d{3}">
                        </div>
                        <div class="mb-3">
                            <label for="birthday" class="form-label">生日</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">地址</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function checkForm() {
        const fd = new FormData(document.form1);
        //FormData是一個可疊代的物件，所以可以用let...of...
        for (let k of fd.keys()) {
            console.log(`${k}: ${fd.get(k)}`);
        }
        //測試將資料用迴圈一筆一筆抓出
        //TODO:資料檢查
        fetch('insert-api.php', {
                method: 'POST', //若輸出結果出現在網址列上，代表method變成'GET'
                body: fd
            }).then(r => r.json()).then(obj => {
                console.log(obj);
                if(! obj.success){
                    alert(obj.error);
                } else {
                    alert('新增成功')
                    location.href = 'list.php';
                }
            })

    }
</script>

<?php require __DIR__ . '/parts/script.php'; ?>
<?php require __DIR__ . '/parts/html-foot.php'; ?>