<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabitha's Page</title>
    <link rel="stylesheet" href="styles/css/style.css" />
    <link rel="stylesheet" href="asstets/animate.css/animate.min.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
</head>

<body>
    <header>
        <div class="main-container">
            <div class="nav">
                <div class="logo">
                    <a href="#">tquila.</a>
                </div>

                <nav class="burger">
                    <div id="burger" class="burger">
                        <i class="ph-fill ph-list"></i>
                    </div>
                    <ul id="menu-list" class="hidden">
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolios">Portfolio</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#Skills">Skills</a></li>
                        <li><a href="#educations">Educations</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="/login">Login</a></li>
                        <li>
                            <a href="https://drive.google.com/file/d/1f9PHjqgYbuc_slmZTr8BjHkhDwbrRTne/view?usp=sharing"
                                target="blank">
                                <button class="btn">Download CV</button>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

            <section id="hero">
                <div class="hero-left">
                    <h3 class="pre-title anim">My name is</h3>
                    <h1 class="hero-name anim">Tabitha Aquila</h1>

                    <h3 class="static-text"><span class="multiple-text">UI/UX</span>Enthusiast</h3>

                    <p class="anim">
                        An undergraduate student at Del Institute of Technology majoring
                        in informatics by the 3th years Whos's passionated about UI/UX
                        Designing and Web Development and still working on it. Besides, I
                        also working on my leadership skills by participating in several
                        organization and activities
                    </p>
                </div>

                <div class="hero-right">
                    <img src="asstets\tabitha.jpg" alt="profile photo" class="anim" />
                </div>
            </section>
        </div>
    </header>

    <section id="services">
        <div class="services main-container">
            <h3 class="pre-title">Services</h3>
            <h1 class="section-title services title">Specialized in</h1>

            <div class="grid-3">
                <!-- Service 1-->
                <div class="service">
                    <div class="service-icon">
                        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"
                            width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m11.25 6c.398 0 .75.352.75.75 0 .414-.336.75-.75.75-1.505 0-7.75 0-7.75 0v12h17v-8.75c0-.414.336-.75.75-.75s.75.336.75.75v9.25c0 .621-.522 1-1 1h-18c-.48 0-1-.379-1-1v-13c0-.481.38-1 1-1zm-2.011 6.526c-1.045 3.003-1.238 3.45-1.238 3.84 0 .441.385.626.627.626.272 0 1.108-.301 3.829-1.249zm.888-.889 3.22 3.22 8.408-8.4c.163-.163.245-.377.245-.592 0-.213-.082-.427-.245-.591-.58-.578-1.458-1.457-2.039-2.036-.163-.163-.377-.245-.591-.245-.213 0-.428.082-.592.245z" />
                        </svg>
                    </div>
                    <h4>UI/UX Design</h4>
                    <p>Turn your idea of designs into reality</p>
                </div>

                <!-- Service 2-->
                <div class="service">
                    <div class="service-icon">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd">
                            <path
                                d="M15.246 17c-.927 3.701-2.547 6-3.246 7-.699-1-2.32-3.298-3.246-7h6.492zm7.664 0c-1.558 3.391-4.65 5.933-8.386 6.733 1.315-2.068 2.242-4.362 2.777-6.733h5.609zm-21.82 0h5.609c.539 2.386 1.47 4.678 2.777 6.733-3.736-.8-6.828-3.342-8.386-6.733zm14.55-2h-7.28c-.29-1.985-.29-4.014 0-6h7.281c.288 1.986.288 4.015-.001 6zm-9.299 0h-5.962c-.248-.958-.379-1.964-.379-3s.131-2.041.379-3h5.962c-.263 1.988-.263 4.012 0 6zm17.28 0h-5.963c.265-1.988.265-4.012.001-6h5.962c.247.959.379 1.964.379 3s-.132 2.042-.379 3zm-8.375-8h-6.492c.925-3.702 2.546-6 3.246-7 1.194 1.708 2.444 3.799 3.246 7zm-8.548-.001h-5.609c1.559-3.39 4.651-5.932 8.387-6.733-1.237 1.94-2.214 4.237-2.778 6.733zm16.212 0h-5.609c-.557-2.462-1.513-4.75-2.778-6.733 3.736.801 6.829 3.343 8.387 6.733z" />
                        </svg>
                    </div>
                    <h4>Web Development</h4>
                    <p>Create a responsive page for your digital product</p>
                </div>

                <!-- Service 3-->
                <div class="service">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M17.997 18h-11.995l-.002-.623c0-1.259.1-1.986 1.588-2.33 1.684-.389 3.344-.736 2.545-2.209-2.366-4.363-.674-6.838 1.866-6.838 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.811-2.214c-1.29-.298-2.49-.559-1.909-1.657 1.769-3.342.469-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.324 0 3.903 2.268 1.77 2.246 6.676h4.501l.002-.463c0-.946-.074-1.493-1.192-1.751zm-22.806 2.214h4.501c-.021-4.906 2.246-2.772 2.246-6.676 0-1.507-.983-2.324-2.248-2.324-1.869 0-3.169 1.787-1.399 5.129.581 1.099-.619 1.359-1.909 1.657-1.119.258-1.193.805-1.193 1.751l.002.463z" />
                        </svg>
                    </div>
                    <h4>UX Research</h4>
                    <p>
                        Develop a research plan outlining your methods, recruit
                        participants, and provide recommendations based on your findings
                        to improve the app's user experience
                    </p>
                </div>

                <!-- Service 4-->
                <div class="service">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M6 21c0 1.657-1.344 3-3 3-1.657 0-3-1.343-3-3s1.343-3 3-3c1.656 0 3 1.343 3 3zm6-3c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.656 0 3-1.343 3-3s-1.344-3-3-3zm0-18c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.656 0 3-1.343 3-3s-1.344-3-3-3zm9 18c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm-1.577-1.721l-6.423-5.028v-3.352c-.323.066-.658.101-1 .101s-.677-.035-1-.101v3.352l-6.423 5.028c.694.233 1.323.602 1.844 1.093l5.579-4.372 5.579 4.373c.522-.492 1.15-.861 1.844-1.094z" />
                        </svg>
                    </div>
                    <h4>User Relation</h4>
                    <p>
                        Resolve users' issue while ensuring a positive customer
                        experience."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolios">
        <div class="portfolios main-container">
            <h3 class="pre-title">Portfolio</h3>
            <h1 class="section-title portfolio title">Works I've done</h1>

            <div class="grid-2">
                @foreach ($portofolios as $portofolio)
                    <div class="portfolio">
                        <div class="portfolio-cover">
                            <img src="{{ asset('storage/' . $portofolio->gambar) }}" alt="{{ $portofolio->judul }}" />
                        </div>

                        <div class="portfolio-info">
                            <div class="portfolio-title">
                                <h4><strong>{{ $portofolio->judul }}</strong></h4>
                                <a href="{{ $portofolio->url }}" target="_blank" class="portfolio-link">
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                        stroke-miterlimit="2" viewBox="0 0 24 24" width="24" height="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m22 5c0-.478-.379-1-1-1h-18c-.62 0-1 .519-1 1v14c0 .621.52 1 1 1h18c.478 0 1-.379 1-1zm-5 13.5v-10.5c0-.478-.379-1-1-1h-12.5v-1.5h17v13zm-6.518-4.943-3.202 3.202c-.293.292-.768.292-1.06 0-.293-.293-.293-.768 0-1.061l3.198-3.198h-1.219c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h3.033c.415 0 .75.336.75.75v3.05c0 .414-.335.75-.75.75-.414 0-.75-.336-.75-.75z"
                                            fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                            <p>{{ $portofolio->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Experiences -->
    <section id="experience">
        <div class=" main-container">
            <h3 class="pre-title">Resume</h3>
            <h1 class="section-title title">
                Leadership and activities
            </h1>

            <div class="grid-1">
                <!-- Experience 1 -->
                <div class="experience">
                    <div class="tempat-popup" id="tempat-popup1">
                        <div class="popup" id="popup">
                            <img src="asstets/Front End Dibimbing.jpg" />
                            <h2><strong>Front End Developer Mini Bootcamp</strong></h2>
                            <h4>by dibimbing.id</h4>
                            <p>
                                Learn how to use figma tools and interface design. Submitted
                                assigments and done a quiz from the facilitator.
                            </p>
                            <button type="button" onclick="closePopup1()">OK</button>
                        </div>
                    </div>
                    <div class="experience-cover">
                        <img src="asstets/Front End Dibimbing.jpg" alt="Frontend" />
                    </div>

                    <div class="experience-info">
                        <div class="experience-title">
                            <h4>
                                <strong>Dibimbing mini Bootcamp - Front End Developer</strong>
                            </h4>
                        </div>
                    </div>

                    <button type="submit" class="btn-ex" onclick="openPopup1('pulse')">
                        See more
                    </button>

                    <div id="tempat-popup1" class="tempat-popup">
                        <!-- Konten popup di sini -->
                    </div>

                    <script>
                        const animateCSS = (element, animation, prefix = "animate__") =>
                            new Promise((resolve, reject) => {
                                const animationName = `${prefix}${animation}`;
                                const node = document.querySelector(element);

                                node.classList.add(`${prefix}animated`, animationName);

                                function handleAnimationEnd() {
                                    node.classList.remove(`${prefix}animated`, animationName);
                                    resolve("Animation ended");
                                }

                                node.addEventListener("animationend", handleAnimationEnd, {
                                    once: true
                                });
                            });

                        function openPopup1(animation) {
                            const popup = document.getElementById("tempat-popup1");
                            popup.classList.add("tempat-popup-visible");
                            animateCSS("#tempat-popup1", animation);
                        }

                        function closePopup1() {
                            const popup = document.getElementById("tempat-popup1");
                            popup.classList.remove("tempat-popup-visible");
                        }
                    </script>

                </div>

                <!-- Experience 2 -->
                <div class="experience">
                    <div class="tempat-popup" id="tempat-popup2">
                        <div class="popup" id="popup">
                            <img src="asstets/UI UX Dibimbing.jpg" />
                            <h2><strong>UI/UX Design Mini Bootcamp</strong></h2>
                            <h4>by dibimbing.id</h4>
                            <p>
                                Learn how to use figma tools and interface design. Submitted
                                assigments and done a quiz from the facilitator.
                            </p>
                            <button type="button" onclick="closePopup2()">OK</button>
                        </div>
                    </div>

                    <div class="experience-cover">
                        <img src="asstets/UI UX Dibimbing.jpg" alt="Frontend" />
                    </div>

                    <div class="experience-info">
                        <div class="experience-title">
                            <h4><strong>Dibimbing mini Bootcamp - UI/UX Design</strong></h4>
                        </div>
                    </div>

                    <button type="submit" class="btn-ex" onclick="openPopup2('pulse')">
                        See more
                    </button>

                    <div id="tempat-popup2" class="tempat-popup">
                        <!-- Konten popup di sini -->
                    </div>

                    <script>
                        const animateCSS2 = (element, animation, prefix = "animate__") =>
                            new Promise((resolve, reject) => {
                                const animationName = `${prefix}${animation}`;
                                const node = document.querySelector(element);

                                node.classList.add(`${prefix}animated`, animationName);

                                function handleAnimationEnd() {
                                    node.classList.remove(`${prefix}animated`, animationName);
                                    resolve("Animation ended");
                                }

                                node.addEventListener("animationend", handleAnimationEnd, {
                                    once: true
                                });
                            });

                        function openPopup2(animation) {
                            const popup = document.getElementById("tempat-popup2");
                            popup.classList.add("tempat-popup-visible");
                            animateCSS2("#tempat-popup2", animation);
                        }

                        function closePopup2() {
                            const popup = document.getElementById("tempat-popup2");
                            popup.classList.remove("tempat-popup-visible");
                        }
                    </script>

                </div>

                <!-- Experience 3 -->
                <div class="experience">
                    <div class="tempat-popup" id="tempat-popup3">
                        <div class="popup" id="popup">
                            <img src="asstets/KPUDel.jpg" />
                            <h2><strong>General Election Commisions of BEM 2023</strong></h2>
                            <h4>Student Organization</h4>
                            <p>
                                Handled any works related to administrative things; made a
                                registration forms and selecting participant. I also learn to
                                work under a short timeline.
                            </p>
                            <button type="button" onclick="closePopup3()">OK</button>
                        </div>
                    </div>

                    <div class="experience-cover">
                        <img src="asstets/KPUDel.jpg" alt="KPUDel" />
                    </div>

                    <div class="experience-info">
                        <div class="experience-title">
                            <h4>
                                <strong>General Election Commisions of BEM 2023</strong>
                            </h4>
                        </div>
                    </div>

                    <button type="submit" class="btn-ex" onclick="openPopup3('pulse')">
                        See more
                    </button>

                    <div id="tempat-popup3" class="tempat-popup">
                        <!-- Konten popup di sini -->
                    </div>

                    <script>
                        const animateCSS3 = (element, animation, prefix = "animate__") =>
                            new Promise((resolve, reject) => {
                                const animationName = `${prefix}${animation}`;
                                const node = document.querySelector(element);

                                node.classList.add(`${prefix}animated`, animationName);

                                function handleAnimationEnd() {
                                    node.classList.remove(`${prefix}animated`, animationName);
                                    resolve("Animation ended");
                                }

                                node.addEventListener("animationend", handleAnimationEnd, {
                                    once: true
                                });
                            });

                        function openPopup3(animation) {
                            const popup = document.getElementById("tempat-popup3");
                            popup.classList.add("tempat-popup-visible");
                            animateCSS2("#tempat-popup3", animation);
                        }

                        function closePopup3() {
                            const popup = document.getElementById("tempat-popup3");
                            popup.classList.remove("tempat-popup-visible");
                        }
                    </script>
                </div>

                <!-- Experience 4 -->
                <div class="experience">
                    <div class="tempat-popup" id="tempat-popup4">
                        <div class="popup" id="popup">
                            <img src="asstets/MPM.jpeg" />
                            <h2><strong>Student Consultative Assembly Organization</strong></h2>
                            <h4>Student Organization</h4>
                            <p>
                                Handled several work programs. Receiving any college related
                                aspirations and communicate with student affairs to processed
                                aspirations. Supervise Student Executive Board’s work
                                programs, and make several accountability report document.
                            </p>
                            <button type="button" onclick="closePopup4()">OK</button>
                        </div>
                    </div>

                    <div class="experience-cover">
                        <img src="asstets/MPM.jpeg" alt="MPMDel" />
                    </div>

                    <div class="experience-info">
                        <div class="experience-title">
                            <h4>
                                <strong>Student Consultative Assembly Organization</strong>
                            </h4>
                        </div>
                    </div>

                    <button type="submit" class="btn-ex" onclick="openPopup4('pulse')">
                        See more
                    </button>

                    <div id="tempat-popup4" class="tempat-popup">
                        <!-- Konten popup di sini -->
                    </div>

                    <script>
                        const animateCSS4 = (element, animation, prefix = "animate__") =>
                            new Promise((resolve, reject) => {
                                const animationName = `${prefix}${animation}`;
                                const node = document.querySelector(element);

                                node.classList.add(`${prefix}animated`, animationName);

                                function handleAnimationEnd() {
                                    node.classList.remove(`${prefix}animated`, animationName);
                                    resolve("Animation ended");
                                }

                                node.addEventListener("animationend", handleAnimationEnd, {
                                    once: true
                                });
                            });

                        function openPopup4(animation) {
                            const popup = document.getElementById("tempat-popup4");
                            popup.classList.add("tempat-popup-visible");
                            animateCSS2("#tempat-popup4", animation);
                        }

                        function closePopup4() {
                            const popup = document.getElementById("tempat-popup4");
                            popup.classList.remove("tempat-popup-visible");
                        }
                    </script>
                </div>
            </div>
    </section>

    <!-- Skills -->
    <section id="Skills">
        <div class="skills main-container">
            <h3 class="pre-title">Skills</h3>
            <h1 class="section-title skills title">My Ability</h1>

            <div class="skill-name">HTML</div>
            <div class="skill-bar">
                <div class="skill-per" per="80%" style="max-width: 80%"></div>
            </div>

            <div class="skill-name">CSS</div>
            <div class="skill-bar">
                <div class="skill-per" per="80%" style="max-width: 80%"></div>
            </div>

            <div class="skill-name">Java</div>
            <div class="skill-bar">
                <div class="skill-per" per="60%" style="max-width: 60%"></div>
            </div>

            <div class="skill-name">SQL</div>
            <div class="skill-bar">
                <div class="skill-per" per="75%" style="max-width: 75%"></div>
            </div>

            <div class="skill-name">English Conversational</div>
            <div class="skill-bar">
                <div class="skill-per" per="90%" style="max-width: 90%"></div>
            </div>
        </div>
    </section>

    <!-- Education -->
    <section id="educations">
        <div class="education main-container">
            <h3 class="pre-title">Learning Path</h3>
            <h1 class="section-title education title">Education</h1>

            <!-- Education 1-->
            <div class="education">
                <div class="line">
                    <div></div>
                </div>
                <div class="education-info">
                    <h4 class="education-title">Del Institute of Technology</h4>
                    <p>Undergraduate Student - Informatics</p>
                    <h4 class="education-years">2021 - Now</h4>
                </div>
            </div>

            <!-- Education 2-->
            <div class="education">
                <div class="line">
                    <div></div>
                </div>
                <div class="education-info">
                    <h4 class="education-title">SMAS Sutomo 1 Medan</h4>
                    <p>Natural Science</p>
                    <h4 class="education-years">2018 - 2021</h4>
                </div>
            </div>

            <div class="education">
                <div class="line">
                    <div></div>
                </div>
                <div class="education-info">
                    <h4 class="education-title">SMP Lentera Harapan Medan</h4>
                    <br />
                    <h4 class="education-years">2015 - 2018</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <h1 class="contact-title contact title">Contact Me at</h1>
        <div class="contact main-container">
            <div class="contact-left">
                <div id="error"></div>
                <form id="form" class="contact-form" action="#">
                    <div class="input-control">
                        <input id="name" name="name" placeholder="Name" type="text" />
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <input id="email" name="email" placeholder="Email" type="text" />
                        <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                        <div class="error"></div>
                    </div>
                    <div>
                        <button class="btn-submit">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="contact-right">
                <!--Contact Item 1-->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Email</h4>
                        <p>
                            <a href="mailto:tabithaquila711@gmail.com">tabithaquila711@gmail.com</a>
                        </p>
                    </div>
                </div>

                <!--Contact Item 2-->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>LinkedIn</h4>
                        <p>
                            <a href="https://www.linkedin.com/in/tabithaquila/">linkedin.com/in/tabithaquila/</a>
                        </p>
                    </div>
                </div>

                <!--Contact Item 3-->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M12.036 5.339c-3.635 0-6.591 2.956-6.593 6.589-.001 1.483.434 2.594 1.164 3.756l-.666 2.432 2.494-.654c1.117.663 2.184 1.061 3.595 1.061 3.632 0 6.591-2.956 6.592-6.59.003-3.641-2.942-6.593-6.586-6.594zm3.876 9.423c-.165.463-.957.885-1.337.942-.341.051-.773.072-1.248-.078-.288-.091-.657-.213-1.129-.417-1.987-.858-3.285-2.859-3.384-2.991-.099-.132-.809-1.074-.809-2.049 0-.975.512-1.454.693-1.653.182-.2.396-.25.528-.25l.38.007c.122.006.285-.046.446.34.165.397.561 1.372.611 1.471.049.099.083.215.016.347-.066.132-.099.215-.198.33l-.297.347c-.099.099-.202.206-.087.404.116.198.513.847 1.102 1.372.757.675 1.395.884 1.593.983.198.099.314.083.429-.05.116-.132.495-.578.627-.777s.264-.165.446-.099 1.156.545 1.354.645c.198.099.33.149.38.231.049.085.049.482-.116.945zm3.088-14.762h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-6.967 19.862c-1.327 0-2.634-.333-3.792-.965l-4.203 1.103 1.125-4.108c-.694-1.202-1.059-2.566-1.058-3.964.002-4.372 3.558-7.928 7.928-7.928 2.121.001 4.112.827 5.609 2.325s2.321 3.491 2.32 5.609c-.002 4.372-3.559 7.928-7.929 7.928z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>WhatsApp</h4>
                        <p>
                            <a href="https://wa.me/6281291520201">+62081291520201</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-icons">
            <a href="">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd">
                    <path
                        d="M19 24h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5v14c0 2.761-2.238 5-5 5zm1-12.508c0-3.58-3.589-6.492-8-6.492s-8 2.912-8 6.492c0 3.209 2.846 5.897 6.691 6.405.26.056.615.172.704.395.081.202.053.519.026.723l-.114.685c-.035.202-.161.791.693.431.854-.36 4.607-2.713 6.286-4.645h-.001c1.16-1.271 1.715-2.561 1.715-3.994zm-10.978 2.067h-2.242l-.108-.043v-.001l-.001-.001-.003-.003-.044-.107v-3.486c0-.086.07-.156.156-.156h.562c.085 0 .155.07.155.156v2.768h1.525c.086 0 .155.07.155.156v.561c0 .086-.069.156-.155.156zm8.314 0h-2.242l-.108-.043-.004-.005-.044-.107v-3.486l.044-.107.004-.005.108-.044h2.242c.086 0 .155.07.155.156v.561c0 .086-.069.156-.155.156h-1.525v.589h1.525c.086 0 .155.07.155.156v.561c0 .086-.069.156-.155.156h-1.525v.589h1.525c.086 0 .155.07.155.156v.561c0 .086-.069.156-.155.156zm-6.961 0h-.562c-.086 0-.156-.069-.156-.155v-3.486c0-.086.07-.156.156-.156h.562c.086 0 .155.07.155.156v3.486c0 .085-.069.155-.155.155zm1.418 0h-.561c-.086 0-.156-.069-.156-.155v-3.486c0-.086.07-.156.156-.156h.561l.013.001.015.002.009.002.015.004.005.002.014.006.013.008.008.005.012.01.003.003.01.011.013.015 1.597 2.158v-2.071c0-.086.07-.156.156-.156h.561c.086 0 .156.07.156.156v3.486c0 .085-.07.155-.156.155h-.561l-.04-.005-.002-.001-.016-.005-.007-.003-.012-.006-.01-.006-.001-.001-.04-.039-1.599-2.16v2.071c0 .085-.07.155-.156.155z" />
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-4.466 19.59c-.405.078-.534-.171-.534-.384v-2.195c0-.747-.262-1.233-.55-1.481 1.782-.198 3.654-.875 3.654-3.947 0-.874-.312-1.588-.823-2.147.082-.202.356-1.016-.079-2.117 0 0-.671-.215-2.198.82-.64-.18-1.324-.267-2.004-.271-.68.003-1.364.091-2.003.269-1.528-1.035-2.2-.82-2.2-.82-.434 1.102-.16 1.915-.077 2.118-.512.56-.824 1.273-.824 2.147 0 3.064 1.867 3.751 3.645 3.954-.229.2-.436.552-.508 1.07-.457.204-1.614.557-2.328-.666 0 0-.423-.768-1.227-.825 0 0-.78-.01-.055.487 0 0 .525.246.889 1.17 0 0 .463 1.428 2.688.944v1.489c0 .211-.129.459-.528.385-3.18-1.057-5.472-4.056-5.472-7.59 0-4.419 3.582-8 8-8s8 3.581 8 8c0 3.533-2.289 6.531-5.466 7.59z" />
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z" />
                </svg>
            </a>
        </div>
        <p>&#169; 2023 - Made by Tabitha Aquila</p>
        <script src="/styles/js/main.js"></script>

    </footer>
</body>

</html>
