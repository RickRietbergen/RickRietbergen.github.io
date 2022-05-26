<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- link css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- tab logo page -->
    <!-- google fonts -->
</head>
    <?php
        include_once "php/header.php";
    ?>
<body>
    <main>
        <div class="container_start" id="index">
            <div class="bg"></div>
            <div class="bg bg2"></div>
            <div class="bg bg3"></div>
            <div class="title">
                <h2>Rickyboy026</h2>
                <p>Rick Rietbergen</p>
                <p>Developer && student</p>
            </div>
        </div>

        <div class="container_project" id="projects">
            <div class="top">
                <div class="project">
                    <img src="assets/afbeeldingen/placeholder.png" alt="placeholder">
                    <div class="all_links">
                        <div class="but_github">
                            <a href="https://google.nl" class="but_github">
                                view on github
                            </a>
                        </div>
                        <div class="but_view">
                            <a href="https://google.nl" class="but_view">
                                view project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <img src="assets/afbeeldingen/placeholder.png" alt="placeholder">
                    <div class="all_links">
                        <div class="but_github">
                            <a href="https://google.nl" class="but_github">
                                view on github
                            </a>
                        </div>
                        <div class="but_view">
                            <a href="https://google.nl" class="but_view">
                                view project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <img src="assets/afbeeldingen/placeholder.png" alt="placeholder">
                    <div class="all_links">
                        <div class="but_github">
                            <a href="https://google.nl" class="but_github">
                                view on github
                            </a>
                        </div>
                        <div class="but_view">
                            <a href="https://google.nl" class="but_view">
                                view project
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="down">
                <div class="project">
                    <img src="assets/afbeeldingen/placeholder.png" alt="placeholder">
                    <div class="all_links">
                        <div class="but_github">
                            <a href="https://google.nl" class="but_github">
                                view on github
                            </a>
                        </div>
                        <div class="but_view">
                            <a href="https://google.nl" class="but_view">
                                view project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <img src="assets/afbeeldingen/placeholder.png" alt="placeholder">
                    <div class="all_links">
                        <div class="but_github">
                            <a href="https://google.nl" class="but_github">
                                view on github
                            </a>
                        </div>
                        <div class="but_view">
                            <a href="https://google.nl" class="but_view">
                                view project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <img src="assets/afbeeldingen/placeholder.png" alt="placeholder">
                    <div class="all_links">
                        <div class="but_github">
                            <a href="https://google.nl" class="but_github">
                                view on github
                            </a>
                        </div>
                        <div class="but_view">
                            <a href="https://google.nl" class="but_view">
                                view project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container_about" id="about">
            <div class="title">
                <h2>About Me</h2>
            </div>
            <div class="info">
                <div class="image">
                    <img src="assets/afbeeldingen/me.png" alt="picture about">
                </div>
                <div class="txt">
                    <h1 class="title_about">Rick Rietbergen</h1>
                    <p>
                    My name is Rick Rietbergen and I'm currently living in the Netherlands.
                    I am a first year student at ROC Nijmegen and I am currently accelerating my education as a software developer.
                    My hobbies are fitness and coding.
                </p>
                </div>
            </div>
        </div>

        <div class="container_contact" id="contact">
            <div class="title">
                <h2>About Me</h2>
            </div>

            <form method="post" id="form">
                <label id="label__fullname" for="fullname">Full Name</label>
                <input
                    id="input__fullname"
                    type="text"
                    name="fullname"
                    maxlength=""
                    placeholder="First Name"
                    required
                />

                <label id="label__email" for="">email</label>
                <input
                    id="input__email"
                    type="text"
                    name="email"
                    maxlength=""
                    placeholder="Example@gmail.com"
                    required
                />

                <label id="label__discription" for="discription">Send A Message</label>
                <textarea
                    id="input__discription"
                    name="discription"
                    rows="20"
                    placeholder="Write something..."
                    required
                ></textarea>
                <input id="click__submit" type="submit" value="submit" />
            </form>
        </div>
        
        <?php
            include_once "php/footer.php";
        ?>
    </main>
</body>
</html>