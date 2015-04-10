<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/selectize.bootstrap3.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.css">
	<style type="text/css">
		.clone{
			margin: 10px;
			border-bottom: 1px solid  #ddd;
			position: relative;
		}

		.addnew{
			margin: 10px;
		}
	</style>
</head>
<body>

	<div class="container well">

		<div class="panel text-center">
			<button type="" class="btn btn-primary addnew" rel=".clone">Add New</button>
		</div>

		<div class="container-fluid">
	       <div class="clone copy clearfix">
	           <div class="col-md-6">
	               <div class="form-group">
	                   <label>Label 1</label>
	                   <input type="text" name="label1" id="label1" class="form-control element-width-3" placeholder="" title="" value="" autocomplete="off">
	               </div>
	           </div>
	           <div class="col-md-6">
	               <div class="form-group">
	                   <label>Label 2</label>
						<select name="label2" class="selectizenormal" id="label2">
							<option value=""></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
	           </div>
	           <div class="col-md-6">
	               <div class="form-group">
	                   <label>Label 3</label>
	                   <input type="text" name="label3" id="label3" class="form-control element-width-3" placeholder="" title="" value="" autocomplete="off">
	               </div>
	           </div>
	           <div class="col-md-6">
	               <div class="form-group">
	                   <label>Label 4</label>
	                   <input type="text" name="label4" id="label4" class="form-control element-width-3" placeholder="" title="" value="" autocomplete="off">
	               </div>
	           </div>
	       </div>
	    </div>
    </div>


	<script type="text/javascript" src="../assets/js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="../assets/js/selectize.js"></script>
	<script type="text/javascript" src="../assets/js/relCopy.jquery.js"></script>


	<script type="text/javascript">

	(function(){

		var selectize = $('.selectizenormal');

		selectize.selectize({
			create: false
		});


		var removeLink = '<a style="position: absolute;margin-top: 0px;right: 0px;color: #a94442;font-size: 1.8em;z-index: 100" class="remove" href="" ><span class="fa fa-times-circle"></span></a>';
	       $('.addnew').relCopy({
	           append: removeLink,
	           selectize: '.selectizenormal'
	       });
	})();

	</script>
</body>
</html>
