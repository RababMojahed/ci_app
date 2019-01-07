
      <!--  <h4> <?php echo $title;?></h4>-->
<table border='1'>
    <tr>
        <th>id</th>
        <th>name</th>        
        <th>speciality</th>
        <th>nationality</th>
    </tr>
<?php
foreach($records as $r)
{
    echo '<tr>';
    echo '<td>'.$r->d_id.'</td>';
    echo '<td>'.$r->d_name.'</td>';
    echo '<td>'.$r->d_speciality.'</td>';
    echo '<td>'.$r->d_nationality.'</td>';
    echo '</tr>';
}
    ?>
   
</table>
