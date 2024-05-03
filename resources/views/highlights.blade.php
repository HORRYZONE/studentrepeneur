<!DOCTYPE html>
<html>

<head>
    <title>Three Card Container</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        h1 {
            color: #101828;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
        }

        h2 {
            color: #6941C6;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
        }

        h3 {
            color: #667085;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        .heading-text {
            margin-left: 30px;
        }

        .heading-text h1 {
            font-size: 36px;
            margin-top: 5px;
        }

        .heading-text h2 {
            font-size: 16px;
            margin-top: 15px;
        }

        .heading-text h3 {
            font-size: 20px;
            margin-top: 5px;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            padding: 50px;
        }

        .card {
            width: 384px;
            height: 553px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .images {
            width: 336px;
            height: 240px;
            overflow: hidden;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-detail {
            margin-top: 20px;
            text-align: left;
        }

        .card h2 {
            margin-top: 0;
        }

        .card h1 {
            margin-bottom: 0;
            font-size: 24px;
        }

        .card h3 {
            margin-bottom: 0;
            font-size: 16px;
        }

        .card-detail {
            width: 100%;
        }

        .card-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-right: 10px;
            padding-left: 10px;
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            margin-top: 10px;
        }

        .progress-bar::after {
            content: '';
            display: block;
            width: 50%;
            /* Adjust the width to reflect the progress */
            height: 100%;
            background-color: #57DBD7;
            /* Adjust the color as needed */
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="highlight-container">
        <div class="heading-text">
            <h2>Explore Programs</h2>
            <h1>OUR MOST POPULAR PROJECTS</h1>
            <h3>Let's support our students product,it will be useful for you.</h3>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <div class="images">
                        <img src="images/card-image-1.png" alt="card-image">
                    </div>
                </div>

                <div class="card-detail">
                    <h2>Design</h2>
                    <div class="card-title">
                        <h1>Learn With Shoaib</h1>
                        <img src="images/redirect.svg" alt="Redirect">
                    </div>
                    <h3>Design Web Sites and Mobile Apps that Your Users Love and Return to Again.</h3>
                    <div class="progress-bar"></div>
                    <div>
                        <div class="profile-picture">

                        </div>
                        <div class="profiles">
                            <div class="profile-name"></div>
                            <div class="profile-support"></div>
                        </div>
                        <div class="fund"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h2>Card 2</h2>
                <p>This is the content of Card 2.</p>
            </div>
            <div class="card">
                <h2>Card 3</h2>
                <p>This is the content of Card 3.</p>
            </div>
        </div>
    </div>

</body>

</html>