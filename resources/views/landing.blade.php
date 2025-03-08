<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to instapost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <section class="text-center m-5">
      <img class="img-fluid" src="https://cdni.iconscout.com/illustration/premium/thumb/connect-with-friend-via-social-network-illustration-download-in-svg-png-gif-file-formats--media-work-activity-announcement-chat-pack-people-illustrations-3514680.png" alt="">
      <div class="bg-dark text-white p-2">
          <h1>Welcome to Instapost</h1>
          <p>Connect your friend all over the world</p>
          <a href="{{ route('register') }}" class="btn btn-light">Create an account for free</a>
          <div class="p-2">
            <a class="text-white" href="{{ route('login') }}">Already have an acount? Click here to login</a>
          </div>
      </div>
  </section>
  
</body>
</html>