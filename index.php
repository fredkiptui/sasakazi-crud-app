<?php include("crud/db.php"); ?>

<?php include('crud/header.php'); ?>

<main class="container">
  <!-- ADD TASK FORM -->
  <h3>NEW</h3>
      <div class="" >
        <form action="crud/save_task.php" method="POST">
          <div class="">
            <input type="text" name="title" class="" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="20" class="" id="description" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="" value="Save Task">
        </form>
      </div>
  <div class="row">
    <div class="">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      
    </div>
    <div class="">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM post ORDER BY created_at DESC";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="crud/edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker">EDIT</i>
              </a>
              <a href="crud/delete_task.php?id=<?php echo $row['id']?>" onClick="if (confirm('Are you sure you want to delete?')) document.form.submit(); return false;" class="btn btn-danger">
                <i class="far fa-trash-alt">DEL</i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <div>
      <hr>
      <h5>Contact Developer</h5>
      <a href="https://www.linkedin.com/in/fredkiptui/">Linkedin</a>
      <br><a href="https://twitter.com/techmsafi">Twitter</a>
      <p>fredkiptui.58@gmail.com</p>
  </div>
</main>
<script type="text/javascript">
    ClassicEditor.create( document.querySelector( '#description' ) )
</script>

<?php include('crud/footer.php'); ?>
