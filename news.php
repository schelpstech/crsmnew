<?php
include "./include/header.php"
?>

<head>
    <style>
        /* Styling the body */
        body {
            margin: 0;
            padding: 0;
        }

        /* Styling section, giving background
            image and dimensions */
        section {
            width: 100%;
            height: 100vh;
            background:
                url('./assets/image/events/images_2.png'
                );
            background-size: cover;
        }

        /* Styling the left floating section */
        section .leftBox {
            width: 50%;
            height: 100%;
            float: left;
            padding: 50px;
            box-sizing: border-box;
        }

        /* Styling the background of
            left floating section */
        section .leftBox .content {
            color: whitesmoke;
            background: white;
            padding: 40px;
            transition: .5s;
        }

        /* Styling the hover effect 
            of left floating section */
        section .leftBox .content:hover {
            background: wheat;
        }

        /* Styling the header of left
            floating section */
        section .leftBox .content h1 {
            margin: 0;
            padding: 0;
            font-size: 50px;
            text-transform: uppercase;
        }

        /* Styling the paragraph of
            left floating section */
        section .leftBox .content p {
            margin: 10px 0 0;
            padding: 0;
        }

        /* Styling the three events section */
        section .events {
            position: relative;
            width: 50%;
            height: 100%;
            background: none;
            float: right;
            box-sizing: border-box;
        }

        /* Styling the links of
        the events section */
        section .events ul {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            margin: 0;
            padding: 40px;
            box-sizing: border-box;
        }

        /* Styling the lists of the event section */
        section .events ul li {
            list-style: none;
            background: darkgreen;
            box-sizing: border-box;
            height: 200px;
            margin: 15px 0;
        }

        /* Styling the time class of events section */
        section .events ul li .time {
            position: relative;
            padding: 20px;
            background: white;
            box-sizing: border-box;
            width: 30%;
            height: 100%;
            float: left;
            text-align: center;
            transition: .5s;
        }

        /* Styling the hover effect
            of events section */
        section .events ul li:hover .time {
            background: wheat;
        }

        /* Styling the header of time
            class of events section */
        section .events ul li .time h2 {
            position: absolute;
            margin: 0;
            padding: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: darkgreen;
            font-size: 60px;
            line-height: 30px;
        }

        /* Styling the texts of time
        class of events section */
        section .events ul li .time h2 span {
            font-size: 30px;
        }

        /* Styling the details
        class of events section */
        section .events ul li .details {
            padding: 20px;
            background: #fff;
            box-sizing: border-box;
            width: 70%;
            height: 100%;
            float: left;
        }

        /* Styling the header of the
        details class of events section */
        section .events ul li .details h3 {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 22px;
        }

        /* Styling the lists of details
        class of events section */
        section .events ul li .details p {
            position: relative;
            margin: 10px 0 0;
            padding: 0;
            font-size: 16px;
        }

        /* Styling the links of details
        class of events section */
        section .events ul li .details a {
            display: inline-block;
            text-decoration: darkgreen;
            padding: 10px 15px;
            border: 1.5px solid #262626;
            margin-top: 8px;
            font-size: 18px;
            transition: .5s;
        }

        /* Styling the details class's hover effect */
        section .events ul li .details a:hover {
            background: darkgreen;
            color: wheat;
            border-color: red;
        }
    </style>
</head>

<body>
    <section>
        <div class="leftBox">
            <div class="content">
                <h1>
                    CRSM News & Events
                </h1>
                <p>
                    Welcome to our school's vibrant CRSM hub of news and events, where we keep you connected to all the exciting happenings within our educational community. Here, you'll find a treasure trove of information that spans from breaking news to upcoming events that showcase our students' talents, our teachers' dedication, and our commitment to fostering a dynamic learning environment.
                </p>


            </div>
        </div>

        <div class="events">
            <ul>
                <li>
                    <div class="time">
                        <h2>
                            18 <br><span>Sept</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            Welcome back to school
                        </h3>
                        <p>
                            Resumption date
                        </p>
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear: both;"></div>
                </li>
                <li>
                    <div class="time">
                        <h2>
                            18 <br><span>Dec</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            Vacation
                        </h3>
                        <p>
                            Closing date
                        </p>
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <div class="time">
                        <h2>
                            09 <br><span>Jan</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            New Year opening
                        </h3>
                        <p>
                            opening day
                        </p>
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear:both;"></div>
                </li>
            </ul>
        </div>
    </section>
</body>
<?php
include "./include/footer.php"
?>