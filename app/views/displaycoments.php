<h5><a href="?pages=section&action=add">Add New Section</a></h5>
<table class="table sectiontable wow bounceIn"  data-wow-duration="10" data-wow-delay='1s'>
	<tr>
       <th>Id</th>
		<th>Comment Name</th>
		<th>Email</th>
		<th>Meassage</th>
		<th>Delet</th>
	</tr>
	<?php


		for($i=0 ;$i<count(@$data) ;$i++) {
			echo"</tr>
	<td>{$data[$i]['id']}</td>
	<td>{$data[$i]['name']}</td>
		<td>{$data[$i]['email']}</td>
	<td>{$data[$i]['message']}</td>
	

	<td><a href='?pages=comments&action=del&id={$data[$i]['id']}'><img src='Resource/images/delete.png' class='imgstyles'></a></td>
    </tr>";
		}
	
?>	
</table>
