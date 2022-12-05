<style>
  .job-container{
    padding: 20px;
    display: flex;
    gap: 20px 
  }
</style>

<?php
  $id = $_SESSION['userID'];

  try{
    $connection = new PDO("mysql:host=localhost;dbname=job-finder", 'root', '');
  } catch (PDOException $error) {
    echo 'failed Connect to DB';
    echo '<br>' . $error->getmessage();
    die();
  }

  $request = $connection->prepare("
    SELECT * FROM `jobs` WHERE `id` = :id
  ");

  $request->execute(['id' => $id]);

  $result = $request->fetchAll();

  if(!count($result)){
    echo '<p>No Jobs Want to add a new Job ? </p>';
    return ;
  }
  echo '<div class="job-container">';
  foreach($result as $key => $value):
    $_title = $value['title'];
    $_description = $value['description'];
    $_location = $value['location'];
?>

<div id="job">
  <div class="col">
    <div class="card shadow-sm">
      <div class="card-body">
        <h2>
          <?php echo $value['title'] ?>
        </h2>
        <p class="card-text">
          <span>Description :</span>
          <?php echo $value['description'] ?>
        </p>
        <p>
          <span>Location :</span>
          <?php echo $value['location'] ?>
        </p>
        <p>
          <?php echo $value['time'] ?>
        </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-danger" style="margin-right: 5px"
            >
              <?php 
                $id = $value['jobID'];
                echo "<a href='./delete/?id' >Delete</a>" 
              ?>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Edit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./editJob/index.php" method="post">
          <?php 
            $jobID = $value['jobID'];
            echo "<input required type='hidden' name='jobId' value='$jobID' >";
          ?>
          <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <?php 
                echo "<input required type='text' class='form-control' id='title' name='title' value='$_title'> ";
              ?>
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <?php 
                echo "<input required type='text' class='form-control' id='description' name='description' value='$_description'> ";
              ?>
            </div>
          </div>

          <div class="row mb-3">
            <label for="location" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-10">
              <?php 
                echo "<input required type='text' class='form-control' id='location' name='location' value='$_location'> ";
              ?>
            </div>
          </div>

          <div class="row mb-3">
            <label for="location" class="col-sm-2 col-form-label">Time</label>
            <div class="col-sm-10">
              <select class="form-select" id="autoSizingSelect" name="time">
                <option value="part time">Part time</option>
                <option value="full time">Full time</option>
                <option value="internship">Internship</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 
  endforeach; 
  echo "</div>";
?>