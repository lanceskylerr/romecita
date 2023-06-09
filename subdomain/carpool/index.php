<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Carpool!</title>
  <link rel="icon" type="image/x-icon" href="img_avatar2.png">
</head>

<body>
  <!DOCTYPE html>
  <html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        /* background-image: linear-gradient( 109.6deg,  rgba(61,131,97,1) 11.2%, rgba(28,103,88,1) 91.1% ); */
        /* background-image: radial-gradient( circle 651px at 52.1% -25%,  rgba(193,254,198,1) 0.4%, rgba(71,154,115,1) 86.6% ); */
        background-image: radial-gradient(circle farthest-corner at 52.6% 1%, rgba(132, 228, 123, 1) 11.4%, rgba(32, 128, 65, 1) 81.8%);
      }

      /* Full-width input fields */
      input[type=text],
      input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      /* Set a style for all buttons */
      button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      /* Extra styles for the cancel button */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      /* Center the image and position the close button */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }

      img.avatar {
        width: 20%;
        border-radius: 50%;
      }

      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      /* The Modal (background) */
      .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
      }

      .initialLogin {
        position: absolute;
        top: 45%;
        left: 45%;
      }

      .title {
        /* font: */
        color: white;
        position: absolute;
        top: 230px;
        left: 720px;
      }



      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }

      a.btn {
        display: inline-block;
        background-color: #fff;
        color: #4CAF50;
        border: 1px solid #4CAF50;
        padding: 10px 20px;
        border-radius: 3px;
        text-decoration: none;
        font-size: 16px;
        text-transform: uppercase;
        transition: all 0.3s ease;
      }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
        from {
          -webkit-transform: scale(0)
        }

        to {
          -webkit-transform: scale(1)
        }
      }

      @keyframes animatezoom {
        from {
          transform: scale(0)
        }

        to {
          transform: scale(1)
        }
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }

        .cancelbtn {
          width: 100%;
        }
      }
    </style>
  </head>

  <body>

    <h2 class="title">Carpool</h2>
    <div class="initialLogin">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
      <td><a href="registration.php" name="list" class="btn uppercase btn-outline-light">REGISTER</a></td>
    </div>
    <div id="id01" class="modal">

      <form class="modal-content animate" action="login.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
          <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pw" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>

    <script>
      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>

  </body>

  </html>

</body>

</html>