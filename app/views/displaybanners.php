<h5><a href="?pages=banners&action=add">Add New Banners</a></h5>
<table class="table sectiontable wow bounceIn"  data-wow-duration="10" data-wow-delay='1s'>
	<tr>
       <th>Id</th>
		<th>Banners Name</th>
		<th>Banner url</th>
		<th>Status</th>
		
		<th>Date</th>
		<th>Created By</th>
		
		<th>Delet</th>
	</tr>
	<?php
/*`id`, `banners_name`, `banners_url`, `status`, `date`, `username`*/

		for($i=0 ;$i<count($data) ;$i++) {
			echo"</tr>
	<td>{$data[$i]['id']}</td>
	<td>{$data[$i]['banners_name']}</td>
		<td>{$data[$i]['banners_url']}</td>
	<td>{$data[$i]['status']}</td>
	<td>{$data[$i]['date']}</td>

	<td>{$data[$i]['username']}</td>

	<td><a href='?pages=banners&action=del&id={$data[$i]['id']}'><img src='Resource/images/delete.png' class='imgstyles'></a></td>
    </tr>";
		}
	
?>	
</table>
