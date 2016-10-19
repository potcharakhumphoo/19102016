<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $title ;?></h1>

<?php 
print_r($person)    ;
echo '<hr>' ;
foreach ($person as $key => $item) {
    echo $key.' : '.$item['fname'].' / '.$item['lname'].' / '.$item['email'].'<br>';
}
?>

<table class="table table-bordered table-hover table-striped">
    <thead>
      <tr class="success">
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>สกุล</th>
        <th>อีเมล์</th>
      </tr>
    </thead>
    <tbody>
        
     <?php
     foreach ($person as $key => $value) {
       echo '<tr>';
       echo '<td>'.($key+1).'</td>';
       echo '<td>'.$value['fname'].'</td>';
       echo '<td>'.$value['lname'].'</td>';
       echo '<td>'.$value['email'].'</td>';
       echo '</tr>'; 
     }
     ?>
        
        
    <?php 
        echo '<tr>';
       echo '<td>John</td>';
       echo '<td>Doe</td>';
       echo '<td>john@example.com</td>';
      echo '</tr>';
    ?>
        
        
        
      <tr class="success">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
