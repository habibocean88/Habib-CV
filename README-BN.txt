MD. HABIBUR RAHMAN (HABIB) — PORTFOLIO WEBSITE
================================================

প্রয়োজন:
- PHP 8.0 বা তার পরের সংস্করণ
- Apache server (XAMPP / cPanel hosting)
- এই website চালাতে MySQL database প্রয়োজন নেই।

LOCAL XAMPP-এ চালানোর নিয়ম:
1. ZIP ফাইল Extract করুন।
2. পুরো habib_portfolio_website folder কপি করুন:
   D:\xampp\htdocs\habib_portfolio_website\
   (আপনার XAMPP অন্য জায়গায় থাকলে সেই htdocs folder ব্যবহার করুন)
3. XAMPP Control Panel থেকে Apache Start করুন।
4. Browser-এ খুলুন:
   http://localhost/habib_portfolio_website/

CPANEL-এ আপলোড:
1. ZIP Extract করুন।
2. cPanel → File Manager → public_html-এ ফাইলগুলো আপলোড করুন।
3. index.php, style.css, script.js, contact.php একই folder-এ রাখুন।
4. HTTPS/SSL চালু রাখুন।

নিজের তথ্য পরিবর্তন:
- index.php ফাইলের শুরুতে $profile array-এ নাম, title, email, phone, location বদলান।
- Contact form-এর receiving email contact.php ফাইলের $to ভেরিয়েবলে বদলান।
- Project-এর নাম/লিংক index.php-তে $projects array-এ বদলান।
- Skills ও Services index.php-তে পরিবর্তন করা যাবে।

CV DOWNLOAD:
- Header-এ Download CV link cv.pdf ফাইলের জন্য তৈরি করা হয়েছে।
- আপনার নিজের CV PDF ফাইলটি cv.pdf নামে এই folder-এ রাখুন।
- CV এখনো না রাখলে Download CV link কাজ করবে না।

CONTACT FORM:
- contact.php PHP mail() ব্যবহার করে email পাঠায়।
- cPanel hosting-এ সাধারণত domain email ও server mail configuration সঠিক থাকতে হবে।
- Local XAMPP-এ mail configuration না থাকলে form email পাঠাবে না।
- Contact form-এ email না গেলে email/SMTP configuration করতে হবে।

নোট:
- Project thumbnails এই starter version-এ CSS দিয়ে তৈরি করা হয়েছে; নিজের screenshots/images যোগ করে আরও বাস্তবসম্মত করা যাবে।
- Social media buttons placeholder হিসেবে রাখা হয়েছে; নিজের profile links বসিয়ে নেবেন।
- Google Fonts ব্যবহার করতে ইন্টারনেট সংযোগ প্রয়োজন; সংযোগ না থাকলে fallback font ব্যবহৃত হবে।
