<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList2</title>
    <script>"https://code.jquery.com/jquery-3.3.1.slim.min.js"</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once 'process.php'; ?>
    <div class="row justify-coutent-center">
    <form action="process.php" method="$_POST">
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" placeholder="Enter your location">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary" name="save">Save</button>
        </div>        
    </form>
    </div>
</body>
</html>