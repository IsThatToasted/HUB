<html>
<head>
  <title>Contact Form</title>
</head>
<body>
  <form action="send_form_email.php" method="post" enctype="multipart/form-data">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
    </div>
    <div>
      <label for="suggestion">Suggestion:</label>
      <textarea id="suggestion" name="suggestion"></textarea>
    </div>
    <div>
      <label for="file">File:</label>
      <input type="file" id="file" name="file">
    </div>
    <input type="submit" value="Submit">
  </form>
</body>
</html>