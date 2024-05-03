<!DOCTYPE html>
<html>

<head>
    <title>Image Slider</title>
    <style>
        body {
            background-color: #f8fafc;
        }

        .container {
            padding: 2rem;
        }

        .slider-wrapper {
            position: relative;
            max-width: 48rem;
            margin: 0 auto;
        }

        .slider {
            display: flex;
            aspect-ratio: 16 / 9;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
            border-radius: 0.5rem;
            -ms-overflow-style: none;
            /* Hide scrollbar IE and Edge */
            scrollbar-width: none;
            /* Hide scrollbar Firefox */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .slider::-webkit-scrollbar {
            display: none;
        }

        .slider img {
            flex: 1 0 100%;
            scroll-snap-align: start;
            object-fit: cover;
        }

        .slider-nav {
            display: flex;
            justify-content: center; /* Center the arrow indicators horizontally */
            position: absolute;
            bottom: 1.25rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .slider-nav a {
            width: 0.5rem;
            height: 0.5rem;
            border-radius: 50%;
            background-color: #fff;
            opacity: 0.75;
            transition: opacity ease 250ms;
        }

        .slider-nav a:hover {
            opacity: 1;
        }

        /* Arrow indicators */
        .slider-nav .arrow {
            width: 1rem;
            height: 1rem;
            background-color: #fff;
            opacity: 0.75;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity ease 250ms;
        }

        .slider-nav .arrow:hover {
            opacity: 1;
        }

        .slider-nav .arrow::before {
            content: "";
            border-style: solid;
            border-width: 0.15em 0.15em 0 0;
            transform: rotate(-45deg);
            width: 0.5em;
            height: 0.5em;
            display: inline-block;
            position: relative;
        }

        .slider-nav .arrow.left::before {
            transform: rotate(135deg);
            margin-right: 0.15em;
        }

        .slider-nav .arrow.right::before {
            transform: rotate(-45deg);
            margin-left: 0.15em;
        }
    </style>
</head>

<body>
    <section class="container">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide-1" src="https://images.unsplash.com/photo-1656464868371-602be27fd4c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary orange planet in space" />
                <img id="slide-2" src="https://images.unsplash.com/photo-1657586640569-4a3d4577328c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary green planet in space" />
                <img id="slide-3" src="https://images.unsplash.com/photo-1656077217715-bdaeb06bd01f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary blue planet in space" />
            </div>
            <div class="slider-nav">
                <a href="#slide-1" class="arrow left"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3" class="arrow right"></a>
            </div>
        </div>
    </section>

</body>

</html>