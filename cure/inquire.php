<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    
    


<form action="insert.php" method="post">


    <div class= "container mt-5 ">
<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> <a href="index.php">  Go back</a></span>
    
    <div class="mx-auto" style="width: 200px;">
    <h2>Inquiry Form</h2>
</div>
  <!-- Name input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="name">Name</label>
    
    <input type="text" name="name" id="name" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="email">Email address</label>
    
    <input type="email" name="email" class="form-control" />
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="message">Message</label>

    <textarea class="form-control" name="message" id="form4Example3" rows="4"></textarea>
  </div>

  

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
  </div>
</form>

</body>
</html>