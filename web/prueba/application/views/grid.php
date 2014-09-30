<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flexigrid Implemented in CodeIgniter</title>
<link href="/public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/public/css/flexigrid.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/public/js/flexigrid.js"></script>
</head>
<body>
<h1>Flexi Grid Implementation</h1>
<div class="centerBox"><a href="index.php/flexigrid/">About</a> | <a href="index.php/flexigrid/demo">Grid Demo</a> | <a href="index.php/flexigrid/search">Search Demo</a> | <a href="index.php/flexigrid/example">Documentation</a> | <a href="http://flexigrid.eyeviewdesign.com/<?php echo $download_file;?>">Download</a></div>
<div class="egBox">
<table id="flex1" style="display:none"></table>
</div>
<script type="text/javascript">
<?php echo $js_grid; ?>
function test(com,grid)
{
    if (com=='Select All')
    {
		$('.bDiv tbody tr',grid).addClass('trSelected');
    }
    
    if (com=='DeSelect All')
    {
		$('.bDiv tbody tr',grid).removeClass('trSelected');
    }
    
    if (com=='Delete')
        {
           if($('.trSelected',grid).length>0){
			   if(confirm('Delete ' + $('.trSelected',grid).length + ' items?')){
		            var items = $('.trSelected',grid);
		            var itemlist ='';
		        	for(i=0;i<items.length;i++){
						itemlist+= items[i].id.substr(3)+",";
					}
					$.ajax({
					   type: "POST",
					   url: "index.php/ajax/deletec",
					   data: "items="+itemlist,
					   success: function(data){
					   	$('#flex1').flexReload();
					  	alert(data);
					   }
					});
				}
			} else {
				return false;
			} 
        }          
}
</script>
</body>
</html>