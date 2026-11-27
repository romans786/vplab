<?php
$pageTitle = "Courses - VP ITLabs";
$pageDesc = "Explore VP ITLabs IT training courses: Web Designing, App Development, Python, Java, C, C++, AI & ML, React, Angular, Node, Laravel, Django, WordPress, MongoDB, MySQL and more.";
$pageKeywords = "IT courses Ahmedabad, web designing course, python programming course, java course, app development training, programming classes Gujarat, AI ML course";
include __DIR__ . '/header.php';
?>

<section class="page-hero">
    <div class="container">
      <div class="eyebrow" style="color:var(--primary);font-size:.8rem;letter-spacing:2.5px;font-weight:600;text-transform:uppercase;">IT Training</div>
      <h1 class="reveal in"><mark>Explore Our Courses</mark></h1>
      <p class="reveal in d1">From school-level programming to advanced AI &amp; ML &mdash; learn with industry mentors at VP ITLabs, Ahmedabad.</p>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="section-head reveal">
        <div class="eyebrow">Training Programs</div>
        <h2><mark>Courses We Offer</mark></h2>
      </div>
      <div class="prog-grid">
        <div class="prog-card reveal"><div class="mv-ico"><img src="img/serv/app-development.webp" alt="Web Designing"></div><h3>Web Designing</h3><p>Design modern, responsive websites with a focus on user experience.</p></div>
        <div class="prog-card reveal d1"><div class="mv-ico"><img src="img/tech/android.webp" alt="App Development"></div><h3>APP Development</h3><p>Build Android apps from scratch using industry tools and workflows.</p></div>
        <div class="prog-card reveal d2"><div class="mv-ico"><img src="img/serv/internship.webp" alt="STD 10th and 12th"></div><h3>STD 10th &amp; 12th</h3><p>Foundational computer and programming classes for school students.</p></div>
        <div class="prog-card reveal"><div class="mv-ico"><img src="img/serv/icons8-ai-64-1.webp" alt="AI and ML"></div><h3>AI &amp; ML</h3><p>Hands-on artificial intelligence and machine learning training.</p></div>
        <div class="prog-card reveal d1"><div class="mv-ico"><img src="img/tech/python.webp" alt="Python"></div><h3>Python</h3><p>Learn Python programming for automation, web and data science.</p></div>
        <div class="prog-card reveal d2"><div class="mv-ico"><img src="img/serv/icons8-c-240.webp" alt="C Language"></div><h3>C Language</h3><p>Start your programming journey with the classic C language.</p></div>
        <div class="prog-card reveal"><div class="mv-ico"><img src="img/serv/icons8-c-240-1.webp" alt="C++"></div><h3>C++</h3><p>Object-oriented programming and algorithms with C++.</p></div>
        <div class="prog-card reveal d1"><div class="mv-ico"><img src="img/serv/icons8-java-480.webp" alt="Java"></div><h3>JAVA</h3><p>Enterprise Java programming from fundamentals to advanced topics.</p></div>
        <div class="prog-card reveal d2"><div class="mv-ico"><img src="img/tech/php.webp" alt="PHP"></div><h3>PHP</h3><p>Server-side scripting to build dynamic web applications.</p></div>
        <div class="prog-card reveal"><div class="mv-ico"><img src="img/tech/html.webp" alt="HTML"></div><h3>HTML</h3><p>Structure the web &mdash; master the markup language of the internet.</p></div>
        <div class="prog-card reveal d1"><div class="mv-ico"><img src="img/tech/css.webp" alt="CSS"></div><h3>CSS</h3><p>Style and animate your web pages with modern CSS.</p></div>
        <div class="prog-card reveal d2"><div class="mv-ico"><img src="img/tech/react.webp" alt="React JS"></div><h3>React Js</h3><p>Build interactive user interfaces with the React library.</p></div>
        <div class="prog-card reveal"><div class="mv-ico"><img src="img/serv/icons8-angular-96.webp" alt="Angular JS"></div><h3>Angular JS</h3><p>Develop structured single-page applications with Angular.</p></div>
        <div class="prog-card reveal d1"><div class="mv-ico"><img src="img/tech/node.webp" alt="Node JS"></div><h3>Node Js</h3><p>Run JavaScript on the server and build scalable backends.</p></div>
        <div class="prog-card reveal d2"><div class="mv-ico"><img src="img/tech/laravel.webp" alt="Laravel"></div><h3>Laravel (PHP Framework)</h3><p>Rapid, secure PHP development with the Laravel framework.</p></div>
        <div class="prog-card reveal"><div class="mv-ico"><img src="img/serv/django.webp" alt="Django"></div><h3>Django (Python Framework)</h3><p>Full-stack Python web development with Django.</p></div>
        <div class="prog-card reveal d1"><div class="mv-ico"><img src="img/tech/wordpress.webp" alt="WordPress"></div><h3>WordPress</h3><p>Create powerful websites and blogs with WordPress.</p></div>
        <div class="prog-card reveal d2"><div class="mv-ico"><img src="img/serv/mongodb.webp" alt="Mongo DB"></div><h3>Mongo DB</h3><p>Work with NoSQL databases using MongoDB.</p></div>
        <div class="prog-card reveal"><div class="mv-ico"><img src="img/tech/mysql.webp" alt="MySQL"></div><h3>MySql</h3><p>Relational database design and SQL for applications.</p></div>
        <div class="prog-card reveal d1"><div class="mv-ico"><img src="img/serv/startup.webp" alt="Other Database"></div><h3>Other Database</h3><p>Explore additional database technologies used in the industry.</p></div>
      </div>
    </div>
  </section>

  <section class="contact" id="course-inquiry">
    <div class="container contact-grid">
      <div class="contact-form reveal">
        <h2 style="font-size:clamp(1.4rem,3vw,1.9rem);margin-bottom:8px;">Enquire About a Course</h2>
        <p style="color:var(--muted);margin-bottom:26px;">Tell us which course interests you and our team will share batch schedules and fees.</p>
        <form action="#" method="POST" class="contact-form">
          <div class="form-row">
            <div class="form-group">
              <label for="c-name">Full Name *</label>
              <input type="text" id="c-name" name="c-name" placeholder="Your name" required>
            </div>
            <div class="form-group">
              <label for="c-email">Email *</label>
              <input type="email" id="c-email" name="c-email" placeholder="you@example.com" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="c-phone">Phone *</label>
              <input type="tel" id="c-phone" name="c-phone" placeholder="+91 00000 00000" required>
            </div>
            <div class="form-group">
              <label for="c-course">Select Course *</label>
              <select id="c-course" name="c-course" style="width:100%;padding:13px 16px;border:1px solid var(--border);border-radius:12px;font-family:var(--font);font-size:.95rem;background:#fff;">
                <option value="">Choose a course</option>
                <option>Web Designing</option>
                <option>APP Development</option>
                <option>AI &amp; ML</option>
                <option>Python</option>
                <option>C Language</option>
                <option>C++</option>
                <option>JAVA</option>
                <option>PHP</option>
                <option>HTML &amp; CSS</option>
                <option>React Js</option>
                <option>Angular JS</option>
                <option>Node Js</option>
                <option>Laravel</option>
                <option>Django</option>
                <option>WordPress</option>
                <option>Mongo DB / MySql</option>
                <option>STD 10th &amp; 12th</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="c-msg">Message</label>
            <textarea id="c-msg" name="c-msg" rows="4" placeholder="Preferred batch timings or any questions"></textarea>
          </div>
          <p class="form-note">Your email address will not be published. Required fields are marked *</p>
          <button class="btn-primary" type="submit" style="border:none;">Submit Enquiry</button>
          <div class="form-ok">Thank you! Your enquiry has been received. We&rsquo;ll contact you shortly.</div>
        </form>
      </div>
      <div class="reveal d1">
        <div class="info-card">
          <div class="mv-ico" style="background:linear-gradient(135deg,#6a11cb,#2575fc);"><svg viewBox="0 0 24 24"><path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.58L18 9l-8 8z"/></svg></div>
          <div>
            <h3>Internships Open</h3>
            <p>Enroll for <a href="internship-5th-sem">5th Sem</a> or <a href="internship-3rd-sem">3rd Sem</a> internship, or the <a href="data-science-reg">Data Science</a> program.</p>
          </div>
        </div>
        <div class="info-card">
          <div class="mv-ico" style="background:linear-gradient(135deg,#ff5f6d,#ffc371);"><svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1-.24 11.36 11.36 0 0 0 3.56.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.36 11.36 0 0 0 .57 3.56 1 1 0 0 1-.25 1z"/></svg></div>
          <div>
            <h3>Questions?</h3>
            <p>Call <a href="tel:+917359119740">+91 7359119740</a> or email <a href="mailto:info@vpitlabs.com">info@vpitlabs.com</a>.</p>
          </div>
        </div>
        <div class="info-card">
          <div class="mv-ico" style="background:linear-gradient(135deg,#11998e,#38ef7d);"><svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg></div>
          <div>
            <h3>Training Center</h3>
            <p>Pushpak Corner, B-536, Navyug School Rd, Krishnanagar, Naroda, Ahmedabad, Gujarat 382330</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include __DIR__ . "/footer.php"; ?>
