<!DOCTYPE html>
<html>

<head>
    <title>Footer Example</title>
    <style>
        /* CSS styles for the footer */
        .footer {
            background-color: #101828;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .context {
            margin-bottom: 10px;
            display: flex;
            flex-direction: row;
        }

        .context-1 {
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
        }

        .site-icon {
            margin-right: 10px;
        }

        .address {
            margin-top: 15px;
            display: flex;
            flex-direction: column;
        }

        .address-text {
            margin-top: 10px;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: normal;
            color: #EAECF0;
        }

        .context-2 {
            margin-bottom: 10px;
            margin-left: 100px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 60%;
        }

        .header {
            margin-top: 10px;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: bold;
            color: #98A2B3;
        }

        .content {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
        }

        .content span {
            margin-bottom: 10px;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: normal;
            color: #EAECF0;
        }

        .trademark {
            margin-bottom: 10px;
            color: #98A2B3;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <footer class="footer">
        
            <div class="context">
                <div class="context-1">
                    <div class="site-icon">
                        <img class="logo" src="images/site-logo-mini.svg" alt="Site Logo">
                        <img class="logo" src="images/site-name-mini.svg" alt="Site Name">
                    </div>
                    <div class="address">
                        <span class="address-text">Kulliyyah of Economics and Management Sciences</span>
                        <span class="address-text">International Islamic University Malaysia</span>
                        <span class="address-text">P.O. Box 10, 50728 Kuala Lumpur</span>
                        <span class="address-text">MALAYSIA.</span>
                    </div>
                </div>
                <div class="context-2">

                    <div class="category">
                        <div class="header">Products</div>
                        <div class="content">
                            <span>Overview</span>
                            <span>Features</span>
                            <span>Solution</span>
                            <span>Tutorials</span>
                            <span>Pricing</span>
                        </div>
                    </div>

                    <div class="category">
                        <div class="header">Company</div>
                        <div class="content">
                            <span>About us</span>
                            <span>Careers</span>
                            <span>Press</span>
                            <span>News</span>
                        </div>
                    </div>

                    <div class="category">
                        <div class="header">Social</div>
                        <div class="content">
                            <span>Twitter</span>
                            <span>LinkedIn</span>
                            <span>Github</span>
                        </div>
                    </div>

                    <div class="category">
                        <div class="header">Legal</div>
                        <div class="content">
                            <span>Terms</span>
                            <span>Privacy</span>
                            <span>Cookies</span>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trademark">
                <div>© 2022 Ed-Circle. All rights reserved.</div>
            </div>
        
    </footer>
</body>

</html>