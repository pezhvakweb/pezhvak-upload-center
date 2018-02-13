<?php include("header.php"); ?>
<!-- end header -->
<body>
    <div class="gradient-bar"></div>
    <nav class="navbar">
		<div class="logo">
			<i class="fa fa-cloud-upload" aria-hidden="true"></i><h1>آپلود سنتر پژواک</h1><h2>نسخه آزمایشی آلفا 5</h2>
		</div>
  
		<div class="noti" id="noti">
			<a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a><span>5</span>
		</div>
		<div class="drop-menu">
			<div class="dm-list" id="dm-list" style="display: none;"> 
				<span>پیام های مدیریت</span>
				<a href="#" target="_blank"><img src="templates/img/n1.jpg" class="avatar-s">تست لینک</a><p>لورم ایپسوم متنی آزمایشی است .</p>
				<a href="#" target="_blank"><img src="templates/img/n2.jpg" class="avatar-s">تست لینک</a><p>لورم ایپسوم متنی آزمایشی است .</p>
				<a href="#" target="_blank"><img src="templates/img/n1.jpg" class="avatar-s">تست لینک</a><p>لورم ایپسوم متنی آزمایشی است .</p>
				<span>خوانده شده</span>
				<a href="#" target="_blank"><img src="templates/img/n2.jpg" class="avatar-s">تست لینک</a><p>لورم ایپسوم متنی آزمایشی است .</p>
				<a href="#" target="_blank"><img src="templates/img/n1.jpg" class="avatar-s">تست لینک</a><p>لورم ایپسوم متنی آزمایشی است .</p>
				<div class="all-list">
					<a href="#">مشاهده تمام اطلاعیه ها</a>
				</div>
			</div>
		</div>
	</nav>
<div class="container">
	<div class="row">

<div class="col-sm-9">
    <div class="panel panel-default card-view">
        <div class="panel-heading">
            <div class="pull-left">
                <h6 class="panel-title txt-dark">درباره ما</h6>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <p class="text-muted">اعضای توسعه دهنده اسکریپت آپلودسنتر پژواک : </p>
                <div class="table-wrap mt-40">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>درصد مشارکت</th>
                                <th>نام کاربری</th>
                                <th>سِمت</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>احمدرضا</td>
                                <td>پری پیکر</td>
                                <td><div class="progress progress-xs mb-0 "><div class="progress-bar progress-bar-danger" style="width: 70%"></div></div></td>
                                <td>Ahmadreza220</td>
                                <td><span class="label label-danger">admin</span> </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>نام</td>
                                <td>نام خانوادگی</td>
                                <td><div class="progress progress-xs mb-0 "><div class="progress-bar progress-bar-warning" style="width: 35%"></div></div></td>
                                <td>Test001</td>
                                <td><span class="label label-info">member</span> </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>نام</td>
                                <td>نام خانوادگی</td>
                                <td><div class="progress progress-xs mb-0 "><div class="progress-bar progress-bar-success" style="width: 20%"></div></div></td>
                                <td>Iran002</td>
                                <td><span class="label label-warning">developer</span> </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>نام</td>
                                <td>نام خانوادگی</td>
                                <td><div class="progress progress-xs mb-0 "><div class="progress-bar progress-bar-primary" style="width: 50%"></div></div></td>
                                <td>Alborz003</td>
                                <td><span class="label label-success">supporter</span> </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
		<!-- start sidebar -->
		<?php include("sidebar.php"); ?>
		<!-- end sidebar -->
        
	</div>
    </div>
		<!-- end footer -->
		<?php include("footer.php"); ?>
		<!-- end footer -->
		
</body>
</html>