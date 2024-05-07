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
    <form action="{{ route('registration.store') }}" class="form">
      @csrf

      <div class="input-box">
        <label>Business Name</label>
        <input type="text" name="business_name" placeholder="Enter business name" required />
      </div>

      <div class="input-box">
        <label>About Business</label>
        <input type="text" name="about_business" placeholder="Enter about business" required />
      </div>

      <div class="input-box address">
        <label>Business picture</label>
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

      <div class="input-box">
        <label>Target Fund</label>
        <input type="number" name="target_fund" placeholder="Enter Target Fund" required />
      </div>

      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" name="phone_number" placeholder="Enter phone number" required />
        </div>
        <div class="input-box">
          <label>Birth Date</label>
          <input type="date" name="birth_date" placeholder="Enter birth date" required />
        </div>
      </div>

      
        <div class="select-btn">
          <span class="btn-text">Brands Tag (choose any applicable)</span>
          <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </div>
        <ul class="list-items">
          <li class="item">
            <span class="checkbox">
              <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Fashion</span>
          </li>
          <li class="item">
            <span class="checkbox">
              <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Foods</span>
          </li>
          <li class="item">
            <span class="checkbox">
              <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Sportswear</span>
          </li>
          <li class="item">
            <span class="checkbox">
              <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Services</span>
          </li>
          <li class="item">
            <span class="checkbox">
              <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Arts</span>
          </li>
          <li class="item">
            <span class="checkbox">
              <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Snacks</span>
          </li>
        </ul>

      <button type="submit">Submit</button>
    </form>
  </section>


</body>
<script>
  const selectBtn = document.querySelector(".select-btn"),
    items = document.querySelectorAll(".item");
  selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
  });
  items.forEach(item => {
    item.addEventListener("click", () => {
      item.classList.toggle("checked");
      let checked = document.querySelectorAll(".checked"),
        btnText = document.querySelector(".btn-text");
      if (checked && checked.length > 0) {
        btnText.innerText = `${checked.length} Selected`;
      } else {
        btnText.innerText = "Brand Tag";
      }
    });
  })
</script>

</html>