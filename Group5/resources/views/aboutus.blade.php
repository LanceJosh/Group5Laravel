<x-app-layout>
<!DOCTYPE html>
    <html lang="en">
<head>
<title>Contact</title>
    <style>
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #0099ff;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav {
        background-color: #013220;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        }

        nav ul {
        list-style-type: none;
        padding: 0;
        }

        nav ul li {
        display: inline;
        margin-right: 20px;
        }

        nav a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        transition: color 0.3s;
        }

        nav a:hover {
        color: #ff6f61;
        }

        .text-about {
        margin-top: -450px;
        margin-left: 10%;
        color: #0F52BA;
        font-weight: bold;
        }
        .text-vision {
        margin-top: -400px;
        margin-left: 10%;
        color: #0F52BA;
        font-weight: bold;
        }
        .text-mission {
        margin-top: -400px;
        margin-left: 10%;
        color: #0F52BA;
        font-weight: bold;
        }

        p {
        margin-left: 10%;
        color: #0F52BA;
        margin-bottom: 10px;
        }
        .aboutus{
            width: 2100px;
        }
    </style>
</head>

                <body>
                    <img class="aboutus" src="{{ URL::to('/images/about-us.png') }}">
                    <h1 class="text-mission">Our Mission</h1>
                    <p>Our mission at HireLab&Co is to empower individuals on their professional journey <br>by providing a seamless and personalized job-seeking experience. We aim to <br>connect talented individuals with diverse and rewarding opportunities, fostering <br>growth and success for both candidates and employers. By leveraging cutting-edge technology <br>and a deep understanding of the evolving job market, we aspire to be the catalyst for positive career <br>transformations.</p>
                    <h1 class="text-vision">Our Vision</h1>
                    <p>At HireLab&Co, we envision a world where every individual has the tools and support <br>needed to unlock their full professional potential. Our vision is to create a global <br>community where talent transcends boundaries, and opportunities abound for everyone. <br>Through our commitment to transparency, innovation, and a human-centric approach, we <br>strive to be the driving force behind a future where the perfect job match is just a click away.</p>
                    <h1 class="text-about">About HireLab&Co.</h1>
                    <p>At HireLab&Co, we believe in the power of connections and the transformative impact of finding the <br>right job. Our platform is more than just a job listing website; it's a dynamic hub where talent meets<br> opportunity. We are dedicated to revolutionizing the way individuals discover and secure their<br> dream careers while assisting companies in building their ideal teams. With a commitment to <br>innovation, inclusivity, and user-centric design, we strive to be the go-to destination for both <br>job seekers and employers.</p>
                </body>

    </html>
</x-app-layout>