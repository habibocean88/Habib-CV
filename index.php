<?php
// =====================================================
// Md. Habibur Rahman (Habib) - Portfolio Website
// বাংলা নির্দেশনা: নিজের তথ্য পরিবর্তন করতে নিচের $profile
// অ্যারের মানগুলো সম্পাদনা করুন। Contact form contact.php-তে যাবে।
 // =====================================================
$profile = [
    'name' => 'Md. Habibur Rahman (Habib)',
    'title' => 'Website Developer',
    'tagline' => 'Turning Ideas into Powerful Web Solutions',
    'email' => 'habibkbd@gmail.com',
    'phone' => '+880 1718655666',
    'location' => 'Dhaka, Bangladesh',
    'website' => 'https://oceanenterprise.com.bd/',
];
$skills = ['PHP', 'MySQL', 'JavaScript', 'HTML5', 'CSS3', 'AJAX', 'Bootstrap', 'jQuery', 'Photoshop', 'Camtasia', 'Excel', 'Database Design'];
$services = [
    ['icon'=>'</>','title'=>'Website Design & Development','desc'=>'Responsive, modern websites built for desktop, tablet and mobile.'],
    ['icon'=>'▤','title'=>'Database-Driven Web Applications','desc'=>'Dynamic PHP and MySQL applications tailored to your workflow.'],
    ['icon'=>'▦','title'=>'Accounting & Inventory Systems','desc'=>'Sales, purchases, stock, vouchers, ledgers and business reports.'],
    ['icon'=>'↗','title'=>'Business Automation Solutions','desc'=>'Reduce repetitive work with practical web-based tools.'],
    ['icon'=>'⚙','title'=>'Website Maintenance & Support','desc'=>'Bug fixes, updates, performance improvements and technical support.'],
    ['icon'=>'◎','title'=>'Consultation & IT Solutions','desc'=>'Practical advice for planning and improving your web projects.'],
];
$projects = [
    ['name'=>'M/S Ocean Enterprise','type'=>'Business Website','desc'=>'Medical equipment importer and supplier website.','url'=>'https://oceanenterprise.com.bd/','icon'=>'OE'],
    ['name'=>'Accounting & Inventory MIS','type'=>'PHP & MySQL Application','desc'=>'Business management tools for accounting, inventory and reporting.','url'=>'https://oceanenterprise.com.bd/','icon'=>'MIS'],
    ['name'=>'Axon Medical Services','type'=>'Medical Product Website','desc'=>'Medical equipment and disposable product presentation.','url'=>'https://axon.com.bd/','icon'=>'AXON'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Md. Habibur Rahman (Habib), Website Developer specializing in PHP, MySQL, responsive websites, and business applications.">
    <meta name="theme-color" content="#073b83">
    <title><?= htmlspecialchars($profile['name']) ?> | <?= htmlspecialchars($profile['title']) ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="#home" aria-label="Habib Portfolio Home">
                <span class="brand-mark">HR</span>
                <span><strong><?= htmlspecialchars($profile['name']) ?></strong><small><?= htmlspecialchars($profile['title']) ?></small></span>
            </a>
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
            <nav class="nav" id="mainNav">
                <a class="active" href="#home">Home</a><a href="#about">About</a><a href="#skills">Skills</a>
                <a href="#services">Services</a><a href="#projects">Projects</a><a href="#experience">Experience</a><a href="#contact">Contact</a>
            </nav>
            <a class="btn btn-small cv-button" href="habib-cv.pdf" download>↓ Download CV</a>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="hero-glow"></div>
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow">WELCOME TO MY PORTFOLIO</p>
                    <h1><?= htmlspecialchars($profile['name']) ?></h1>
                    <h2><?= htmlspecialchars($profile['title']) ?></h2>
                    <p class="hero-tagline"><?= htmlspecialchars($profile['tagline']) ?></p>
                    <p class="hero-description">I build responsive websites, database-driven applications, and practical business management systems.</p>
                    <div class="hero-skills"><?php foreach (array_slice($skills, 0, 6) as $skill): ?><span><?= htmlspecialchars($skill) ?></span><?php endforeach; ?></div>
                    <div class="hero-actions"><a class="btn" href="#projects">View My Projects <span>→</span></a><a class="btn btn-outline" href="#contact">✉ Contact Me</a></div>
                </div>
                <div class="hero-art" aria-label="Website development illustration">
                    <div class="profile-photo-wrap">
                        <img src="images/habib-profile.jpeg" alt="Md. Habibur Rahman (Habib)" class="profile-photo">
                    </div>
                    <div class="orbit orbit-one"></div>
                    <div class="orbit orbit-two"></div>




                    <div class="code-window">
                        <div class="window-top"><i></i><i></i><i></i><span>portfolio.php</span></div>
                        <pre><code><b>&lt;?php</b>
<span>$developer</span> = <em>"Habib"</em>;
<span>$skills</span> = [
  <em>"PHP"</em>, <em>"MySQL"</em>,
  <em>"JavaScript"</em>
];

<span>build</span>(<em>"Better Web"</em>);
<b>?&gt;</b></code></pre>
                    </div>







                    <div class="floating-chip chip-one">PHP + MySQL</div>
                    <div class="floating-chip chip-two">Responsive Design</div>
                    <div class="hero-abstract"><span>HR</span></div>
                </div>
            </div>
            <a class="scroll-cue" href="#about">SCROLL TO EXPLORE <span>↓</span></a>
        </section>

        <section class="section about-section" id="about">
            <div class="container about-grid">
                <div>
                    <p class="section-kicker">GET TO KNOW ME</p>
                    <h2 class="section-title">About <span>Me</span></h2>
                    <p class="lead">Hello! I’m <strong>Md. Habibur Rahman (Habib)</strong>, a website developer focused on useful, reliable and user-friendly web solutions.</p>
                    <p>I work with PHP, MySQL, JavaScript, HTML, CSS and AJAX to develop dynamic websites and database-driven applications. My professional background in finance, accounting and import-export operations also helps me understand real business workflows and turn them into practical software solutions.</p>
                    <a class="text-link" href="#experience">Explore my background <span>→</span></a>
                </div>
                <div class="about-facts">
                    <div class="fact-card"><span class="fact-icon">⌘</span>
                        <div><strong>Web Developer</strong><small>PHP & MySQL Applications</small></div>
                    </div>
                    <div class="fact-card"><span class="fact-icon">⌖</span>
                        <div><strong><?= htmlspecialchars($profile['location']) ?></strong><small>Available for web projects</small></div>
                    </div>
                    <div class="fact-card"><span class="fact-icon">✉</span>
                        <div><strong><?= htmlspecialchars($profile['email']) ?></strong><small>Email for project enquiries</small></div>
                    </div>
                    <div class="fact-card"><span class="fact-icon">▤</span>
                        <div><strong>Business Systems</strong><small>Accounting & Inventory MIS</small></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section skills-section" id="skills">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">TOOLS I WORK WITH</p>
                        <h2 class="section-title">My <span>Skills</span></h2>
                    </div>
                    <p>Technology and practical business knowledge to help turn ideas into working solutions.</p>
                </div>


                <div class="skills-grid"><?php foreach ($skills as $i => $skill): ?><div class="skill-card"><span class="skill-number"><?= str_pad((string)($i+1), 2, '0', STR_PAD_LEFT) ?></span><strong><?= htmlspecialchars($skill) ?></strong>
                        <div class="skill-line"><span style="width:<?= [88,86,76,92,88,78,82,76,70,68,80,84][$i] ?>%"></span></div>
                    </div><?php endforeach; ?></div>


            </div>
        </section>

        <section class="section" id="services">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">HOW I CAN HELP</p>
                        <h2 class="section-title">My <span>Services</span></h2>
                    </div>
                    <p>Solutions designed around your organisation, customers and day-to-day operations.</p>
                </div>
                <div class="services-grid"><?php foreach ($services as $service): ?><article class="service-card"><span class="service-icon"><?= $service['icon'] ?></span>
                        <h3><?= htmlspecialchars($service['title']) ?></h3>
                        <p><?= htmlspecialchars($service['desc']) ?></p><a href="#contact" aria-label="Enquire about <?= htmlspecialchars($service['title']) ?>">Discuss a project ↗</a>
                    </article><?php endforeach; ?></div>
            </div>
        </section>

        <section class="section projects-section" id="projects">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="section-kicker">SELECTED WORK</p>
                        <h2 class="section-title">Featured <span>Projects</span></h2>
                    </div>
                    <p>A selection of business websites and application concepts. Contact me for a project walkthrough.</p>
                </div>
                <div class="projects-grid"><?php foreach ($projects as $project): ?><article class="project-card">
                        <div class="project-visual">
                            <div class="project-visual-top"><span></span><span></span><span></span><small><?= htmlspecialchars($project['type']) ?></small></div>
                            <div class="project-logo"><?= htmlspecialchars($project['icon']) ?></div>
                            <div class="visual-bars"><i></i><i></i><i></i><i></i><i></i></div>
                        </div>
                        <div class="project-body">
                            <p class="project-type"><?= htmlspecialchars($project['type']) ?></p>
                            <h3><?= htmlspecialchars($project['name']) ?></h3>
                            <p><?= htmlspecialchars($project['desc']) ?></p><a class="project-link" href="<?= htmlspecialchars($project['url']) ?>" <?= str_starts_with($project['url'], 'http') ? 'target="_blank" rel="noopener"' : '' ?>>View Project <span>→</span></a>
                        </div>
                    </article><?php endforeach; ?></div>
            </div>
        </section>

        <section class="section experience-section" id="experience">
            <div class="container experience-grid">
                <div>
                    <p class="section-kicker">MY PROFESSIONAL JOURNEY</p>
                    <h2 class="section-title">Experience & <span>Knowledge</span></h2>
                    <p class="experience-intro">My experience combines practical business operations with hands-on web development and database work.</p>
                </div>
                <div class="timeline">
                    <article class="timeline-item"><span class="timeline-dot"></span>
                        <p class="timeline-label">WEB DEVELOPMENT</p>
                        <h3>Website Developer & IT Solutions</h3>
                        <p>Responsive business websites, PHP/MySQL applications, administration panels, forms, reports and database-driven systems.</p>
                    </article>
                    <article class="timeline-item"><span class="timeline-dot"></span>
                        <p class="timeline-label">BUSINESS OPERATIONS</p>
                        <h3>Finance, Accounting & Commercial Operations</h3>
                        <p>Practical experience with accounting, import-export operations, documentation, banking processes and business reporting.</p>
                    </article>
                    <article class="timeline-item"><span class="timeline-dot"></span>
                        <p class="timeline-label">EDUCATION</p>
                        <h3>B.Com Honours (Management)</h3>
                        <p>National University, Bangladesh.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="contact-section section" id="contact">
            <div class="container contact-grid">
                <div class="contact-copy">
                    <p class="section-kicker">LET’S WORK TOGETHER</p>
                    <h2 class="section-title">Have a project <span>in mind?</span></h2>
                    <p>Tell me what you want to build. I’ll be happy to discuss a suitable website or business application solution.</p>
                    <div class="contact-detail"><span>✉</span>
                        <div><small>Email</small><a href="mailto:<?= htmlspecialchars($profile['email']) ?>"><?= htmlspecialchars($profile['email']) ?></a></div>
                    </div>
                    <div class="contact-detail"><span>☎</span>
                        <div><small>Phone</small><a href="tel:+8801718655666"><?= htmlspecialchars($profile['phone']) ?></a></div>
                    </div>
                    <div class="contact-detail"><span>⌖</span>
                        <div><small>Location</small><strong><?= htmlspecialchars($profile['location']) ?></strong></div>
                    </div>
                </div>
                <form class="contact-form" action="contact.php" method="post">
                    <h3>Send a Message</h3>
                    <div class="form-row"><label>Your Name *<input type="text" name="name" required maxlength="100" placeholder="Enter your name"></label><label>Your Email *<input type="email" name="email" required maxlength="150" placeholder="name@example.com"></label></div>
                    <label>Subject<input type="text" name="subject" maxlength="150" placeholder="What is your project about?"></label>
                    <label>Your Message *<textarea name="message" rows="5" required maxlength="5000" placeholder="Describe your project or requirements..."></textarea></label>
                    <div class="hp-field" aria-hidden="true"><label>Leave this field empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
                    <button class="btn" type="submit">Send Message <span>➤</span></button>
                    <small class="form-note">The contact form requires PHP mail to be configured on your hosting server.</small>
                </form>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-main"><a class="brand footer-brand" href="#home"><span class="brand-mark">HR</span><span><strong><?= htmlspecialchars($profile['name']) ?></strong><small><?= htmlspecialchars($profile['title']) ?></small></span></a>
            <p>Building Better Web Solutions for a Digital Bangladesh.</p>
            <div class="social-links"><a href="mailto:<?= htmlspecialchars($profile['email']) ?>" aria-label="Email">✉</a><a href="#projects" aria-label="Projects">⌘</a><a href="#contact" aria-label="Contact">↗</a></div>
        </div>
        <div class="container footer-bottom"><span>© <?= date('Y') ?> <?= htmlspecialchars($profile['name']) ?>. All rights reserved.</span><a href="#home">Back to top ↑</a></div>
    </footer>
    <script src="script.js"></script>
</body>

</html>
