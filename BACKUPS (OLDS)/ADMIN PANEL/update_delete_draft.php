<!-- Modal for Deleting Record -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this record?
      </div>
      <div class="modal-footer">
        <form action="delete.php" method="post">
          <input type="hidden" name="id" id="deleteId">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Updating Record -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="post">
          <input type="hidden" name="id" id="updateId">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="updateName">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="updateEmail">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>






<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="#" id="deleteLink" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- PHP Script for Delete -->
<?php
  if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM table_name WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
      header("Location: index.php");
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
?>

<!-- JavaScript for Delete Modal -->
<script>
  function deleteRecord(id) {
    var link = "index.php?delete=" + id;
    $("#deleteLink").attr("href", link);
    $("#deleteModal").modal("show");
  }
</script>







<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit.php" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" id="address" required>
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" id="city" required>
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" name="state" id="state" required>
          </div>
          <div class="form-group">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" name="zip" id="zip" required>
          </div>
          <input type="submit" class="btn btn-primary" value="Save Changes">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit Record JavaScript -->
<script>
  $(document).ready(function() {
    $('.edit-btn').click(function() {
      var id = $(this).data('id');
      var name = $(this).data('name');
      var email = $(this).data('email');
      var phone = $(this).data('phone');
      var address = $(this).data('address');
      var city = $(this).data('city');
      var state = $(this).data('state');
      var zip = $(this).data('zip');
      $('#id').
    }}

</script>



      // <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="edit.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" id="editId">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="editName" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="editEmail" name="email">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Edit Record JavaScript -->
<script>
  $(document).ready(function() {
    $('.edit-btn').click(function() {
      var id = $(this).data('id');
      var name = $(this).data('name');
      var email = $(this).data('email');
      $('#editId').val(id);
      $('#editName').val(name);
      $('#editEmail').val(email);
      $('#editModal').modal('show');
    });
  });
</script>
