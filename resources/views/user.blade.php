<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
    <form action="upload" method="post" class="p-5">
    EMAIL : <input type="email" name="email" id="email" class="form-control mb-4">
    SUBJECT : <input type="text" name="subject" id="sub" class="form-control mb-4">
    DESCRIBE : <textarea type="text" name="textarea" id="textarea" class="form-control mb-4"></textarea>
    <button type="submit" class="float-right bg-danger pt-5">SUBMIT<button>
    </form>
    </div>
</body>
</html>