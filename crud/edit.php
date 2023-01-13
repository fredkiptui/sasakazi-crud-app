<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM post WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $description = $row['description'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $description = $_POST['description'];

  $query = "UPDATE post set title = '$title', description = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'post Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../index.php');
}

?>
<?php include('header.php'); ?>
<div class="container">
    <h3><a href="../index.php">RETURN</a></h3>
  <div class="">
    <div class="">
      <div class="">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="">
          <input name="title" type="text" class="" value="<?php echo $title; ?>" placeholder="Update Title">
        </div>
        <div class="">
        <textarea id="description" name="description" class="" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    ClassicEditor.create( document.querySelector( '#description' ) )
</script>

<?php include('footer.php'); ?>
