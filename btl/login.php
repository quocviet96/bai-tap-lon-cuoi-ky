
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="lienket.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>ĐĂNG NHẬP</title>
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
        
      
        </div>   
    </div>
    
    <div id="left"></div>
    <div style="width:500px; margin:40px auto;border:1px solid #ccc; border-radius:5px; padding-top:30px" id="content">
        <center><h1> ĐĂNG NHẬP </h1 ></center >
            <div style="padding:50px" class="body">
                    
            <form method="POST">
                <div class="form-group">
                    <label for="txtuser">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="txtuser" name="txtuser"  placeholder="Mời nhập tên đăng nhập">
                    
                </div>
                <div class="form-group">
                    <label for="txtpass">Mật khẩu</label>
                    <input type="password" class="form-control" id="txtpass" name="txtpass" placeholder="Mật khẩu phải từ 6-20 kí tự">
                </div>
            
                <button style="margin-left:130px" type="submit" class="btn btn-primary" name="btnSubmit" id="btnSubmit">Đăng nhập</button>
             </form>
                    </div>
    </div>
    <div id="right"></div>
    <div id="footer" style="padding-top: 40px">&copy;Khóa học IT</div>
</div>
<script src="dang kyy.js"></script>
</body>  
</html>  
