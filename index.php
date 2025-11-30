<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QuickPOS – Modern Point of Sale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <!-- Logo -->
        <div class="logo">
            Quick<span>POS</span>
        </div>

        <!-- Navigation + Sign Up button -->
        <nav class="main-nav">
            <button class="nav-toggle" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#signup" class="btn btn-outline header-signup">Sign Up</a>
        </nav>
        <main>
    <!-- Hero Section -->
    <section class="hero" id="top">
        <div class="container hero-grid">
            <div class="hero-content">
                <h1>The Last POS System You’ll Ever Need</h1>
                <p>
                    QuickPOS is a cloud-based point-of-sale platform built for modern retailers,
                    restaurants, and growing businesses.
                </p>
                <div class="hero-ctas">
                    <a href="#pricing" class="btn btn-primary cta-get-started">
                        Get Started for Free
                    </a>
                    <a href="#features" class="btn btn-ghost">
                        See Features
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/img/quickpos-mockup.png"
                     alt="QuickPOS dashboard on tablet and phone">
            </div>
        </div>
    </section>
    <!-- Features Section -->
<section id="features" class="features">
    <div class="container">
        <h2>Powerful Features for Smart Businesses</h2>
        <p class="section-subtitle">
            Everything you need to sell, track, and grow — in one POS platform.
        </p>

        <div class="feature-grid">
            <article class="feature-card">
                <div class="feature-icon">
                    <span class="icon icon-inventory"></span>
                </div>
                <h3>Inventory Management</h3>
                <p>
                    Track stock in real time, set reorder alerts, and manage multiple locations
                    from a single dashboard.
                </p>
            </article>

            <article class="feature-card">
                <div class="feature-icon">
                    <span class="icon icon-analytics"></span>
                </div>
                <h3>Sales Analytics</h3>
                <p>
                    Understand your best-selling products, peak hours, and revenue trends in
                    clear visual reports.
                </p>
            </article>

            <article class="feature-card">
                <div class="feature-icon">
                    <span class="icon icon-integration"></span>
                </div>
                <h3>Easy Integration</h3>
                <p>
                    Connect QuickPOS with your accounting, ecommerce, and marketing tools with
                    plug-and-play integrations.
                </p>
            </article>

            <article class="feature-card">
                <div class="feature-icon">
                    <span class="icon icon-support"></span>
                </div>
                <h3>24/7 Support</h3>
                <p>
                    Get help anytime from our dedicated POS experts — via chat, email, or phone.
                </p>
            </article>
        </div>
    </div>
</section>
<!-- Pricing Section -->
<section id="pricing" class="pricing">
    <div class="container">
        <h2>Simple, Transparent Pricing</h2>
        <p class="section-subtitle">
            Choose a plan that matches your business stage. No hidden fees.
        </p>

        <div class="pricing-grid">
            <article class="pricing-card">
                <h3>Basic</h3>
                <p class="price">
                    <span class="currency">$</span>29<span class="period">/mo</span>
                </p>
                <ul>
                    <li>1 register</li>
                    <li>Basic inventory tracking</li>
                    <li>Email support</li>
                </ul>
                <a href="#contact" class="btn btn-outline">Start Basic</a>
            </article>

            <article class="pricing-card featured">
                <div class="badge">Most Popular</div>
                <h3>Pro</h3>
                <p class="price">
                    <span class="currency">$</span>59<span class="period">/mo</span>
                </p>
                <ul>
                    <li>3 registers</li>
                    <li>Advanced analytics & reports</li>
                    <li>Priority support</li>
                </ul>
                <a href="#contact" class="btn btn-primary">Start Pro</a>
            </article>

            <article class="pricing-card">
                <h3>Enterprise</h3>
                <p class="price">Contact us</p>
                <ul>
                    <li>Unlimited locations</li>
                    <li>Custom integrations</li>
                    <li>Dedicated account manager</li>
                </ul>
                <a href="#contact" class="btn btn-outline">Contact Sales</a>
            </article>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <p class="section-subtitle">
            Have questions about QuickPOS? Our team is here to help.
        </p>

        <form action="contact.php" method="POST" class="contact-form" novalidate>
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Send Message
            </button>
        </form>
    </div>
</section>


    </div>
</header>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <p class="footer-logo">Quick<span>POS</span></p>
            <p class="copyright">
                © <?php echo date('Y'); ?> QuickPOS. All rights reserved.
            </p>
        </div>
        <div class="footer-links">
            <p>Follow us</p>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                   aria-label="QuickPOS on Facebook">
                    <i class="icon icon-facebook"></i>
                </a>
                <a href="https://x.com" target="_blank" rel="noopener noreferrer"
                   aria-label="QuickPOS on X">
                    <i class="icon icon-x"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"
                   aria-label="QuickPOS on LinkedIn">
                    <i class="icon icon-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
