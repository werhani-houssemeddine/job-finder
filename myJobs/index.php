<style>
  .job-container{
    padding: 20px;
    display: flex;
    gap: 20px 
  }
  .jobs{
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
            <button type="button" class="btn btn-sm btn-outline-secondary"
              job-id="<?php echo $value['jobID']; ?>"
            >Delete</button>
            <button type="button" class="btn btn-sm btn-outline-secondary"
              job-id="<?php echo $value['jobID']; ?>"
            >Edit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  endforeach; 
  echo "</div>";
?>