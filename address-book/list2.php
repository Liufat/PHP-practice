<?php require __DIR__ . '/parts/connect_db.php';

$perPage = 5; //設定一頁要顯示幾筆資料
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //導入page，如果使用者輸入整數->導出page；若無輸入，page設定為1



$t_sql = "SELECT COUNT(1) FROM address_book"; //計算總比數

//測試單行
// $row = $pdo->query($t_sql)->fetch();
// echo json_encode($row);
// exit;

$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
// echo json_encode($totalRows);

$totalPages = ceil($totalRows / $perPage); //計算總頁數，無條件進位(總資料比數/單頁資料筆數)

$row = [];

//如果有資料
if ($totalRows) {
    if ($page < 1) { //如果用戶輸入<1的頁數
        header('Location: ?page=1'); //導向第一頁
        exit; //停止程式
    }
    if ($page > $totalPages) { //如果用戶輸入>總頁數的頁數
        header('Location: ?page=' . $totalPages); //導向最後一頁
        exit; //停止程式
    }
}



$sql = sprintf(
    "SELECT * FROM address_book ORDER BY sid ASC LIMIT %s, %s",
    ($page - 1) * ($perPage),
    $perPage
); //把顯示的資料編號與頁數等做關聯，第一頁編號0~5，所以(1-1)*5=0開始,顯示5筆；第二頁(2-1)*5=5開始,顯示5筆
$row = $pdo->query($sql)->fetchAll();

$output = [
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'page' => $page,
    'row' => $row,
    'perPage' => $perPage
];

// echo json_encode($output);

// exit; //不執行後續所有的css與html
?>
<?php require __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </li>
                    <?php for ($i = $page - 5; $i <= $page + 5; $i++) :
                        if ($i >= 1 and $i <= $totalPages) :
                    ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php
                        endif;
                        ?>
                    <?php endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <i class="fa-solid fa-trash-can">刪除</i>
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">姓名</th>
                        <th scope="col">電子郵件</th>
                        <th scope="col">手機</th>
                        <th scope="col">生日</th>
                        <th scope="col">地址</th>
                        <th scope="col">
                            <i class="fa-solid fa-user-pen">編輯</i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($row as $r) : ?>
                        <tr>
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                            <td><?= $r['sid'] ?></td>
                            <td id="name"><?= $r['name'] ?></td>
                            <td><?= $r['email'] ?></td>
                            <td><?= $r['mobile'] ?></td>
                            <td><?= $r['birthday'] ?></td>
                            <td><?= $r['address'] ?></td>
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-user-pen"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<script>
    //用JS來假刪除頁面資料(沒動到資料庫)
    const table = document.querySelector('table');
    table.addEventListener('click', function(event) {
        const t = event.target;
        const name = document.querySelector('.name')
        console.log(t); //檢查點擊目標
        if (t.classList.contains('fa-trash-can')) { //檢查點擊目標內是否含有class:fa-trash-can
            t.closest('tr').remove(); //若有，往上尋找最接近的tr，執行remove的function
        }
        if (t.classList.contains('fa-user-pen')) { 
            console.log(t.closest('tr').querySelector('#name').innerHTML);
        }
    })
    // function removeRow(event){}
</script>

<?php require __DIR__ . '/parts/script.php'; ?>
<?php require __DIR__ . '/parts/html-foot.php'; ?>