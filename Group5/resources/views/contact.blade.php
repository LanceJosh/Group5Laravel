<x-app-layout>
<!DOCTYPE html>
    <html lang="en">
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
        }             nav {
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

                        h1 {
                            margin-top: -850px;
                            margin-left: 5%;
                            color: #0F52BA;
                            font-weight: bold;

                        }

                        p {
                            margin-left: 5%;
                            padding: 10px 0;
                            color: #0F52BA;
                        }
                        .icon-text{
                            margin-left: 2%;
                            margin-top: -2%;
                            padding: 10px 0;
                            color: #0F52BA;
                        }
                        div.icon-contact{
                            color: #0F52BA;
                            margin-left: 5%;
                        }
                        .aboutus{
                            width: 2100px;
                        }
                    </style>
                </head>

                <body>
                    <img class="contactus" src="{{ URL::to('/images/contact-us.png') }}">
                    <h1>Get in touch</h1>
                    <p>We're here to help and answer any questions you might have. <br>We will answer your inquiries in maximum of 48 hours.</p>
                    <div class="icon-contact">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg><p class="icon-text">+63912345678</p></span>

                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg><p class="icon-text">example@gmail.com</p></span>

                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        </svg><p class="icon-text">España Blvd, Sampaloc, Manila, 1000 Metro Manila</p></span>
                    </div>
                </body>

                </html>

                <footer>
                    <div class="footer-content">
                        <p>© 2023 HireLab&Co. | All rights reserved.</p>
                    </div>
                </footer>
</x-app-layout>