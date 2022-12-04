<style>
  form{
    width: 700px;
    border: 2px solid green;
    padding: 20px;
    border-radius: 7px;
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }

  button.bty{
    width: 50%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
  }
</style>

<form action="./newProject/handleJobs.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Job Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="jobTitle" aria-describedby="emailHelp" required>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Job Descriptions</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
  </div>

  <select class="form-select" aria-label="Default select example" name="jobTime" required>
    <option value="full time" selected>Full time</option>
    <option value="part time">Part time</option>
    <option value="intership">Intership</option>
  </select>

  <div class="mb-3">
    <label for="location" class="form-label">Location</label>
    <input type="text" class="form-control" name="location" id="location" aria-describedby="emailHelp" required>
  </div>

  <button type="submit" class="btn btn-success bty">Save</button>

</form>