<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mark Ian Pamintuan">
    <meta name="description" content="Developer Portfolio">
    <meta name="keywords" content="Web Development, Desktop Development, Portfolio, Freelancer, Programmer, HTML, JavaScript, CSS, PHP, Wordpress, Visual Basic.Net, MySQL">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>My Portfolio</title>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavbar" role="navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <strong>Mark Ian Pamintuan</strong>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div id="lead">
            <div id="lead-content">
                <h1 class="white">MARK IAN PAMINTUAN</h1>
                <h2>Web & Desktop Developer</h2>
                <a href="#" class="btn btn-default" id="resume">Download Resume</a>
            </div>
            <div id="lead-overlay"></div>
        </div>
    </section>

    <section>
        <div id="education">
            <header>
                <h2 class="text-center">Education</h2>
            </header>
            <div class="education-block">
                <h3>Don Honorio Ventura Technological State University</h3>
                <span class="education-date">June 2012 - March 2016</span>
                <h4>Bachelor of Science in Information Technology</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in iaculis ex. Etiam volutpat laoreet urna. Morbi ut tortor nec nulla commodo malesuada sit amet vel lacus. Fusce eget efficitur libero. Morbi dapibus porta quam laoreet placerat.</p>
            </div>
        </div>
    </section>

    <section>
        <div id="projects">
            <header>
                <h2 class="text-center white">Projects</h2>
            </header>
            <div class="projects-block">
            
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                        <img src="img/projects/thesis/VB.Net Tutorial with Code Snippet Generator.png" alt="image">
                        <div class="caption">
                            <h3>College Thesis</h3>
                            <p>My college thesis was a <strong>LAN-based Visual Basic.Net Tutorial with Code Snippet Generator</strong> which was a desktop application. The features of the system are adding of students, lectures, tutorial videos, snippets(where you can click a button then it will auto-paste it to the Visual Studio IDE), logs and admin notifications.</p>
                            <div class="col-sm-12 col-md-12 text-center">
                                <a href="https://github.com/ianpamintuan/thesis" class="btn btn-primary" role="button" target="_blank">View Project</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                        <img src="img/projects/ama-tabulation-system/AMA Tabulation System.png" alt="image">
                        <div class="caption">
                            <h3>AMA Tabulation System</h3>
                            <p><strong>AMA Tabulation System</strong> is a LAN-based desktop application for AMA Computer College San Fernando. The features of the system are adding of users(admin, judge, scorer), sports, players, teams, matches and events. The main use of the system is the tabulation of Pageant contests and Intramurals sports scoring.</p>
                            <div class="col-sm-12 col-md-12 text-center">
                                <a href="https://github.com/ianpamintuan/ama-tabulation-system" class="btn btn-primary" role="button" target="_blank">View Project</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                        <img src="img/projects/mobile-app/Webp.net-resizeimage.png" alt="image">
                        <div class="caption">
                            <h3>Name the Flag</h3>
                            <p><strong>Name the Flag</strong> is an Android game which was built using Adobe Flex. The game concept is to choose the correct choice for each flag displayed on each question. It uses SQLite database for saving high scores.</p><br><br>
                            <div class="col-sm-12 col-md-12 text-center">
                                <a href="https://github.com/ianpamintuan/name-the-flag" class="btn btn-primary" role="button" target="_blank">View Project</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div id="skills">
            <header>
                <h2 class="text-center">Skills</h2>
            </header>
            <div class="skills-block">
                <ul id="skills-list">
                    <li><h3><span class="label label-default">HTML</span></h3></li>
                    <li><h3><span class="label label-default">CSS</span></h3></li>
                    <li><h3><span class="label label-default">JavaScript</span></h3></li>
                    <li><h3><span class="label label-default">jQuery</span></h3></li>
                    <li><h3><span class="label label-default">Bootstrap</span></h3></li>
                    <li><h3><span class="label label-default">PHP</span></h3></li>
                    <li><h3><span class="label label-default">Codeigniter</span></h3></li>
                    <li><h3><span class="label label-default">Wordpress</span></h3></li>
                    <li><h3><span class="label label-default">Visual Basic.Net</span></h3></li>
                    <li><h3><span class="label label-default">C++</span></h3></li>
                    <li><h3><span class="label label-default">Java</span></h3></li>
                    <li><h3><span class="label label-default">MySQL</span></h3></li>
                    <li><h3><span class="label label-default">Git</span></h3></li>
                    <li><h3><span class="label label-default">Microsoft Office Applications</span></h3></li>
                    <li><h3><span class="label label-default">Adobe Flash</span></h3></li>
                    <li><h3><span class="label label-default">Adobe Flex Builder</span></h3></li>
                    <li><h3><span class="label label-default">Adobe Photoshop</span></h3></li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div id="contact">
            <header>
                <h2 class="text-center white">Contact Me</h2>
            </header>
            <div class="contact-block">
                <div class="form-container">
                    <form method="post" action="https://formspree.io/ianmayfire@gmail.com">
                        <input type="hidden" name="subject" id="subject" value="Contact message from personal portfolio">
                        <input type="email" name="email" id="email" placeholder="Your email" class="form-control" required>
                        <textarea name="message" id="message" placeholder="Your message" class="form-control" required></textarea>
                        <input type="submit" name="submit" id="submit" value="Send" class="form-control">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div id="footer">
            <div class="footer-block">
                <div class="col-sm-6 copyright">
                    <p>Copyright &copy 2017 <a href="https://github.com/ianpamintuan">Mark Ian Pamintuan</a></p> 
                </div>
                <div class="col-sm-6 social">
                    <div id="social">
                        <ul>
                            <li><a href="mailto:ianmayfire@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                            <li><a href="https://github.com/ianpamintuan" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/mark-ian-pamintuan" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>