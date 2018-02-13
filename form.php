<div id="upload">
<form id="upb" action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" name="phuploader">
<label id="lable"> فایل خود را انتخاب کنید: </label>

<?If($display_message){?>
<br />
<?=$display_message;?>
<br />
<?}?>
	

<br />

	<?For($i=0;$i <= $file_uploads-1;$i++) {?>
			<input id="file" class="animated zoomIn" type="file" name="file[]" size="30"  />
	<?}?>
			<input data-am-collapse="{target: '#collapse-panel-1'}" type="hidden" name="submit" value="true" />
            <br />
			<input id="submit" class="animated zoomIn"  type="submit" value="آپلود" /> &nbsp;
			<input id="submit" class="animated zoomIn" type="reset" name="reset" value="بازیابی" onclick="window.location.reload(true);" />
</form>
</div>
			<p class="relative"> <span>فرمت های مجاز</span> <?=implode($allow_types, ", ");?> </p>
			<p class="relative"><span>حداکثر حجم مجاز</span>10 مگابایت</p>