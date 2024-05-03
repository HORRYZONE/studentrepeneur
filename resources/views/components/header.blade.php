<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        body {
            background-color: #F9FAFB;
        }

        header {
            background-color: #F9FAFB;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-name-container {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .logo {
            margin-right: 10px;
            max-width: 100%;
            height: auto;
        }

        .name {
            font-size: 20px;
            font-weight: bold;
        }

        .search-container {
            display: flex;
            flex-direction: row;
            /* Change flex-direction to row */
            align-items: center;
            /* Center align the items vertically */
            margin-right: 10px;
            width: 370px;
            height: 35px;
            border-radius: 8px;
            padding: 10px;
            background-color: #FFFFFF;
            border: 1px solid #D0D5DD;
            position: relative;
        }

        .search-icon {
            margin-right: 10px;
        }

        .search-text {
            margin-bottom: 10px;
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            font-weight: normal;
        }

        .search-input {
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            font-weight: normal;
            border: none;
            outline: none;
            background-color: transparent;
        }

        .explore-button {
            margin-left: 10px;
            background-color: #EAFBF0;
            border-radius: 8px;
            border: none;
            width: 125px;
            height: 35px;
            padding: 6px 12px;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: bold;
            color: #15B097;
        }

        .auth-container {
            display: flex;
            align-items: center;
        }

        .register-button{
            background-color: #15B097;
            height: 45px;
            width: 165px;
            border-radius: 50px;
            border: none;
            color: #F5F9F9;
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            font-weight: normal;
        }
        .login-button {
            margin-left: 5px;
            background-color: #F9FAFB;
            border: none;
            width: 125px;
            height: 35px;
            padding: 6px 12px;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: bold;
            color: #15B097;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo-container">
            <div class="logo-name-container">
                <img class="logo" src="images/site-logo.svg" alt="Site Logo">
                <div class="name">
                    <img src="images/site-name.svg" alt="Site Name">
                </div>
            </div>

            <div class="search-container">
                <img class="search-icon" src="images/search.svg" alt="Search Icon">
                <input class="search-input" type="text" placeholder="Search for a project">
                <button class="explore-button">Explore</button>
            </div>
        </div>

        <div class="auth-container">
            <button class="register-button">Create account</button>
            <button class="login-button">Log in</button>
        </div>
    </header>

</body>

</html>