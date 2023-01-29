

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Nanum+Gothic&family=Varela+Round&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <header class="header">
        <nav>
            <ul>
                <li class="header-left">
                    <div class="my_links">
                        <a href="https://www.iiitn.ac.in/" class="link"><img class="logo" src="images/LOGOF.png"
                                alt="IIITN logo"></a>

                    </div>


                </li>
                <!-- <li>
                    <a href="">
                        Skills 
                    </a>
                </li> -->
            </ul>
            <div class="links">
                <ul class="list">
                    <li id="genreli">Skills<img src="images/down-arrow-head.png" alt="down-arrow-head"
                            class="down-arrow-head">
                        <!-- sublist 0 -->
                        <ul class="sublist">
                            <form action="search.php" method="post">
                                <li><input type="submit" value="Web&nbsp;Development" name="skill_set" id=""
                                        class="skill_dd"> </li>
                                <li><input type="submit" value="App&nbsp;Development" name="skill_set" id=""
                                        class="skill_dd"> </li>
                                <li><input type="submit" value="Competitive&nbsp;Programming" name="skill_set" id=""
                                        class="skill_dd"> </li>
                                <li><input type="submit" value="AR/VR/XR" name="skill_set" id="" class="skill_dd"> </li>
                                <li><input type="submit" value="UI/UX" name="skill_set" id="" class="skill_dd"> </li>
                                <li><input type="submit" value="Data&nbsp;Science" name="skill_set" id=""
                                        class="skill_dd"> </li>
                                <li><input type="submit" value="AI/ML" name="skill_set" id="" class="skill_dd"> </li>
                                <li><input type="submit" value=" More" name="skill_set" id="" class="skill_dd"></li>
                            </form>
                        </ul>
                    </li>
                    <li id="langLi">Section <img src="images/down-arrow-head.png" alt="down-arrow-head"
                            class="down-arrow-head">
                        <!-- sublist -->
                        <ul class="sublist" style="min-width: 6rem;">
                            <li><input type="submit" value="Section&nbsp;A" name="skill_set" id="" class="skill_dd">
                            </li>
                            <li><input type="submit" value="Section&nbsp;B" name="skill_set" id="" class="skill_dd">
                            </li>
                            <li><input type="submit" value=" All" name="skill_set" id="" class="skill_dd"></li>

                        </ul>

                    </li>
                </ul>
            </div>
            <ul>
                <li>
                    <a href="login.php">
                        <img src="images/perm-identity.png" alt="">Account
                </li>
                </a>
                <li>
                    <a href="index.php">
                        <img src="images/home.png" alt="">Home
                </li>
                </a>
                <li>
                    <a href="">
                        <img src="images/search-icon.png" alt="">Search
                </li>
                </a>
            </ul>
        </nav>
    </header>
    <form action="search.php" method="post">
        <div class="jacket">

            <section class="left">
                <ul>
                    <li class="sideLI">Web Development</li>
                    <li class="sideLI">App Development</li>
                    <li class="sideLI">User Interface</li>
                    <li class="sideLI">Game Development</li>
                    <li class="sideLI">Artificial Intelligence</li>
                    <li class="sideLI">Competitive Programming</li>
                    <li class="sideLI">Data Science</li>
                    <li class="sideLI">Open Source</li>
                    <li class="sideLI">User Experience</li>
                    <li class="sideLI">Machine Learning</li>
                </ul>
            </section>
            <section class="right">
                <div class="list_head">search results</div>
                <h3 class="head_a">Filters applied :</h3>
                <div class="filters_applied">
                    <div class="subfield">
                        <h2>Section : </h2>
                        <h3>A</h3>
                    </div>
                    <div class="subfield">
                        <h2>Skills : </h2>
                        <h3>web development </h3>
                    </div>


                </div>
                <div class="profwrap">

                    <div class="listProfile" id="prof_c">
                        <img src="images/profile_pics/11.jfif" alt="">
                        <div class="info_t">
                            <div class="name">Kaushal Shirode</div>
                            <div class="skills">Web Developer,Competitive Programmer</div>
                            <div class="section">Section A</div>
                            <div class="knowMore">Know More</div>
                        </div>
                    </div>
                    <div class="listProfile">
                        <img src="images/profile_pics/12.jfif" alt="">
                        <div class="info_t">
                            <div class="name">Achyut Shirgaonkar</div>
                            <div class="skills">Web Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <div class="section">Section A</div>
                            <div class="knowMore">Know More</div>

                        </div>
                    </div>
                    <div class="listProfile">
                        <img src="images/profile_pics/5.jfif" alt="">
                        <div class="info_t">
                            <div class="name">Mridul Gupta</div>
                            <div class="skills">Web Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <div class="section">Section A</div>
                            <div class="knowMore">Know More</div>

                        </div>
                    </div>
                    <div class="listProfile">
                        <img src="images/profile_pics/6.jfif" alt="">
                        <div class="info_t">
                            <div class="name">Vaibhav Aggarwal</div>
                            <div class="skills">Web Developer,Competitive Programmer</div>
                            <div class="section">Section A</div>
                            <div class="knowMore">Know More</div>

                        </div>
                    </div>
                    <div class="listProfile">
                        <img src="images/profile_pics/2.jfif" alt="">
                        <div class="info_t">
                            <div class="name">Shobhit Kumar</div>
                            <div class="skills">Web Developer,Competitive Programmer</div>
                            <div class="section">Section A</div>
                            <div class="knowMore">Know More</div>

                        </div>
                    </div>
                </div>
                <div class="jc">

                    <input type="submit" value="&lt;- Prev" name="card" id="" class="jc_overlay_submit">
                    <input type="submit" value="MORE ->" name="card" id="" class="jc_overlay_submit">

                </div>

            </section>
        </div>
    </form>
    <div class="overlay" style="display:none;">
        <div class="outerWrap">
            <div class="cros-button"><img src="images/close.png" alt="">
            </div>

            <div class="nameandimg">
                <div class="img_a"><img src="images/ks.png" alt=""></div>
                <div class="name">
                    <h2>Kushagra Saxena</h2>
                    <div class="profile_a">
                        <a href="" class="profLInk"><img src="images/github.svg" alt=""></a>
                        <a href="" class="profLInk"><img src="images/instagram.svg" alt=""></a>
                        <a href="" class="profLInk"><img src="images/linkedin.svg" alt=""></a>
                    </div>
                    <div class="portfoli"><a href="" class="portLInk">portfoli/resume website</a></div>
                </div>


            </div>

            <div class="skills_tt">

                <h3 class="skills_head">Skills</h3>
                <div class="skills_list">
                    <ul>
                        <li>Web developer</li>
                        <li>Competivtive Programmming</li>
                        <li>UI/UX</li>
                    </ul>
                </div>
            </div>
            <div class="projects">
                <h3 class="skills_head">Projects</h3>
                <ul>
                    <li>Project 1&nbsp;<a href="" class="link_p">link</a></li>
                    <li>Project 2&nbsp;<a href="" class="link_p">link</a></li>
                </ul>
            </div>
            <div class="achievements">
                <h3 class="skills_head">Achievements</h3>
                <ul>
                    <li>Achievements a</li>
                    <li>Achievements b</li>
                    <li>Achievements b</li>
                </ul>
            </div>
        </div>

    </div>

    <footer id="footer">
        <nav id="footer-nav-bar">
            <div class="sub-block">
                <a href="index.php" class="home"><img id="logok" src="images/LOGO2.png"></a>
            </div>
            <div class="sub-block">
                <dl>
                    <dt class="data-heading">Skills</dt>
                    <dd class="nav-link ne"><a href="">Web Development</a></dd>
                    <dd class="nav-link ne"><a href="">App Development</a></dd>
                    <dd class="nav-link ne"><a href="">AR/VR/XR</a></dd>
                    <dd class="nav-link ne"><a href="">Competitive Programming</a></dd>
                    <dd class="nav-link ne"><a href="">Game Development</a></dd>
                </dl>
            </div>
            <div class="sub-block">
                <dl>
                    <dt class="data-heading">&nbsp;</dt>
                    <dd class="nav-link ne"><a href="" class="">UI/UX</a></dd>
                    <dd class="nav-link ne"><a href="" class="">Data Science</a></dd>
                    <dd class="nav-link ne"><a href="" class="">AI/ML</a></dd>
                    <dd class="nav-link ne"><a href="" class="">Video Editing</a></dd>
                    <dd class="nav-link ne"><a href="" class="">Others</a></dd>

                </dl>
            </div>
            <div class="sub-block">
                <dl>
                    <dt class="data-heading">USEFUL LINKS</dt>
                    <dd class="nav-link ne"><a href="" class="">Support</a></dd>
                    <dd class="nav-link ne"><a href="" class="">About</a></dd>
                </dl>
            </div>
            <div class="social-media-links">
                <a href="" class="smlinks"><img class="sml"
                        src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 448' fill='%23222326'%3E%3Cpath d='M0 230.126v-.793c.016 55.974.294 63.853 1.344 87.03 3.733 81.349 48.87 126.56 130.293 130.293C155.55 447.739 163.165 448 224 448H0V230.126zm229.242-189.75c55.006.014 62.368.256 85.291 1.307 60.704 2.762 89.059 31.565 91.822 91.821 1.05 22.905 1.275 30.266 1.287 85.272v10.487c-.014 55.022-.255 62.365-1.287 85.27-2.782 60.2-31.062 89.059-91.822 91.822-23.159 1.06-30.399 1.297-87.005 1.306h-7.054c-56.572-.009-63.848-.245-86.989-1.306-60.853-2.782-89.058-31.715-91.821-91.84-1.05-22.905-1.292-30.249-1.306-85.271v-8.77c.01-56.572.263-63.83 1.306-86.989 2.781-60.237 31.061-89.058 91.821-91.821 22.923-1.032 30.268-1.274 85.273-1.287h10.484zm-5.242 68.6c-63.523 0-115.024 51.501-115.024 115.024S160.477 339.043 224 339.043 339.024 287.54 339.024 224c0-63.523-51.501-115.024-115.024-115.024zm0 40.357c41.235 0 74.667 33.432 74.667 74.667 0 41.253-33.432 74.667-74.667 74.667S149.333 265.253 149.333 224c0-41.235 33.432-74.667 74.667-74.667zM343.579 77.56c-14.859 0-26.899 12.04-26.899 26.88s12.04 26.88 26.899 26.88c14.84 0 26.861-12.04 26.861-26.88s-12.021-26.88-26.861-26.88zM448 224v224H224c60.835 0 68.47-.261 92.363-1.344 81.274-3.733 126.597-48.87 130.274-130.293C447.74 292.469 448 284.835 448 224zm-1.344-92.344c-3.659-81.275-48.85-126.56-130.275-130.293C293.187.294 285.307.016 229.333 0H448v224c0-60.835-.261-68.45-1.344-92.344zM0 0h218.667c-55.973.016-63.834.294-87.011 1.344C50.306 5.077 5.096 50.214 1.363 131.637.299 154.722.019 162.62 0 217.873V0z'/%3E%3C/svg%3E"></a>
                <a href="" class="smlinks"><img class="sml"
                        src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 448' fill='%23222326'%3E%3Cpath d='M448 0v448H0V0h448zM299.75 64c-22.333 0-41.375 7.875-57.125 23.625S219 122.417 219 144.75c0 6 .667 12.167 2 18.5-33-1.667-63.958-9.958-92.875-24.875S74.667 103.583 54.5 78.75c-7.333 12.5-11 26.083-11 40.75 0 13.833 3.25 26.667 9.75 38.5 6.5 11.833 15.25 21.417 26.25 28.75-12.717-.49-24.637-3.77-35.76-9.841L43 176.5v1c0 19.5 6.125 36.625 18.375 51.375s27.708 24.042 46.375 27.875a83.54 83.54 0 01-21.25 2.75c-4.667 0-9.75-.417-15.25-1.25 5.167 16.167 14.667 29.458 28.5 39.875 13.833 10.417 29.5 15.792 47 16.125-29.333 23-62.75 34.5-100.25 34.5-7.167 0-13.667-.333-19.5-1C64.5 371.917 105.833 384 151 384c28.667 0 55.583-4.542 80.75-13.625s46.667-21.25 64.5-36.5 33.208-32.792 46.125-52.625c12.917-19.833 22.542-40.542 28.875-62.125 6.333-21.583 9.5-43.208 9.5-64.875 0-4.667-.083-8.167-.25-10.5 15.833-11.5 29.333-25.417 40.5-41.75-15.5 6.667-31 10.833-46.5 12.5C392 104 403.833 89.167 410 70c-16 9.5-33.083 16-51.25 19.5-16-17-35.667-25.5-59-25.5z'/%3E%3C/svg%3E"></a>
                <a href="" class="smlinks"><img class="sml"
                        src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 448' fill='%23222326'%3E%3Cpath d='M448 0v448H0V0h448zM276.877 16h-1.127c-28.833 0-51.917 8.542-69.25 25.625-17.16 16.912-25.826 40.645-25.997 71.197l-.003.928v54.5h-63.75v74h63.75V432H257V242.25h63.5l9.75-74H257V121c0-12 2.5-21 7.5-27 4.923-5.908 14.37-8.907 28.342-8.998L293.5 85h39.25V19c-13.085-1.938-31.336-2.938-54.754-2.997l-1.12-.003z'/%3E%3C/svg%3E"></a>
            </div>
        </nav>


    </footer>
    <script src="script2.js"></script>


    </script>
</body>

</html>