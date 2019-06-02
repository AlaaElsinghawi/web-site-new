
<!--
`pages_id`, `pages_name`, `pages_content`, `pages_status`, `pages_vistits`, `pages_types`, `pages_images`, `pages-date`, `username`
-->

<table class="table sectiontable  wow bounceIn"  data-wow-duration="10" data-wow-delay='1s'>
	<tr>
		<th>id</th>
		<th>pages Name</th>
		<th>pages Status</th>
		<th>section Name</th>
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
		<td>{$datapages[$i]['pages_name']}</td>
		<td>{$datapages[$i]['pages_status']}</td>
		<td>{$datapages[$i]['pages_types']}</td>
		<td>{$datapages[$i]['username']}</td>
		<td>{$datapages[$i]['pages-date']}</td>
	   <td><a href='?pages=pages&action=del&id={$datapages[$i]['id']}'><img src='Resource/images/delete.png' class='imgstyles'></a></td>
	   <td><a href='?pages=pages&action=edit&id={$datapages[$i]['id']}'><img  src='Resource/images/edit.png'  class='imgstyles'></a></td>
    </tr>";
   }
	?>
	
	

</table>