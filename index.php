<?php 
require 'classes/Database.php';

$database = new Database;

$database->query('SELECT * FROM posts');
$rows = $database->resultset();
?>

<?php if(count($rows)> 0) :?>
  <table>
    <tr>
      <td>Title</td>
      <td>Body</td>
      <td>Created Date</td>
    </tr>
    <?php foreach ($rows as $value) : ?>
      <tr>
        <td><?php echo $value['title']; ?></td>
        <td><?php echo $value['body']; ?></td>
        <td><?php echo $value['create_date']; ?></td>
      </tr>  
    <?php endforeach; ?>
  </table>
<?php else : ?>
  <h5>No record found!</h5>
<?php endif; ?>

<a href="insert_form.php">Insert post</a>