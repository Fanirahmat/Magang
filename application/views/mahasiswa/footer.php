</div>
</div>

<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
<!-- membuat javascript untuk membuat menu collapse di mobile -->
<script src="<?php echo base_url("assets/bootstrap/js/collapse.js"); ?>"> </script>
<script>
	$(document).ready(function(){
		$("#sidebarCollapse").on('click',function(){
			$("#sidebar").toggleClass('active');
		})
	})
</script>

<script>
	//CKEDITOR.replace('editor1');
</script>
</body>
</html>