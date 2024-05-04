<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration Form in HTML CSS</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="/css/registration.css" />
</head>

<body>
  <section class="container">
    <header>Registration Form</header>
    <form action="{{ route('registration.store') }}" class="form" method="POST">
      @csrf
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" name="full_name" placeholder="Enter full name" required />
      </div>

      <div class="input-box">
        <label>Business Name</label>
        <input type="text" name="business_name" placeholder="Enter business name" required />
      </div>

      <div class="input-box">
        <label>Matric Number</label>
        <input type="text" name="matric_number" placeholder="Enter matric number" required />
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
        <a href="registration-2" class="nextBtn">Next</a>

    </form>
  </section>
</body>

</html>