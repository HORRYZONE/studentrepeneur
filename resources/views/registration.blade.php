<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration Form in HTML CSS</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <!-- Google Fonts  -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  <!---Custom CSS File--->
  <link rel="stylesheet" href="/css/registration.css" />
  <link rel="stylesheet" href="/css/registration_2.css" />

</head>

<body>
  <section class="container">
    <header>Registration Form</header>
    <form class="form" action="{{ route('registration-form') }}" method="POST">
      @csrf
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" name="full_name" placeholder="Enter full name" required />
      </div>

      <div class="input-box">
        <label>Matric Number</label>
        <input type="text" name="matric_number" placeholder="Enter matric number" required />
      </div>


      <div class="input-box address">
        <label>Matric card picture</label>
        <div class="container">
          <input type="file" id="file-input" multiple />
          <label for="file-input">
            <i class="fa-solid fa-arrow-up-from-bracket"></i>
            &nbsp; Choose Files To Upload
          </label>
          <div id="num-of-files">No Files Choosen</div>
          <ul id="files-list"></ul>
        </div>

      </div>


      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" value="male" checked />
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" value="female" />
            <label for="check-female">Female</label>
          </div>
        </div>
      </div>

      <div class="input-box address">
        <label>Address</label>
        <input type="text" name="address1" placeholder="Enter street address" required />
        <input type="text" name="address2" placeholder="Enter street address line 2" required />
        <div class="column">
          <div class="select-box">
            <select name="country">
              <option hidden>Country</option>
              <option>America</option>
              <option>Japan</option>
              <option>India</option>
              <option>Nepal</option>
            </select>
          </div>
          <input type="text" name="city" placeholder="Enter your city" required />
        </div>
        <div class="column">
          <input type="text" name="region" placeholder="Enter your region" required />
          <input type="number" name="postal_code" placeholder="Enter postal code" required />
        </div>
      </div>
      <button type="submit">Next</button>
    </form>
  </section>
</body>
<script>
  let fileInput = document.getElementById("file-input");
let fileList = document.getElementById("files-list");
let numOfFiles = document.getElementById("num-of-files");

fileInput.addEventListener("change", () => {
  fileList.innerHTML = "";
  numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

  for (i of fileInput.files) {
    let reader = new FileReader();
    let listItem = document.createElement("li");
    let fileName = i.name;
    let fileSize = (i.size / 1024).toFixed(1);
    listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}KB</p>`;
    if (fileSize >= 1024) {
      fileSize = (fileSize / 1024).toFixed(1);
      listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}MB</p>`;
    }
    fileList.appendChild(listItem);
  }
});
</script>

</html>