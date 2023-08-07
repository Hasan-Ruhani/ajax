<html>
  <head>
    <title>Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    ></link>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form style="padding: 50px;">
            <input type="text" id="name" placeholder="Name" required> <br> <br>
            <input type="email" id="email" placeholder="E-mail" required> <br> <br>
            <button onclick="myFunction(event)" type="submit" class="btn btn-primary">submit</button>
          </form>
        </div>

        <div class="col-md-6" style="padding: 50px;">
          <p>Name: <span id="namePlace"></span></p>
          <p>Email: <span id="emailPlace"></span></p>
        </div>
      </div>
    </div>

    <script>
      function myFunction(event) {
        event.preventDefault();
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;

        let add = document.getElementById("namePlace");
        let add2 = document.getElementById("emailPlace");
        add.innerHTML = name;
        add2.innerHTML = email;
      }
    </script>
  </body>
</html>
