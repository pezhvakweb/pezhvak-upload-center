<?php include("header.php"); ?>
<!-- end header -->

<body>
<!--

    [[[[[[[[[[[[[[[      ]]]]]]]]]]]]]]]
    [::::::::::::::      ::::::::::::::]
    [::::::::::::::      ::::::::::::::]
    [::::::[[[[[[[:      :]]]]]]]::::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[ Ahmadreza Paripaykar ]:::::]
    [:::::[      Ali Rasouli     ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [::::::[[[[[[[:      :]]]]]]]::::::]
    [::::::::::::::      ::::::::::::::]
    [::::::::::::::      ::::::::::::::]
    [[[[[[[[[[[[[[[      ]]]]]]]]]]]]]]]

-->
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
			<div class="nbar">
				<a href="">آپلود سنتر</a><i class="fa fa-chevron-left" aria-hidden="true"></i><span><a href="">صفحه اصلی</a></span>
			</div>

			<div class="wel">
			<p class="animated fadeInDown">خوش آمدید</p>
			<p class="animated fadeInUp">به سرویس آپلود سنتر ما خوش آمدید، شما می توانید تمامی فایل هایی را که از نظر ما مجاز است، بر روی این سرور آپلود کنید .</p>
			</div>
			
			<!-- start Core Upload -->
			<?php include("child.php"); ?>
			<!-- end Core Upload -->
			
			<!-- start form Upload -->
			<?php include("form.php"); ?>
			<!-- end form Upload -->
			
			<div id="upload" style="height: 200px;">
				<div class="drag">
					 <span>فایل ها را در این کادر رها کنید</span>
					 <br />
					 <p>یا</p>
					 <br />
					 <span class="drop">انتخاب فایل</span>
				</div>
			</div>
		</div>
		
		<!-- start sidebar -->
		<?php include("sidebar.php"); ?>
		<!-- end sidebar -->
        
	</div>
    </div>
		<!-- start footer -->
		<?php include("footer.php"); ?>
		<!-- end footer -->

</body>
</html>