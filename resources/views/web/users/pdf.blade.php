<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <link rel="stylesheet" href="cv.css">--}}
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: silver;
        }

        .cv {
            width: 70%;
            padding: 30px;
            background-color: white;
            margin: 50px auto;
        }

        .cv-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid black;
        }

        .cv-top h1 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .cv-top img {
            width: 15%;
            margin: 20px 0px;
        }
        .left-right {
            width: 90%;
            padding-bottom: 32px;
            display: flex;
            align-items: flex-start;
        }
        .left {
            height: 1040px;
            border-right: 1px solid #2c3746;
            position: relative;
        }

        .circles {
            position: absolute;
            width: 10%;
            height: 100%;
            top: -97px;
            left: -6px;
            display: flex;
            flex-direction: column;
        }

        .circle {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: black;
            margin: auto;
        }
        .circle-about {
            top: 94px;
            position: absolute;
        }

        .circle-mrfix {
            top: 303px;
            position: absolute;
        }
        .circle-professional {
            top: 410px;
            position: absolute;
        }
        .circle-lumusoft {
            top: 56.5%;
            position: absolute;
        }
        .nsp {
            top: 64.5%;
            position: absolute;
        }
        .web {
            top: 72.5%;
            position: absolute;
        }
        .glex {
            top: 80.5%;
            position: absolute;
        }
        .circle-edu {
            top: 91.5%;
            position: absolute;
        }
        .cv-center {
            width: 100%;
            margin-top: 10px;
            display: flex;
            justify-content: space-around;
        }
        .cv-center .left-center {
            width: 56%;
        }
        .cv-center .right-center {
            width: 100%;
            padding: 0px 15px;
        }
        .cv-center .contact {
            width: 90%;
            padding-bottom: 10px;
            padding-left: 5px;
            border-bottom: 1px solid black;
        }
        .cv-center .contact p {
            font-weight: 700;
            margin: 10px 0px;
        }
        .cv-center .expertise {
            width: 90%;
            margin-top: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
            border-bottom: 1px solid black;
        }

        .cv-center .expertise ul {
            margin: 10px 20px;
        }

        .cv-center .expertise ul li {
            margin: 10px 0px;
        }

        .cv-center .skill {
            width: 90%;
            margin-top: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
            border-bottom: 1px solid black;
        }

        .cv-center .skill ul {
            margin: 10px 20px;
        }

        .cv-center .skill ul li {
            margin: 10px 0px;
        }

        .cv-center .lang {
            width: 90%;
            padding: 10px 5px;
            border-bottom: 1px solid black;
        }

        .cv-center .lang p {
            margin: 10px 0px;
        }

        .cv-center .portfolio {
            width: 90%;
            padding: 10px 5px;
        }

        .cv-center .portfolio p {
            font-weight: 700;
            margin: 10px 0px;
        }

        .cv-center .about {
            width: 90%;
            margin-left: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid black;
        }

        .cv-center .about p {
            margin: 10px 0px;
        }

        .cv-center .experience {
            width: 90%;
            margin: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid black;
        }

        .cv-center .experience h2 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cv-center .experience p {
            font-weight: 700;
            margin: 20px 0px;
        }

        .cv-center .experience span {
            font-style: italic;
            line-height: 1.5;
        }

        .cv-center .edu {
            width: 90%;
            margin: 10px;
            padding-bottom: 10px;
        }

        .cv-center .edu p {
            margin: 10px 0px;
        }

        .cv-center .edu span {
            margin: 0px 10px;
        }
    </style>
</head>
<body>
<div class="cv">
    <div class="cv-top">
        <div class="top-text">
            <h1>Enver Esgerov</h1>
            <p>FULLSTACK DEVELOPER</p>
        </div>
        <img src="{{ !empty($data['image']) ? asset('uploads/cv/'.$data['image']) : asset('user/user.png') }}" alt="">
    </div>
    <div class="cv-center">
        <div class="left-center">
            <div class="contact">
                <h2>Contact</h2>
                <p>Phone</p>
                <span>(+994) 50 702 70 93</span>
                <p>Email</p>
                <span>enver.esgerov0106gmail.com</span>
                <p>Linkedin</p>
                <span>https://www.linkedin.com/in/anvar-asgarov</span>
            </div>
            <div class="expertise">
                <h2>Expertise</h2>
                <ul>
                    <li>PHP , MVC</li>
                    <li>Laravel framework</li>
                    <li>Yii2 framework</li>
                    <li>Codeigiter framework</li>
                    <li>Kohana framework</li>
                    <li>SOLID Prinsipial , OOP</li>
                    <li>MySQL , PostgreSQL</li>
                    <li>Rest/Soap Api</li>
                    <li>Windows Server</li>
                    <li>Docker</li>
                    <li>Node Js(Expres Js Framework)</li>
                    <li>HTML,CSS,Js,AJAX,Jquery</li>
                    <li>Git,Github,Bitbucket</li>
                </ul>
            </div>
            <div class="skill">
                <h2>Skill</h2>
                <ul>
                    <li>Effective Leadership</li>
                    <li>Stress Management</li>
                    <li>Skill Building</li>
                    <li>Time management</li>
                    <li>Relationship Building</li>
                </ul>
            </div>
            <div class="lang">
                <h2>Language</h2>
                <p>Azerbaijani - Native</p>
                <p>Turkish - Intermediate</p>
                <p>English - Intermediate</p>
            </div>
            <div class="portfolio">
                <h2>Portfolio</h2>
                <p>https://github.com/Esgerov-hub</p>
            </div>
        </div>
        <div class="left-right">
            <div class="left">
                <div class="circles">
                    <div class="circle circle-about"></div>
                    <div class="circle circle-mrfix"></div>
                    <div class="circle circle-professional"></div>
                    <div class="circle circle-lumusoft"></div>
                    <div class="circle nsp"></div>
                    <div class="circle web"></div>
                    <div class="circle glex"></div>
                    <div class="circle circle-edu"></div>
                </div>
            </div>
            <div class="right-center">
                <div class="about">
                    <h2>About</h2>
                    <p>I am a professional with 4 years of experience in software development. I am
                        passionate about engaging in creative and innovative projects, learning new
                        technologies, and enhancing my technical skills. I value teamwork and strive
                        to achieve the best results by bringing together different perspectives.
                    </p>
                </div>
                <div class="experience">
                    <h2>Experience</h2>
                    <p>mrfix.az 01.2024 - Current</p>
                    <span>
                        Correcting errors in existing services and their development.Building new functions of the project.
                    </span>
                    <p>Professional IT MMC 11.2022 - Current</p>
                    <span>Managing government projects, developing new services and modules,
                        upgrading existing services and modules, and providing technical
                        support for current initiatives.
                        Developing and maintaining detailed documentation, use cases and
                        process flows</span>
                    <p>Lumusoft 10-2022-03.2023</p>
                    <span>Fullstack developer Freelancer</span>
                    <p>NSP Solutıons 08-2022-10.2022</p>
                    <span>Fullstack developer Freelancer</span>
                    <p>Weblabs.az 08-2022-12.2022</p>
                    <span>Fullstack developer Freelancer</span>
                    <p>Glex.az 05.2021 - 08.2022</p>
                    <span>Backend Developer</span>
                    <span>Junior Backend Developer at glex.az and Autotap websites</span>
                </div>
                <div class="edu">
                    <h2>Education</h2>
                    <p>AzTU - Azerbaijan Technical University  <span>15.09.2018 - 30.06.2022</span> <br>
                        (Computer science)
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
