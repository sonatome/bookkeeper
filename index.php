<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// ============================================================
// PROFESSIONAL BOOKKEEPER PORTFOLIO
// Single Page index.php
// ============================================================

// You can change these details later
$name = "Jerry D. De Leon";
$title = "Professional Bookkeeper";
$email = "jerdeleon316@gmail.com";
$experience = "5+ Years";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?= htmlspecialchars($name) ?> | Professional Bookkeeper
    </title>

    <meta name="description"
          content="Professional Bookkeeper with 5+ years of experience in bookkeeping, bank reconciliation, payroll, Xero and financial records.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
          rel="stylesheet">

    <style>

        /* =====================================================
           GLOBAL
        ===================================================== */

        :root {
            --navy: #102a43;
            --navy-dark: #0b2033;
            --blue: #173f5f;

            --cream: #f8f5ef;
            --cream-dark: #eee8dc;

            --white: #ffffff;

            --gold: #c6a15b;
            --gold-light: #e2cf9a;

            --text: #1f2933;
            --muted: #627d98;

            --border: #e5e0d6;

            --shadow:
                0 20px 60px rgba(16, 42, 67, 0.10);

            --radius: 22px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "DM Sans", sans-serif;
            color: var(--text);
            background: var(--cream);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        /* =====================================================
           NAVIGATION
        ===================================================== */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;

            background:
                rgba(255, 253, 249, 0.94);

            backdrop-filter: blur(14px);

            border-bottom:
                1px solid rgba(229, 224, 214, 0.8);
        }

        .nav-container {
            min-height: 76px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;

            color: var(--navy);
            font-weight: 700;
        }

        .brand-icon {
            width: 42px;
            height: 42px;

            display: grid;
            place-items: center;

            background: var(--navy);
            color: white;

            border-radius: 12px;

            font-family: Georgia, serif;
            font-size: 21px;
        }

        .brand-text small {
            display: block;

            color: var(--gold);

            font-size: 9px;

            letter-spacing: 2px;

            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            gap: 5px;
        }

        .nav-links a {
            padding: 8px 12px;

            border-radius: 8px;

            color: var(--muted);

            font-size: 13px;

            transition: .25s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            background: var(--cream-dark);
            color: var(--navy);
        }

        .menu-button {
            display: none;

            border: 0;
            background: transparent;

            font-size: 27px;

            color: var(--navy);

            cursor: pointer;
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            min-height: 100vh;

            padding:
                125px 0
                80px;

            background:
                radial-gradient(
                    circle at 75% 20%,
                    rgba(198,161,91,.20),
                    transparent 28%
                ),

                linear-gradient(
                    135deg,
                    #fbf9f4,
                    #edf3f5
                );

            display: flex;
            align-items: center;
        }

        .hero-grid {
            display: grid;

            grid-template-columns:
                0.9fr
                1.1fr;

            gap: 75px;

            align-items: center;
        }

        /* =====================================================
           PROFILE PHOTO
        ===================================================== */

        .profile-area {
            display: flex;
            justify-content: center;

            position: relative;
        }

        .profile-frame {
            width: 360px;
            height: 440px;

            position: relative;

            border-radius:
                180px
                180px
                30px
                30px;

            background:
                linear-gradient(
                    145deg,
                    var(--gold),
                    var(--gold-light)
                );

            padding: 8px;

            box-shadow:
                0 30px 70px
                rgba(16,42,67,.18);
        }

        .profile-frame::before {
            content: "";

            position: absolute;

            inset: -14px;

            border:
                1px solid
                rgba(198,161,91,.55);

            border-radius:
                190px
                190px
                40px
                40px;

            z-index: -1;
        }

        .profile-photo {
            width: 100%;
            height: 100%;

            object-fit: cover;

            object-position: center top;

            border-radius:
                175px
                175px
                24px
                24px;

            background: #ddd;
        }

        .photo-label {
            position: absolute;

            bottom: 25px;
            right: -25px;

            background: var(--navy);

            color: white;

            padding:
                14px
                18px;

            border-radius: 14px;

            box-shadow: var(--shadow);

            font-size: 12px;

            font-weight: 600;
        }

        .photo-label span {
            display: block;

            color: var(--gold-light);

            font-size: 10px;

            margin-top: 2px;
        }


        /* =====================================================
           HERO TEXT
        ===================================================== */

        .eyebrow {
            color: var(--gold);

            font-weight: 700;

            letter-spacing: 3px;

            text-transform: uppercase;

            font-size: 12px;

            margin-bottom: 17px;
        }

        .hero h1 {
            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(43px, 5.5vw, 72px);

            line-height: 1.08;

            color: var(--navy);
        }

        .hero h1 span {
            color: var(--gold);
        }

        .hero-title {
            margin-top: 12px;

            font-size: 19px;

            font-weight: 600;

            color: var(--blue);
        }

        .hero-description {
            max-width: 650px;

            margin-top: 20px;

            font-size: 18px;

            color: var(--muted);
        }

        .buttons {
            display: flex;

            flex-wrap: wrap;

            gap: 12px;

            margin-top: 28px;
        }

        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding:
                13px
                21px;

            border-radius: 10px;

            font-size: 14px;

            font-weight: 700;

            transition:
                transform .25s,
                box-shadow .25s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--navy);

            color: white;

            box-shadow:
                0 10px 25px
                rgba(16,42,67,.18);
        }

        .btn-outline {
            border:
                1px solid
                #b9b09f;

            color: var(--navy);

            background:
                rgba(255,255,255,.5);
        }

        .hero-stats {
            display: flex;

            flex-wrap: wrap;

            gap: 25px;

            margin-top: 38px;
        }

        .hero-stat {
            border-left:
                2px solid
                var(--gold);

            padding-left: 13px;
        }

        .hero-stat strong {
            display: block;

            color: var(--navy);

            font-size: 20px;
        }

        .hero-stat span {
            color: var(--muted);

            font-size: 12px;
        }


        /* =====================================================
           GENERAL SECTIONS
        ===================================================== */

        section {
            padding:
                100px
                0;
        }

        .white-section {
            background: var(--white);
        }

        .section-header {
            max-width: 750px;

            margin-bottom: 48px;
        }

        .section-header h2 {
            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(34px, 4vw, 50px);

            line-height: 1.12;

            color: var(--navy);
        }

        .section-header p {
            margin-top: 15px;

            color: var(--muted);

            font-size: 16px;
        }


        /* =====================================================
           ABOUT
        ===================================================== */

        .about-grid {
            display: grid;

            grid-template-columns:
                1.1fr
                .9fr;

            gap: 60px;

            align-items: center;
        }

        .about-text p {
            color: var(--muted);

            margin-bottom: 17px;
        }

        .highlight-box {
            background:
                linear-gradient(
                    135deg,
                    var(--navy),
                    var(--blue)
                );

            color: white;

            border-radius:
                var(--radius);

            padding: 40px;

            box-shadow: var(--shadow);
        }

        .highlight-box h3 {
            font-family:
                "Playfair Display",
                serif;

            font-size: 30px;

            margin-bottom: 20px;
        }

        .highlight-item {
            border-top:
                1px solid
                rgba(255,255,255,.18);

            padding:
                14px 0;

            color: #dbe5ec;
        }

        .highlight-item strong {
            color: var(--gold-light);

            display: block;
        }


        /* =====================================================
           CARDS
        ===================================================== */

        .cards {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 22px;
        }

        .card {
            background: white;

            border:
                1px solid
                var(--border);

            border-radius: 18px;

            padding: 29px;

            box-shadow:
                0 8px 30px
                rgba(16,42,67,.05);

            transition:
                transform .3s,
                box-shadow .3s;
        }

        .card:hover {
            transform:
                translateY(-5px);

            box-shadow:
                0 18px 40px
                rgba(16,42,67,.10);
        }

        .icon {
            width: 45px;
            height: 45px;

            display: grid;
            place-items: center;

            background: #f0eadf;

            color: var(--navy);

            border-radius: 12px;

            font-weight: 700;

            margin-bottom: 18px;
        }

        .card h3 {
            color: var(--navy);

            font-size: 19px;

            margin-bottom: 8px;
        }

        .card p {
            color: var(--muted);

            font-size: 14px;
        }


        /* =====================================================
           PROFESSIONAL IDENTITY
        ===================================================== */

        .identity-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 18px;
        }

        .identity-item {
            padding: 25px;

            background: #fbfaf7;

            border-left:
                3px solid
                var(--gold);

            border-radius:
                0 14px 14px 0;
        }

        .identity-item h3 {
            color: var(--navy);

            font-size: 18px;
        }

        .identity-item p {
            color: var(--muted);

            font-size: 14px;

            margin-top: 5px;
        }


        /* =====================================================
           WHY ME
        ===================================================== */

        .why-section {
            background:
                linear-gradient(
                    135deg,
                    #f4f0e8,
                    #eaf0f3
                );
        }

        .three-pillars {
            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 25px;
        }

        .pillar {
            background:
                rgba(255,255,255,.75);

            border:
                1px solid
                rgba(229,224,214,.9);

            padding: 38px 30px;

            border-radius:
                var(--radius);

            text-align: center;
        }

        .pillar-number {
            color: var(--gold);

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 2px;
        }

        .pillar h3 {
            color: var(--navy);

            font-family:
                "Playfair Display",
                serif;

            font-size: 26px;

            margin: 10px 0;
        }

        .pillar p {
            color: var(--muted);

            font-size: 14px;
        }


        /* =====================================================
           SKILLS
        ===================================================== */

        .skills-grid {
            display: grid;

            grid-template-columns:
                repeat(4,1fr);

            gap: 18px;
        }

        .skill {
            padding: 25px;

            border:
                1px solid
                var(--border);

            background:
                var(--cream);

            border-radius: 16px;
        }

        .skill h3 {
            color: var(--navy);

            font-size: 16px;

            margin-bottom: 6px;
        }

        .skill p {
            color: var(--muted);

            font-size: 13px;
        }


        /* =====================================================
           ACCOUNTING CYCLE
        ===================================================== */

        .cycle {
            display: grid;

            grid-template-columns:
                repeat(4,1fr);

            gap: 18px;
        }

        .cycle-step {
            position: relative;

            background: white;

            border:
                1px solid
                var(--border);

            border-radius: 18px;

            padding: 25px;
        }

        .cycle-number {
            color: var(--gold);

            font-weight: 700;

            font-size: 12px;

            letter-spacing: 2px;
        }

        .cycle-step h3 {
            color: var(--navy);

            font-size: 17px;

            margin:
                8px 0;
        }

        .cycle-step p {
            color: var(--muted);

            font-size: 13px;
        }

        .cycle-flow {
            margin-top: 35px;

            text-align: center;

            color: var(--navy);

            font-weight: 700;

            letter-spacing: 1px;
        }


        /* =====================================================
           FUTURE GOALS
        ===================================================== */

        .goals-grid {
            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 22px;
        }

        .goal {
            padding: 30px;

            background: white;

            border:
                1px solid
                var(--border);

            border-radius: 18px;
        }

        .goal h3 {
            color: var(--navy);

            margin-bottom: 8px;
        }

        .goal p {
            color: var(--muted);

            font-size: 14px;
        }


        /* =====================================================
           VISION
        ===================================================== */

        .vision {
            background:
                linear-gradient(
                    135deg,
                    var(--navy),
                    var(--blue)
                );

            color: white;

            border-radius: 28px;

            padding: 60px;

            text-align: center;

            box-shadow: var(--shadow);
        }

        .vision .eyebrow {
            color: var(--gold-light);
        }

        .vision h2 {
            color: white;

            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(35px, 5vw, 55px);
        }

        .vision p {
            max-width: 680px;

            margin:
                17px auto 0;

            color: #dbe5ec;
        }


        /* =====================================================
           CONTACT
        ===================================================== */

        .contact-section {
            background: var(--white);
        }

        .contact-grid {
            display: grid;

            grid-template-columns:
                1fr
                1fr;

            gap: 25px;
        }

        .contact-card {
            padding: 30px;

            border:
                1px solid
                var(--border);

            border-radius: 18px;

            background: var(--cream);
        }

        .contact-card strong {
            display: block;

            color: var(--navy);

            margin-bottom: 4px;
        }

        .contact-card span {
            color: var(--muted);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            background: var(--navy-dark);

            color: #b9c7d2;

            padding: 40px 0;
        }

        .footer-inner {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            flex-wrap: wrap;

            font-size: 13px;
        }

        .footer-brand {
            color: white;

            font-weight: 700;
        }


        /* =====================================================
           SCROLL ANIMATION
        ===================================================== */

        .reveal {
            opacity: 0;

            transform:
                translateY(25px);

            transition:
                opacity .7s ease,
                transform .7s ease;
        }

        .reveal.show {
            opacity: 1;

            transform:
                translateY(0);
        }


        /* =====================================================
           BACK TO TOP
        ===================================================== */

        #backToTop {
            position: fixed;

            right: 22px;
            bottom: 22px;

            width: 45px;
            height: 45px;

            border: 0;

            border-radius: 50%;

            background: var(--navy);

            color: white;

            cursor: pointer;

            display: none;

            align-items: center;
            justify-content: center;

            box-shadow: var(--shadow);

            z-index: 500;
        }

        #backToTop.show {
            display: flex;
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media(max-width: 1000px) {

            .hero-grid {
                grid-template-columns: 1fr;

                text-align: center;
            }

            .profile-area {
                order: -1;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .buttons,
            .hero-stats {
                justify-content: center;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .skills-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }

            .cycle {
                grid-template-columns:
                    repeat(2,1fr);
            }

            .cards {
                grid-template-columns:
                    repeat(2,1fr);
            }

            .goals-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }
        }


        @media(max-width: 760px) {

            .menu-button {
                display: block;
            }

            .nav-links {
                display: none;

                position: absolute;

                top: 70px;

                left: 15px;
                right: 15px;

                padding: 12px;

                background: white;

                border-radius: 14px;

                box-shadow: var(--shadow);

                flex-direction: column;
            }

            .nav-links.open {
                display: flex;
            }

            .nav-links a {
                padding: 11px;
            }

            .profile-frame {
                width: 280px;
                height: 350px;
            }

            .cards,
            .three-pillars,
            .skills-grid,
            .cycle,
            .goals-grid,
            .identity-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            section {
                padding: 75px 0;
            }

            .vision {
                padding: 40px 25px;
            }
        }


        @media(max-width: 450px) {

            .hero {
                padding-top: 110px;
            }

            .profile-frame {
                width: 245px;
                height: 315px;
            }

            .photo-label {
                right: -10px;
            }

            .hero h1 {
                font-size: 42px;
            }
        }

    </style>
</head>


<body>


<!-- ==========================================================
     NAVIGATION
=========================================================== -->

<nav class="navbar">

    <div class="container nav-container">

        <a href="#home" class="brand">

            <div class="brand-icon">
                B
            </div>

            <div class="brand-text">

                <?= htmlspecialchars($name) ?>

                <small>
                    Professional Bookkeeper
                </small>

            </div>

        </a>


        <button
            class="menu-button"
            id="menuButton"
            aria-label="Open navigation">

            ☰

        </button>


        <div class="nav-links" id="navLinks">

            <a href="#home">Home</a>

            <a href="#about">Who Am I?</a>

            <a href="#identity">Identity</a>

            <a href="#why">Why Me?</a>

            <a href="#skills">Skills</a>

            <a href="#process">Process</a>

            <a href="#goals">Goals</a>

            <a href="#contact">Contact</a>

        </div>

    </div>

</nav>



<!-- ==========================================================
     HERO
=========================================================== -->

<header class="hero" id="home">

    <div class="container hero-grid">


        <!-- PROFILE PHOTO -->

        <div class="profile-area reveal">

            <div class="profile-frame">

                <!--
                =================================================
                YOUR PHOTO

                Replace:

                assets/profile.jpg

                with your own above-the-shoulder photo.

                Recommended:
                - Professional clothing
                - Plain or elegant background
                - Good lighting
                - Photo from chest/shoulder upward
                - Portrait orientation
                =================================================
                -->

                <img
                    src="assets/profile.jpg"
                    alt="Professional Bookkeeper"
                    class="profile-photo"
                    onerror="this.src='https://via.placeholder.com/600x800?text=YOUR+PHOTO';"
                >

                <div class="photo-label">

                    <?= htmlspecialchars($experience) ?>

                    <span>
                        Bookkeeping Experience
                    </span>

                </div>

            </div>

        </div>


        <!-- HERO CONTENT -->

        <div class="reveal">

            <div class="eyebrow">
                Professional Bookkeeper
            </div>


            <h1>

                Accuracy in Every Transaction.

                <span>
                    Trust in Every Number.
                </span>

            </h1>


            <div class="hero-title">

                <?= htmlspecialchars($name) ?>
                · <?= htmlspecialchars($title) ?>

            </div>


            <p class="hero-description">

                I help businesses keep their financial records
                accurate, organized, and up to date through
                reliable bookkeeping and professional financial
                support.

            </p>


            <div class="buttons">

                <a
                    href="#skills"
                    class="btn btn-primary">

                    Explore My Expertise

                </a>


                <a
                    href="#contact"
                    class="btn btn-outline">

                    Let's Work Together

                </a>

            </div>


            <div class="hero-stats">

                <div class="hero-stat">

                    <strong>
                        5+
                    </strong>

                    <span>
                        Years Experience
                    </span>

                </div>


                <div class="hero-stat">

                    <strong>
                        Xero / Quickbooks
                    </strong>

                    <span>
                        Accounting Platform
                    </span>

                </div>


                <div class="hero-stat">

                    <strong>
                        Accurate
                    </strong>

                    <span>
                        Detail-Oriented Work
                    </span>

                </div>

            </div>

        </div>

    </div>

</header>



<!-- ==========================================================
     WHO AM I
=========================================================== -->

<section id="about" class="white-section">

    <div class="container about-grid">


        <div class="about-text reveal">

            <div class="eyebrow">
                About Me
            </div>

            <div class="section-header">

                <h2>
                    Who Am I?
                </h2>

            </div>


            <p>

                I am a dedicated and detail-oriented Bookkeeper
                with 5+ years of experience in managing financial
                records and supporting business operations.

            </p>


            <p>

                I specialize in bank reconciliation, payroll
                processing, tax adjustments, pre-audit preparation,
                and accurate financial recordkeeping.

            </p>


            <p>

                I use Xero to keep financial information organized,
                accurate, and up to date.

            </p>


            <p>

                My goal is simple: to provide reliable bookkeeping
                support, maintain accurate records, and give
                business owners confidence in their numbers.

            </p>

        </div>


        <div class="highlight-box reveal">

            <h3>
                What I Bring
            </h3>


            <div class="highlight-item">

                <strong>
                    Accuracy
                </strong>

                I pay close attention to every transaction.

            </div>


            <div class="highlight-item">

                <strong>
                    Reliability
                </strong>

                I provide consistent and dependable support.

            </div>


            <div class="highlight-item">

                <strong>
                    Integrity
                </strong>

                I handle financial information with honesty
                and responsibility.

            </div>


            <div class="highlight-item">

                <strong>
                    Trust
                </strong>

                I believe strong professional relationships
                are built on dependable service.

            </div>

        </div>

    </div>

</section>



<!-- ==========================================================
     PROFESSIONAL IDENTITY
=========================================================== -->

<section id="identity">

    <div class="container">

        <div class="section-header reveal">

            <div class="eyebrow">
                My Standards
            </div>

            <h2>
                My Professional Identity
            </h2>

            <p>

                Bookkeeping is more than entering numbers.
                It is about accuracy, responsibility,
                confidentiality, and trust.

            </p>

        </div>


        <div class="identity-grid">


            <div class="identity-item reveal">

                <h3>
                    Accuracy
                </h3>

                <p>
                    I make sure financial records are complete,
                    organized, and carefully checked.
                </p>

            </div>


            <div class="identity-item reveal">

                <h3>
                    Integrity
                </h3>

                <p>
                    I handle financial information with honesty
                    and responsibility.
                </p>

            </div>


            <div class="identity-item reveal">

                <h3>
                    Reliability
                </h3>

                <p>
                    I provide consistent and dependable
                    bookkeeping support.
                </p>

            </div>


            <div class="identity-item reveal">

                <h3>
                    Confidentiality
                </h3>

                <p>
                    I respect the privacy and security of
                    every financial record.
                </p>

            </div>


            <div class="identity-item reveal">

                <h3>
                    Continuous Improvement
                </h3>

                <p>
                    I continue learning and improving my
                    bookkeeping knowledge and skills.
                </p>

            </div>


            <div class="identity-item reveal">

                <h3>
                    Professionalism
                </h3>

                <p>
                    I approach every responsibility with
                    discipline, respect, and care.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- ==========================================================
     WHY WORK WITH ME
=========================================================== -->

<section id="why" class="why-section">

    <div class="container">

        <div class="section-header reveal">

            <div class="eyebrow">
                Why Choose Me
            </div>

            <h2>
                Why Work With Me?
            </h2>

            <p>

                I believe quality bookkeeping is built on
                professionalism, strong work ethics, and
                reliable results.

            </p>

        </div>


        <div class="three-pillars">


            <div class="pillar reveal">

                <div class="pillar-number">
                    01
                </div>

                <h3>
                    Professionalism
                </h3>

                <p>

                    I communicate clearly, respect deadlines,
                    and handle every task with a professional
                    attitude.

                </p>

            </div>


            <div class="pillar reveal">

                <div class="pillar-number">
                    02
                </div>

                <h3>
                    Work Ethics
                </h3>

                <p>

                    I am committed to being honest, responsible,
                    disciplined, and consistent in my work.

                </p>

            </div>


            <div class="pillar reveal">

                <div class="pillar-number">
                    03
                </div>

                <h3>
                    Quality Results
                </h3>

                <p>

                    I carefully review my work to provide
                    accurate, complete, organized, and
                    reliable financial records.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- ==========================================================
     CORE SKILLS
=========================================================== -->

<section id="skills" class="white-section">

    <div class="container">

        <div class="section-header reveal">

            <div class="eyebrow">
                Expertise
            </div>

            <h2>
                Core Skills & Expertise
            </h2>

            <p>

                Practical bookkeeping skills designed to keep
                financial information accurate and organized.

            </p>

        </div>


        <div class="skills-grid">


            <div class="skill reveal">

                <h3>
                    Bookkeeping
                </h3>

                <p>
                    Maintaining accurate and up-to-date
                    financial records.
                </p>

            </div>


            <div class="skill reveal">

                <h3>
                    Bank Reconciliation
                </h3>

                <p>
                    Matching bank transactions and
                    identifying discrepancies.
                </p>

            </div>


            <div class="skill reveal">

                <h3>
                    Payroll Processing
                </h3>

                <p>
                    Processing payroll and maintaining
                    accurate payroll records.
                </p>

            </div>


            <div class="skill reveal">

                <h3>
                    Xero
                </h3>

                <p>
                    Recording transactions and reconciling
                    accounts using Xero.
                </p>

            </div>


            <div class="skill reveal">

                <h3>
                    Tax Adjustments
                </h3>

                <p>
                    Recording and reviewing necessary
                    account adjustments.
                </p>

            </div>


            <div class="skill reveal">

                <h3>
                    Pre-Audit Preparation
                </h3>

                <p>
                    Organizing financial records and
                    supporting documents.
                </p>

            </div>


            <div class="skill reveal">

                <h3>
                    Financial Records
                </h3>

                <p>
                    Keeping financial information organized
                    and easy to review.
                </p>

            </div>


            <div class="skill reveal">

                <h3>
                    Attention to Detail
                </h3>

                <p>
                    Carefully checking financial information
                    to reduce errors.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- ==========================================================
     ACCOUNTING CYCLE
=========================================================== -->

<section id="process">

    <div class="container">

        <div class="section-header reveal">

            <div class="eyebrow">
                My Working Process
            </div>

            <h2>
                The Accounting Cycle
            </h2>

            <p>

                From transactions to financial reports,
                I follow a structured process to maintain
                accurate records.

            </p>

        </div>


        <div class="cycle">


            <div class="cycle-step reveal">

                <div class="cycle-number">
                    01 · IDENTIFY
                </div>

                <h3>
                    Identify Transactions
                </h3>

                <p>
                    Review sales, purchases, expenses,
                    payroll, and payments.
                </p>

            </div>


            <div class="cycle-step reveal">

                <div class="cycle-number">
                    02 · ORGANIZE
                </div>

                <h3>
                    Collect Documents
                </h3>

                <p>
                    Organize invoices, receipts, bank
                    statements, and supporting documents.
                </p>

            </div>


            <div class="cycle-step reveal">

                <div class="cycle-number">
                    03 · RECORD
                </div>

                <h3>
                    Record Transactions
                </h3>

                <p>
                    Accurately record transactions in
                    the accounting system.
                </p>

            </div>


            <div class="cycle-step reveal">

                <div class="cycle-number">
                    04 · RECONCILE
                </div>

                <h3>
                    Reconcile Accounts
                </h3>

                <p>
                    Compare accounting records with
                    bank statements.
                </p>

            </div>


            <div class="cycle-step reveal">

                <div class="cycle-number">
                    05 · ADJUST
                </div>

                <h3>
                    Make Adjustments
                </h3>

                <p>
                    Record necessary adjustments to
                    keep accounts accurate.
                </p>

            </div>


            <div class="cycle-step reveal">

                <div class="cycle-number">
                    06 · REVIEW
                </div>

                <h3>
                    Review & Verify
                </h3>

                <p>
                    Check for errors, missing transactions,
                    and unusual balances.
                </p>

            </div>


            <div class="cycle-step reveal">

                <div class="cycle-number">
                    07 · REPORT
                </div>

                <h3>
                    Prepare Reports
                </h3>

                <p>
                    Prepare reliable financial information
                    for business decisions.
                </p>

            </div>


            <div class="cycle-step reveal">

                <div class="cycle-number">
                    08 · CLOSE
                </div>

                <h3>
                    Close & Maintain
                </h3>

                <p>
                    Complete the period and maintain
                    organized records.
                </p>

            </div>

        </div>


        <div class="cycle-flow reveal">

            RECORD
            →
            RECONCILE
            →
            ADJUST
            →
            REVIEW
            →
            REPORT
            →
            MAINTAIN

        </div>

    </div>

</section>



<!-- ==========================================================
     FUTURE GOALS
=========================================================== -->

<section id="goals" class="white-section">

    <div class="container">

        <div class="section-header reveal">

            <div class="eyebrow">
                Looking Ahead
            </div>

            <h2>
                Future Goals
            </h2>

            <p>

                Growing as a professional and creating
                greater value for the businesses I support.

            </p>

        </div>


        <div class="goals-grid">


            <div class="goal reveal">

                <h3>
                    Continuous Learning
                </h3>

                <p>
                    Continue developing my bookkeeping and
                    accounting knowledge.
                </p>

            </div>


            <div class="goal reveal">

                <h3>
                    Expand Technical Skills
                </h3>

                <p>
                    Improve my skills in Xero, accounting
                    software, financial reporting, and
                    digital bookkeeping tools.
                </p>

            </div>


            <div class="goal reveal">

                <h3>
                    Stay Updated
                </h3>

                <p>
                    Keep up with changes in accounting
                    practices, tax requirements, and
                    industry standards.
                </p>

            </div>


            <div class="goal reveal">

                <h3>
                    Deliver Better Results
                </h3>

                <p>
                    Improve my processes to provide more
                    accurate and efficient bookkeeping.
                </p>

            </div>


            <div class="goal reveal">

                <h3>
                    Build Long-Term Relationships
                </h3>

                <p>
                    Develop professional relationships
                    based on trust and quality service.
                </p>

            </div>


            <div class="goal reveal">

                <h3>
                    Grow With the Business
                </h3>

                <p>
                    Become a dependable bookkeeping partner
                    who adds value to the business.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- ==========================================================
     VISION
=========================================================== -->

<section>

    <div class="container">

        <div class="vision reveal">

            <div class="eyebrow">
                My Vision
            </div>

            <h2>
                Learn → Improve → Deliver → Grow
            </h2>

            <p>

                To continuously grow, improve, and become
                a trusted professional who delivers accuracy,
                quality, and value.

            </p>

        </div>

    </div>

</section>



<!-- ==========================================================
     CONTACT
=========================================================== -->

<section id="contact" class="contact-section">

    <div class="container">

        <div class="section-header reveal">

            <div class="eyebrow">
                Let's Connect
            </div>

            <h2>
                Let's Work Together
            </h2>

            <p>

                Need reliable bookkeeping support?
                I would be glad to discuss how I can help.

            </p>

        </div>


        <div class="contact-grid">


            <div class="contact-card reveal">

                <strong>
                    Email
                </strong>

                <span>
                    <?= htmlspecialchars($email) ?> / Contact # 63+ 9693596676
                </span>

            </div>


            <div class="contact-card reveal">

                <strong>
                    Experience
                </strong>

                <span>
                    <?= htmlspecialchars($experience) ?>
                    in Bookkeeping
                </span>

            </div>


            <div class="contact-card reveal">

                <strong>
                    Specialization
                </strong>

                <span>
                    Bookkeeping · Xero · Quickbooks · Bank Reconciliation
                    · Payroll
                </span>

            </div>


            <div class="contact-card reveal">

                <strong>
                    Availability
                </strong>

                <span>
                    Open to professional bookkeeping opportunities
                </span>

            </div>

        </div>


        <div
            class="vision reveal"
            style="margin-top:30px;">

            <div class="eyebrow">
                Professional Bookkeeping Support
            </div>

            <h2>
                Accurate Books. Reliable Support.
            </h2>

            <p>

                Let's build a professional working relationship
                based on accuracy, integrity, and trust.

            </p>


            <div class="buttons"
                 style="justify-content:center;">

                <a
                    href="mailto:<?= htmlspecialchars($email) ?>"
                    class="btn btn-outline"
                    style="
                        background:white;
                        color:#102a43;
                        border-color:white;
                    ">

                    Email Me

                </a>

            </div>

        </div>

    </div>

</section>



<!-- ==========================================================
     FOOTER
=========================================================== -->

<footer>

    <div class="container footer-inner">

        <div class="footer-brand">

            <?= htmlspecialchars($name) ?>

            · Professional Bookkeeper

        </div>


        <div>

            Accuracy in Every Transaction.
            Trust in Every Number.

        </div>


        <div>

            © <?= date("Y") ?> All Rights Reserved.

        </div>

    </div>

</footer>



<!-- BACK TO TOP -->

<button id="backToTop">
    ↑
</button>



<!-- ==========================================================
     JAVASCRIPT
=========================================================== -->

<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* ==========================================
           MOBILE MENU
        ========================================== */

        const menuButton =
            document.getElementById("menuButton");

        const navLinks =
            document.getElementById("navLinks");


        menuButton.addEventListener(
            "click",
            function () {

                navLinks.classList.toggle("open");

            }
        );


        /* Close mobile menu when clicking a link */

        document
            .querySelectorAll(".nav-links a")
            .forEach(function (link) {

                link.addEventListener(
                    "click",
                    function () {

                        navLinks.classList.remove("open");

                    }
                );

            });


        /* ==========================================
           SCROLL REVEAL
        ========================================== */

        const observer =
            new IntersectionObserver(

                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target
                                    .classList
                                    .add("show");

                            }

                        }
                    );

                },

                {
                    threshold: 0.12
                }

            );


        document
            .querySelectorAll(".reveal")
            .forEach(function (element) {

                observer.observe(element);

            });


        /* ==========================================
           ACTIVE NAVIGATION
        ========================================== */

        const sections =
            document.querySelectorAll(
                "header[id], section[id]"
            );

        const navItems =
            document.querySelectorAll(
                ".nav-links a"
            );


        window.addEventListener(
            "scroll",
            function () {

                let current = "";


                sections.forEach(
                    function (section) {

                        const sectionTop =
                            section.offsetTop - 150;

                        if (
                            window.scrollY >=
                            sectionTop
                        ) {

                            current =
                                section.getAttribute(
                                    "id"
                                );

                        }

                    }
                );


                navItems.forEach(
                    function (link) {

                        link.classList.remove(
                            "active"
                        );


                        const href =
                            link.getAttribute("href");


                        if (
                            href === "#" + current
                        ) {

                            link.classList.add(
                                "active"
                            );

                        }

                    }
                );

            }
        );


        /* ==========================================
           BACK TO TOP
        ========================================== */

        const backToTop =
            document.getElementById(
                "backToTop"
            );


        window.addEventListener(
            "scroll",
            function () {

                if (
                    window.scrollY > 500
                ) {

                    backToTop.classList.add(
                        "show"
                    );

                } else {

                    backToTop.classList.remove(
                        "show"
                    );

                }

            }
        );


        backToTop.addEventListener(
            "click",
            function () {

                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });

            }
        );


    }
);

</script>


</body>
</html>