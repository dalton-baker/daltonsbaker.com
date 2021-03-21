<!DOCTYPE html>
<html>
<style>
    <?php include 'index.css'; ?>
</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dalton Baker's Portfolio</title>
</head>

<body>
    <div class="title-div">
        <div class="title">Dalton Baker</div>
        <div class="sub-title">Computer Science B.S. at SDSM&T</div>
    </div>

    <div id="portfolio">
        <input type="radio" name="menu_toggle" id="repository-tog">
        <input type="radio" name="menu_toggle" id="example-tog">
        <input type="radio" name="menu_toggle" id="contact-tog">

        <div id="menu-bar">
            <label for="repository-tog" id="repository-label" tabindex="1">Git Repositories</label>
            <label for="example-tog" id="example-label" tabindex="2">Examples Of Work</label>
            <label for="contact-tog" id="contact-label" tabindex="3">Contact Info</label>
        </div>

        <div id="menu-content">
            <div id="default-content">
                <p>Welcome to my portfolio</p>
            </div>

            <div id="repository-content">
                <a href="https://gitlab.com/dalton_baker" id="gitlab-link">
                    <img src="./assets/gitlab.jpg">
                    <div><i class="fa fa-gitlab"></i>&nbsp; Gitlab</div>
                </a>
                <a href="https://github.com/dalton-baker" id="github-link">
                    <img src="./assets/github.jpg">
                    <div><i class="fa fa-github"></i>&nbsp; Github</div>
                </a>
            </div>

            <div id="example-content">
                <a href="https://metalsmarketdisplay.com" id="metalsmarket-link">
                    <img src="./assets/metalsmarketdisplay.jpg">
                    <div>metalsmarketdisplay.com</div>
                </a>
                <a href="https://dakotahstaxes.com/" id="github-link">
                    <img src="./assets/dakotahtaxes.jpg">
                    <div>dakotahstaxes.com</div>
                </a>
            </div>

            <div id="contact-content">
                <a href="https://www.linkedin.com/in/dalton-baker/" id="normal-link">
                    <div><i class="fa fa-linkedin"></i>&nbsp; LinkdIn</div>
                </a>
            </div>

            <div id="contact-content">
                <a href="mailto: dalton.s.baker@gmail.com" id="normal-link">
                    <div><i class="fa fa-google"></i>&nbsp; dalton.s.baker@gmail.com</div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>