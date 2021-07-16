<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="ressource/css/css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title> Pop Up Notification</title> 
</head>

<body>
  <div style="margin-top: 60px;" class="container">
    <div class="mt-5">
      <p style="font-weight: bold; font-size: 25px;" class="text-center"> NOTIFICATION AUTOMATIQUE AVEC AJAX</p>
    </div>
    <div class="row">
      <form id="comment_form" method="POST">
        <div class="mt-5">
          <label class="form-label">Email</label>
          <input name="subject" id="subject" type="iduser" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Comment</label>
          <input name="comment" id="comment" type="text" class="form-control">
        </div>
        <button style="margin-top: 5px;" id="post" name="post" type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
    </div>
  </div>

  <div style="margin-top: 150px;" class="container">
    <div class="row">
      <div id="alert_p opover">
        <div class="wrapper">
          <div class="content">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</div>
<script src="ressource/js/load.js"></script>

</html>