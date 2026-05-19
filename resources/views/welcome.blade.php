<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ClearView Tree | Professional Tree Care</title>
  <meta name="description" content="ClearView Tree — licensed, insured, ISA-certified arborists offering tree removal, trimming, stump grinding, and emergency tree care." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v=1.3" />
</head>
<body>

  <!-- ======================== NAVBAR ======================== -->
  <nav class="navbar" id="navbar">
    <div class="container nav-inner">
      <a href="#home" class="nav-brand">
        <span class="brand-icon">🌲</span>
        <span class="brand-name">ClearView <em>Tree</em></span>
      </a>
      <ul class="nav-links" id="nav-links">
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#why-us">Why Us</a></li>
        <li><a href="#testimonials">Reviews</a></li>
        <li><a href="#contact" class="btn-nav">Get a Quote</a></li>
      </ul>
      <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- ======================== HERO ======================== -->
  <section class="hero" id="home">
    <div class="hero-bg-shapes" aria-hidden="true"></div>
    <div class="hero-inner">
      <div class="hero-content">
        <div class="hero-badge">
          <span class="badge-dot"></span>
          <span class="badge-text"><span class="badge-line">Licensed &amp; Insured</span><span class="badge-sep">&nbsp;·&nbsp;</span><span class="badge-line">Serving the Community Since 2016</span></span>
        </div>
        <h1>Expert Tree Care<br><em>You Can Trust</em></h1>
        <p>Professional tree removal, trimming, and maintenance for residential and commercial properties. Safe, efficient, and priced fairly.</p>
        <div class="hero-actions">
          <a href="#contact" class="btn btn-primary btn-lg">Get Free Quote</a>
          <a href="#services" class="btn btn-secondary btn-lg">Our Services</a>
        </div>
        <div class="hero-stats">
          <div class="stat"><span class="stat-num">50+</span><span class="stat-label">Jobs Completed</span></div>
          <div class="stat-divider"></div>
          <div class="stat"><span class="stat-num">10+</span><span class="stat-label">Years Experience</span></div>
          <div class="stat-divider"></div>
          <div class="stat"><span class="stat-num">100%</span><span class="stat-label">Satisfaction</span></div>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-img-wrap" id="hero-img-wrap">
          <img src="{{ asset('images/boom3.jfif') }}" alt="ClearView Tree crew at work"
            onerror="document.getElementById('hero-img-wrap').classList.add('no-img'); this.style.display='none';" />
          <div class="hero-fallback-icon" aria-hidden="true">🌳</div>
        </div>
        <div class="hero-rating">
          <div class="rating-stars">★★★★★</div>
          <div class="rating-text"><strong>4.9 / 5.0</strong><span>50+ verified reviews</span></div>
        </div>
        <div class="hero-badge-card"><strong>24/7</strong><span>Emergency Service</span></div>
      </div>
    </div>
  </section>

  <!-- ======================== SERVICES ======================== -->
  <section class="services" id="services">
    <div class="container">
      <div class="section-header fade-up">
        <span class="section-tag">What We Do</span>
        <h2>Our Tree Services</h2>
        <p>Comprehensive care handled by ISA-certified arborists — from routine maintenance to emergency response.</p>
      </div>
      <div class="services-grid">
        <div class="service-card fade-up" data-delay="1">
          <span class="service-icon">🪚</span>
          <h3>Tree Removal</h3>
          <p>Safe, efficient removal of hazardous, dead, or unwanted trees of any size. Full cleanup and disposal included.</p>
          <a href="#contact" class="service-link">Get a quote &rarr;</a>
        </div>
        <div class="service-card featured fade-up" data-delay="2">
          <span class="service-badge">Most Popular</span>
          <span class="service-icon">✂️</span>
          <h3>Tree Trimming &amp; Pruning</h3>
          <p>Expert shaping and pruning to promote healthy growth, improve curb appeal, and remove dangerous limbs.</p>
          <a href="#contact" class="service-link">Get a quote &rarr;</a>
        </div>
        <div class="service-card fade-up" data-delay="3">
          <span class="service-icon">🌿</span>
          <h3>Stump Grinding</h3>
          <p>Complete stump removal using professional grinding equipment, leaving your yard clean and level.</p>
          <a href="#contact" class="service-link">Get a quote &rarr;</a>
        </div>
        <div class="service-card fade-up" data-delay="1">
          <span class="service-icon">🚨</span>
          <h3>Emergency Services</h3>
          <p>24/7 rapid response for storm damage, fallen trees, and hazardous situations threatening your property.</p>
          <a href="#contact" class="service-link">Get a quote &rarr;</a>
        </div>
        <div class="service-card fade-up" data-delay="2">
          <span class="service-icon">🌱</span>
          <h3>Tree Health Care</h3>
          <p>Diagnose and treat diseases, pest infestations, and nutrient deficiencies to keep your trees thriving.</p>
          <a href="#contact" class="service-link">Get a quote &rarr;</a>
        </div>
        <div class="service-card fade-up" data-delay="3">
          <span class="service-icon">🏡</span>
          <h3>Land Clearing</h3>
          <p>Full land clearing for construction, landscaping projects, or new property development of any scale.</p>
          <a href="#contact" class="service-link">Get a quote &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================== ABOUT ======================== -->
  <section class="about" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-visual fade-up">
          <div class="about-img-main">
            <img src="{{ asset('images/boom2.jpg') }}" alt="ClearView Tree professional"
              onerror="this.parentElement.style.background='linear-gradient(135deg,#2d6a4f,#1b4332)'; this.style.display='none';" />
          </div>
          <div class="about-img-secondary">
            <img src="{{ asset('images/boom3.jfif') }}" alt="ClearView Tree job site"
              style="object-position: center top;"
              onerror="this.parentElement.style.background='linear-gradient(135deg,#52b788,#2d6a4f)'; this.style.display='none';" />
          </div>
          <div class="about-years-badge">
            <span class="badge-num">10</span>
            <span class="badge-text">Years of<br>Excellence</span>
          </div>
        </div>
        <div class="about-content fade-up" data-delay="2">
          <span class="section-tag">About Us</span>
          <h2>Local Experts Committed to Your Property's Beauty &amp; Safety</h2>
          <p>ClearView Tree has been serving homeowners and businesses for over 10 years. Our ISA-certified arborists bring expertise, professionalism, and a genuine passion for trees to every job — big or small.</p>
          <p>We use industry-leading equipment and proven techniques to deliver safe, efficient service with minimal disruption to your property.</p>
          <ul class="about-features">
            <li>ISA Certified Arborists on every job</li>
            <li>Fully licensed, bonded &amp; insured</li>
            <li>Free estimates with no obligation</li>
            <li>Residential &amp; commercial service</li>
          </ul>
          <a href="#contact" class="btn btn-primary">Schedule a Consultation</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================== WHY US ======================== -->
  <section class="why-us" id="why-us">
    <div class="container">
      <div class="section-header light fade-up">
        <span class="section-tag">Why ClearView</span>
        <h2>The ClearView Difference</h2>
        <p>What sets us apart from every other tree company in Kansas.</p>
      </div>
      <div class="features-grid">
        <div class="feature-item fade-up" data-delay="1"><span class="feature-icon">🛡️</span><h3>Fully Insured</h3><p>$2M liability coverage protects your property and our crew on every single job, no exceptions.</p></div>
        <div class="feature-item fade-up" data-delay="2"><span class="feature-icon">⚡</span><h3>Fast Response</h3><p>Same-day estimates and 24/7 emergency dispatch. We show up when it matters most.</p></div>
        <div class="feature-item fade-up" data-delay="3"><span class="feature-icon">💰</span><h3>Fair &amp; Transparent Pricing</h3><p>No hidden fees, no surprises. We provide detailed quotes and match competitor pricing on equal work.</p></div>
        <div class="feature-item fade-up" data-delay="1"><span class="feature-icon">♻️</span><h3>Eco-Friendly</h3><p>We recycle 100% of wood waste into mulch and use only environmentally safe treatments.</p></div>
        <div class="feature-item fade-up" data-delay="2"><span class="feature-icon">🎓</span><h3>Certified Experts</h3><p>ISA-certified arborists with continuous training in the latest safety and horticultural practices.</p></div>
        <div class="feature-item fade-up" data-delay="3"><span class="feature-icon">🧹</span><h3>Complete Cleanup</h3><p>We leave your yard spotless — full debris removal, hauling, and ground cleanup on every job.</p></div>
      </div>
    </div>
  </section>

  <!-- ======================== TESTIMONIALS ======================== -->
  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="section-header fade-up">
        <span class="section-tag">Reviews</span>
        <h2>What Our Customers Say</h2>
        <p>Don't just take our word for it — hear from the neighbors we've helped.</p>
      </div>
      <div class="testimonials-grid">
        <div class="testimonial-card fade-up" data-delay="1">
          <div class="stars">★★★★★</div>
          <p>"ClearView removed a massive oak that had been worrying us for years. They were professional, fast, and left the yard cleaner than when they arrived. Absolutely recommend!"</p>
          <div class="testimonial-author"><div class="author-avatar">SJ</div><div><strong>Sarah Johnson</strong><span>Homeowner</span></div></div>
        </div>
        <div class="testimonial-card featured fade-up" data-delay="2">
          <div class="stars">★★★★★</div>
          <p>"After the storm, I called ClearView at midnight and they were on site within 2 hours. Outstanding emergency service — these guys are the real deal and I can't thank them enough."</p>
          <div class="testimonial-author"><div class="author-avatar">MR</div><div><strong>Mike Rodriguez</strong><span>Property Manager</span></div></div>
        </div>
        <div class="testimonial-card fade-up" data-delay="3">
          <div class="stars">★★★★★</div>
          <p>"Best tree service in the area, period. Fair pricing, great communication, and beautiful work on our century-old maples. We'll never use anyone else."</p>
          <div class="testimonial-author"><div class="author-avatar">EL</div><div><strong>Emily Larson</strong><span>Homeowner</span></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================== CONTACT ======================== -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-info fade-up">
          <span class="section-tag">Contact Us</span>
          <h2>Get Your Free Estimate Today</h2>
          <p>Fill out the form and we'll get back to you within a few hours with a no-obligation quote.</p>
          <div class="contact-details">
            <div class="contact-item">
              <span class="contact-icon">📞</span>
              <div><strong>Call or Text</strong><span>(785) 370-2167</span></div>
            </div>
            <div class="contact-item">
              <span class="contact-icon">✉️</span>
              <div><strong>Email Us</strong><span>info@clearviewtree.com</span></div>
            </div>
            <div class="contact-item">
              <span class="contact-icon">🕐</span>
              <div><strong>Hours</strong><span>Mon–Sat: 7am–6pm &nbsp;|&nbsp; 24/7 Emergency</span></div>
            </div>
          </div>
        </div>

        <div class="contact-form-card fade-up" data-delay="2">
          @if (session('success'))
            <div class="form-success show">
              <div class="form-success-icon">✅</div>
              <h3>Request Received!</h3>
              <p>Thank you! We'll be in touch within a few hours with your free estimate.</p>
              <a href="#services" class="btn btn-outline" style="margin-top:20px;">Explore Services</a>
            </div>
          @else
            @if ($errors->any())
              <div style="background:#fff3cd;border:1px solid #ffc107;border-radius:8px;padding:14px 18px;margin-bottom:20px;font-size:0.88rem;color:#856404;">
                <strong>Please fix the following:</strong>
                <ul style="margin-top:8px;padding-left:18px;">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form id="contact-form" method="POST" action="{{ route('contact.store') }}">
              @csrf
              <div class="form-row">
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="John Smith" required />
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="(555) 000-0000" />
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required />
              </div>
              <div class="form-group">
                <label for="service">Service Needed</label>
                <select id="service" name="service">
                  <option value="">Select a service...</option>
                  @foreach (['Tree Removal','Tree Trimming & Pruning','Stump Grinding','Emergency Service','Tree Health Care','Land Clearing','Other / Not Sure'] as $svc)
                    <option value="{{ $svc }}" {{ old('service') === $svc ? 'selected' : '' }}>{{ $svc }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="message">Tell Us More</label>
                <textarea id="message" name="message" rows="4" placeholder="Describe the tree, location, or any details...">{{ old('message') }}</textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-full btn-lg">Send My Free Quote Request</button>
              <p class="form-note">No spam. No obligation. We typically respond within a few hours.</p>
            </form>
          @endif
        </div>
      </div>
    </div>
  </section>

  <!-- ======================== FOOTER ======================== -->
  <footer class="footer">
    <div class="footer-main">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <div class="nav-brand" style="margin-bottom:14px;">
              <span class="brand-icon">🌲</span>
              <span class="brand-name">ClearView <em>Tree</em></span>
            </div>
            <p>Professional tree care you can trust. Serving residential and commercial clients since 2005.</p>
            <div class="social-links">
              <a href="#" aria-label="Facebook">f</a>
              <a href="#" aria-label="Instagram">ig</a>
              <a href="#" aria-label="Google">g+</a>
            </div>
          </div>
          <div class="footer-col">
            <h4>Services</h4>
            <ul>
              <li><a href="#services">Tree Removal</a></li>
              <li><a href="#services">Tree Trimming</a></li>
              <li><a href="#services">Stump Grinding</a></li>
              <li><a href="#services">Emergency Service</a></li>
              <li><a href="#services">Tree Health Care</a></li>
              <li><a href="#services">Land Clearing</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Company</h4>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="#why-us">Why ClearView</a></li>
              <li><a href="#testimonials">Reviews</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#contact">Get a Quote</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Contact</h4>
            <div class="footer-contact-info">
              <p>📞 (785) 370-2167</p>
              <p>✉️ info@clearviewtree.com</p>
              <p>🕐 Mon–Sat: 7am–6pm</p>
              <p>🚨 24/7 Emergency Line</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container footer-bottom-inner">
        <p>&copy; {{ date('Y') }} ClearView Tree. All rights reserved.</p>
        <div class="footer-badges">
          <span>Licensed &amp; Insured</span>
          <span>ISA Certified</span>
          <span>BBB Accredited</span>
        </div>
      </div>
    </div>
    <div style="text-align:center; padding: 10px 0; font-size: 0.8rem; color: #aaa;">
      Designed by <a href="https://anwarinnovations.com" style="color:#aaa;">Anwar Innovations</a> &copy; {{ date('Y') }}
    </div>
  </footer>

  <script src="{{ asset('js/main.js') }}?v=1.4"></script>
</body>
</html>
