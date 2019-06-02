<!--
id`, `subpages_name`, `subpages_content`, `subpages_status`, `subages_vistits`, `sub_pages_types`, `sub_pages_images`, `sub_pages-date`, `username
-->



<table class="table sectiontable wow bounceIn"  data-wow-duration="10" data-wow-delay='1s'>
	<tr>
		<th>id</th>
		<th>News Title</th>
		<th>News Status</th>
		<th>pages Name</th>
		<th>Created By</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>
	<?php
   for($i=0 ;$i<count($datapages) ;$i++)
   {
   	echo"<tr>
		<td>{$datapages[$i]['id']}</td>
		<td>{$datapages[$i]['subpages_name']}</td>
		<td>{$datapages[$i]['subpages_status']}</td>
		<td>{$datapages[$i]['sub_pages_types']}</td>
		<td>{$datapages[$i]['username']}</td>
		<td>{$datapages[$i]['sub_pages-date']}</td>
	   <td><a href='?pages=sub_pages&action=del&id={$datapages[$i]['id']}'><img src='Resource/images/delete.png' class='imgstyles'></a></td>
	   <td><a href='?pages=sub_pages&action=edit&id={$datapages[$i]['id']}'><img  src='Resource/images/edit.png'  class='imgstyles'></a></td>
    </tr>";
   }
	?>
	
	

</table>