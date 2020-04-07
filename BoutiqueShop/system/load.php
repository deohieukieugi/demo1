<?php 
/*
Dựa vào url=index.php gọi file lên
*/
function loadComponent($page=true)
{
	$pathView = 'views/';
	if($page==true)
	{
		$pathView.='pages/';
		if(isset($_REQUEST['option']))
		{
			$pathView.=$_REQUEST['option'];
			if($_REQUEST['option']=='cart')
			{
				if(isset($_REQUEST['cat']))
				{
					$pathView.='-'.$_REQUEST['cat'].'.php';
				}
				else
				{
					$pathView.='.php';
				}
			}
			else
			{
				if(isset($_REQUEST['id']))
				{
					$pathView.='-detail.php';
				}
				else
				{
					if(isset($_REQUEST['cat']))
					{
						$pathView.='-category.php';
					}
					else
					{
						$pathView.='.php';
					}
				}
			}
		}
		else
		{
			$pathView.='home.php';
		}
	}
	else
	{
		$pathView.='pages/';
		if(isset($_REQUEST['option']))
		{
			$pathView.=$_REQUEST['option'].'/';
			if(isset($_REQUEST['cat']))
			{
				$pathView.=$_REQUEST['cat'].'.php';
			}
			else
			{
				$pathView.='index.php';
			}
		}
		else
		{
			$pathView.='dashboard/index.php';
		}
	}
	require_once($pathView);
}



 ?>


