
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="lienket.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>QUẢN TRỊ</title>
</head>      
<body>
        <div id=”wrapper”>
            <div id="header">
            <img src ="images/it.png" style="width: 1550px;height:200px"> </img>
            </div>
       
            <div id="menu">
                <div class="flex-containner">  
                    <a href="btl.php"class="lienket">Trang chủ</a> 
                    <a href="gioithieu.php"class="lienket">Giới thiệu</a>
                    <a href="khoahoc.php" class="lienket">Khóa học</a> 
                    <a href="giaovien.php"class="lienket">Giáo viên</a>
                    <a href="hvxs.php"class="lienket">Học viên xuất sắc</a>
                    <a href="lienhe.php"class="lienket">Liên hệ</a>
                    <a href="qlsv.php"class="lienket"> Quản lý sinh viên </a>
                    <a href="qlkh.php"class="lienket"> Quản lý khóa học </a>
                    <a href="login.php"class="lienket"> Đăng nhập </a> 
                    <a href="dang kyy.php"class="lienket"> Đăng ký </a>
        
        
        
                </div> 
                <h1 style="margin-top:30px">DANH SÁCH KHÓA HỌC</h1>  
                <a href="qlkh.php?kh=them">Thêm khóa học</a>
                <a href="qlkh.php?kh=listkh">Danh sách khóa học</a>
                <!-- <a href="qlkh.php?kh=sua">Sửa khóa học</a>
                <a href="qlkh.php?kh=xoa">Xóa khóa học</a> -->
            </div>
        </div>
        <?php
            if(isset($_GET['kh'])){
                $id=$_GET['kh'];}else
                if(!isset($_GET['kh'])){
                    include('listkh.php');
                } 
            
            if(isset($_GET['kh'])&& $id=='them' ){
                include('themkh.php');
            }else if(isset($_GET['sv'])&& $id=='sua' ){
                include('suakh.php');
            }else if(isset($_GET['kh'])&& $id=='xoa' ){
                include('xoakh.php');
            }

             
         ?>
   
</body>
</html>