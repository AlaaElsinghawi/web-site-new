<h5><a href="?pages=section&action=add">Add New Section</a></h5>
<table class="table sectiontable wow bounceIn"  data-wow-duration="10" data-wow-delay='1s'>
	<tr>
       <th>Id</th>
		<th>Section Name</th>
		<th>Status</th>
		<th>Location</th>
		<th>Description</th>
		<th>Date</th>
		<th>Created By</th>
		<th>Edit</th>
		<th>Delet</th>
	</tr>
	<?php


		for($i=0 ;$i<count(@$data) ;$i++) {
			echo"</tr>
	<td>{$data[$i]['id']}</td>
	<td>{$data[$i]['section_name']}</td>
		<td>{$data[$i]['section_status']}</td>
	<td>{$data[$i]['section_location']}</td>
	<td>{$data[$i]['sectiom_description']}</td>
	<td>{$data[$i]['section_date']}</td>
	<td>{$data[$i]['username']}</td>

	<td><a href='?pages=section&action=edit&id={$data[$i]['id']}'><img  src='Resource/images/edit.png'  class='imgstyles'></a></td>
	<td><a href='?pages=section&action=del&id={$data[$i]['id']}'><img src='Resource/images/delete.png' class='imgstyles'></a></td>
    </tr>";
		}
	
?>	
</table>
