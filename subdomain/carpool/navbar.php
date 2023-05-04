<!DOCTYPE html>
<html>

<head>
  <title>Navigation Bar</title>
  <style>
    nav {
      background-color: Black;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    li {
      margin: 0 20px;
    }

    a {
      color: white;
      text-decoration: none;
      font-size: 18px;
    }

    a:hover {
      color: #ccc;
    }

    @media (max-width: 768px) {
      ul {
        flex-direction: column;
      }

      li {
        margin: 10px 0;
      }
    }
  </style>
</head>

<body>

  <nav>
    <ul class="navbtn">

      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Log Out</a></li>
    </ul>
  </nav>

</body>

</html>