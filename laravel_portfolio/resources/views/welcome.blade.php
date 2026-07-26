@php
    $profile = [
        'name' => 'Chester Francisco',
        'role' => 'Frontend Developer',
        'location' => 'Taguig City, Philippines',
        'email' => 'chestergfrancisco@gmail.com',
        'summary' => 'I design and build responsive web systems, dashboards, and digital platforms that turn complex workflows into clear, usable experiences.',
        'about' => 'My portfolio reflects my passion for learning, solving problems, and continuously improving the way digital products look, feel, and work.',
        'links' => [
            ['label' => 'GitHub', 'url' => 'https://github.com/chesterfrancisco'],
            ['label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/chester-francisco-b2415a191/'],
            ['label' => 'Facebook', 'url' => 'https://web.facebook.com/chester.francisco.23'],
            ['label' => 'Email', 'url' => 'mailto:chestergfrancisco@gmail.com'],
        ],
    ];

    $stats = [
        ['value' => '4+', 'label' => 'Years Experience'],
        ['value' => '6+', 'label' => 'Projects Completed'],
        ['value' => '10+', 'label' => 'Technologies Used'],
    ];

    $projects = [
        [
            'title' => 'NSTW Website',
            'category' => 'Government Platform / National Event Portal / Science Communication / Public Information',
            'type' => 'National Event Portal',
            'description' => 'The official website of the National Science, Technology, and Innovation Week (NSTW), built as the primary digital platform for promoting Philippine science, technology, research, innovations, and nationwide event activities.',
            'impact' => 'The official website of the National Science, Technology, and Innovation Week (NSTW), serving as the primary digital platform for showcasing Philippine science, technology, research, innovations, and nationwide S&T activities. Built to provide the public with centralized access to event information, regional celebrations, news, videos, featured technologies, and downloadable resources while promoting DOST\'s mission of bringing science closer to every Filipino.',
            'role' => 'Lead Web Developer & UI/UX Developer',
            'role_description' => 'Responsible for front-end enhancements, responsive interface improvements, performance optimization, content structure refinement, bug fixes, analytics integration, and continuous maintenance of the official NSTW website.',
            'features' => [
                'Official National Science, Technology, and Innovation Week website',
                'Nationwide RSTW and NSTW event information',
                'Latest science and technology news and announcements',
                'Featured videos and multimedia content',
                'Interactive event schedules and activity information',
                'Science and technology showcase pages',
                'Mobile-responsive and cross-browser compatible interface',
                'Search engine optimized public information platform',
            ],
            'stack' => ['Laravel', 'PHP', 'HTML', 'CSS', 'JavaScript'],
            'cover' => 'nstw/nstw-home.png',
            'screenshots' => [
                ['title' => 'Home', 'src' => 'nstw/nstw-home.png'],
                ['title' => 'About', 'src' => 'nstw/nstw-about.png'],
                ['title' => 'Regional STW Highlights', 'src' => 'nstw/nstw-video.png'],
            ],
            'live' => 'https://nstw.dost.gov.ph/',
            'case' => '#projects',
        ],
        [
            'title' => 'DOSTv Website',
            'category' => 'Government Media Platform / Video Streaming / Science Communication / Cross-Platform',
            'type' => 'Video Streaming Platform',
            'description' => 'A digital media platform designed to bring Filipino science, technology, research, innovations, documentaries, vodcasts, and educational content closer to the public.',
            'impact' => 'Built as a modern streaming platform, DOSTv enables users to discover, watch, and explore science-driven multimedia experiences across web and mobile devices while promoting science communication and public engagement.',
            'role' => 'UI/UX Designer & Front-End Developer',
            'role_description' => 'Responsible for redesigning the user interface, improving user experience and navigation, developing responsive front-end components, optimizing accessibility and performance, and collaborating with the development team to deliver a modern, cross-platform digital media experience.',
            'features' => [
                'Responsive video streaming platform',
                'Featured episodes, documentaries, and vodcasts',
                'Category-based content browsing',
                'Searchable multimedia library',
                'Video player with episode details',
                'Featured banners and promotional sections',
                'Latest releases and recommended content',
                'Mobile-first responsive interface',
                'Android and iOS companion applications',
                'Google Analytics integration for audience insights',
                'SEO-optimized public media platform',
                'Modern UI/UX focused on accessibility and user engagement',
            ],
            'stack' => ['Laravel', 'React', 'Tailwind CSS', 'MySQL', 'REST API', 'Vite', 'Figma'],
            'cover' => 'dostv/dostv-home.png',
            'screenshots' => [
                ['title' => 'Homepage', 'src' => 'dostv/dostv-home.png'],
                ['title' => 'Video Detail', 'src' => 'dostv/dostv-video.png'],
                ['title' => 'Mobile Experience', 'src' => 'dostv/dostv-mobile.png'],
            ],
            'live' => 'https://dostv.ph/',
            'case' => '#projects',
        ],
        [
            'title' => 'Rewards and Recognition System',
            'category' => 'Government HR System / Workflow Automation / Enterprise Application / Internal Operations',
            'type' => 'HR System',
            'description' => 'A web-based enterprise application designed to streamline the nomination, evaluation, approval, and management of employee recognition programs under PRAISE.',
            'impact' => 'The system digitizes traditionally paper-based workflows by providing a centralized platform for employee nominations, committee evaluations, approval processes, and historical award records, improving transparency, efficiency, and overall administrative operations.',
            'role' => 'Full-stack Developer',
            'role_description' => 'Responsible for developing the system workflow, user interfaces, back-end logic, access controls, reporting tools, and core features that support nomination, evaluation, approval, and award history management.',
            'features' => [
                'Employee nomination management',
                'PRAISE award categories and criteria',
                'Multi-level approval workflow',
                'Committee evaluation and scoring',
                'Nominee profile and supporting document management',
                'Role-based access control',
                'Administrative dashboard and analytics',
                'Award history and nomination tracking',
                'Search, filtering, and reporting',
                'Printable reports and export functionality',
                'Responsive interface for desktop and mobile',
                'Secure authentication and session management',
            ],
            'stack' => ['Laravel', 'Vue.js', 'PHP', 'MySQL', 'HTML5', 'CSS3', 'JavaScript (ES6+)', 'Bootstrap', 'Axios', 'REST API'],
            'cover' => 'rewards/rewards-home.png',
            'screenshots' => [
                ['title' => 'Dashboard', 'src' => 'rewards/rewards-home.png'],
                ['title' => 'Libraries', 'src' => 'rewards/rewards-libraries.png'],
                ['title' => 'Nomination Form', 'src' => 'rewards/rewards-nominate.png'],
            ],
            'live' => null,
            'case' => '#projects',
        ],
    ];

    $stack = ['HTML5', 'CSS3', 'JavaScript', 'Laravel', 'PHP', 'Blade', 'MySQL', 'Node.js', 'Vite', 'Tailwind', 'OpenAI API', 'Figma'];

    $uiProjects = [
        [
            'title' => 'InScite Dashboard',
            'tag' => 'Data Analytics / Business Intelligence / Executive Dashboard',
            'description' => 'An interactive analytics dashboard designed to transform complex datasets into meaningful insights through real-time visualizations, performance metrics, and decision-support tools.',
            'image' => 'uiux/inscite.png',
            'url' => 'https://pull-wing-00399825.figma.site/',
        ],
        [
            'title' => 'Hain Express',
            'tag' => 'Food Delivery / Mobile UX / Ordering Platform',
            'description' => 'A modern food ordering and delivery application prototype that streamlines restaurant discovery, online ordering, real-time order tracking, and customer checkout.',
            'image' => 'uiux/hain-express.png',
            'url' => 'https://www.figma.com/proto/DI3m1rtkEInPL2Kh7FuZdt/Hain-Express--Wireframes-?node-id=0-1&t=D2u8QlLoTFnKBZDS-1',
        ],
        [
            'title' => 'DOSTv Interface',
            'tag' => 'UI/UX Design / Video Streaming / Media Platform',
            'description' => 'A modern interface prototype focused on improving content discovery, video streaming experience, accessibility, and responsive navigation across desktop and mobile devices.',
            'image' => 'uiux/dostv.png',
            'url' => 'https://www.figma.com/proto/MwUdvN1ERMVopJJOxLfHwe/DOSTv-Interface?node-id=2-4&starting-point-node-id=2%3A4&t=sAQrHhVFdpCBBEE6-1',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $profile['name'] }} portfolio for hackathon submission.">
    <title>{{ $profile['name'] }} - Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500;600;700&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #fbfbfa;
            --ink: #141414;
            --muted: #6d6d6d;
            --soft: #f2f2ef;
            --line: #e2e2df;
            --panel: #ffffff;
            --accent: #4e638f;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; font-size: 17px; }
        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: "Inter", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.65;
        }
        body.modal-open { overflow: hidden; }

        a { color: inherit; text-decoration: none; }
        button { font: inherit; }
        .mono { font-family: "IBM Plex Mono", "SFMono-Regular", Consolas, "Liberation Mono", monospace; letter-spacing: 0; }
        .lead,
        .about-grid p,
        .project-copy p,
        .modal-impact,
        .feature-grid li,
        .ui-card h3,
        .footer {
            text-align: justify;
            text-justify: inter-word;
        }
        .shell { width: min(1120px, calc(100% - 40px)); margin: 0 auto; }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(251, 251, 250, .9);
            border-bottom: 1px solid var(--line);
            backdrop-filter: blur(16px);
        }
        .nav {
            min-height: 72px;
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            gap: 18px;
        }
        .brand { font-size: .86rem; font-weight: 800; }
        .menu { display: flex; gap: 22px; justify-content: center; flex-wrap: wrap; }
        .menu a {
            color: #6f6f6f;
            font-size: .68rem;
            font-weight: 800;
            text-transform: uppercase;
        }
        .menu a:hover { color: var(--ink); }

        .hero {
            padding: 82px 0 54px;
            display: grid;
            grid-template-columns: minmax(260px, 380px) 1fr;
            align-items: center;
            gap: 58px;
        }
        .portrait {
            aspect-ratio: 4 / 5;
            border-radius: 6px;
            overflow: hidden;
                background:
                linear-gradient(180deg, rgba(0,0,0,.08), rgba(0,0,0,.24)),
                url('photo-me.jpg') center / cover;
            position: relative;
            box-shadow: inset 0 0 0 1px rgba(255,255,255,.08);
        }
        .portrait::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 55%, rgba(0,0,0,.34));
        }

        h1 {
            margin: 0 0 18px;
            font-size: clamp(50px, 6.3vw, 84px);
            line-height: 1;
            font-weight: 500;
        }
        .lead { max-width: 730px; color: var(--muted); font-size: 1.08rem; margin: 0 0 18px; }
        .links { display: flex; gap: 20px; flex-wrap: wrap; margin-top: 28px; }
        .links a, .section-link {
            color: #6f6f6f;
            font-size: .72rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .stats {
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
        .stat { padding: 34px 28px; border-right: 1px solid var(--line); }
        .stat:last-child { border-right: 0; }
        .stat strong { display: block; font-size: 2.35rem; line-height: 1; font-weight: 500; }
        .stat span { color: #7e7e7e; font-size: .72rem; font-weight: 900; text-transform: uppercase; }

        section { padding: 78px 0; }
        .section-head {
            border-bottom: 1px solid var(--line);
            padding-bottom: 20px;
            margin-bottom: 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }
        .section-kicker {
            color: #8d8d8d;
            font-size: .74rem;
            font-weight: 900;
            text-transform: lowercase;
        }

        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 34px; }
        .about-grid p { margin: 0; color: #5f5f5f; font-size: 1.18rem; }
        .about-copy {
            max-width: 1080px;
        }
        .about-copy h2 {
            margin: 0 0 24px;
            font-size: clamp(28px, 3vw, 36px);
            line-height: 1.1;
            font-weight: 700;
        }
        .about-copy p {
            margin: 0 0 28px;
            color: #202020;
            font-size: clamp(.96rem, 1.18vw, 1.08rem);
            line-height: 1.78;
            text-align: justify;
            text-justify: inter-word;
        }
        .about-copy blockquote {
            margin: 42px 0 0;
            border-left: 8px solid #d8d8d8;
            padding: 4px 0 4px 30px;
            color: #171717;
            font-size: clamp(1rem, 1.25vw, 1.12rem);
            line-height: 1.65;
            font-weight: 700;
            text-align: justify;
            text-justify: inter-word;
        }

        .carousel-wrap {
            display: grid;
            grid-template-columns: 42px 1fr 42px;
            gap: 20px;
            align-items: center;
        }
        .carousel-btn {
            height: 330px;
            border: 0;
            border-radius: 6px;
            background: var(--accent);
            color: #fff;
            cursor: pointer;
            font-size: 1.45rem;
            transition: transform .18s ease, background .18s ease;
        }
        .carousel-btn:hover { transform: translateY(-2px); background: #3f527a; }
        .project-viewport { overflow: hidden; border-radius: 7px; }
        .project-track { display: flex; transition: transform .35s ease; }
        .project-slide { min-width: 100%; }
        .project-card {
            width: 100%;
            min-height: 390px;
            border: 0;
            border-radius: 7px;
            background: #070707;
            color: #fff;
            overflow: hidden;
            position: relative;
            padding: 48px;
            display: grid;
            align-content: end;
            text-align: left;
            cursor: pointer;
            box-shadow: inset 0 0 0 1px rgba(255,255,255,.08);
        }
        .project-card.has-cover {
            background:
                linear-gradient(90deg, rgba(8,28,62,.96) 0%, rgba(17,56,105,.88) 45%, rgba(94,155,207,.42) 100%),
                var(--project-cover) center / cover;
        }
        .project-card.has-cover::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 82% 26%, rgba(221,241,255,.22), transparent 24%),
                linear-gradient(180deg, rgba(235,247,255,.08), rgba(10,31,65,.76));
            backdrop-filter: blur(1px);
            opacity: .9;
        }
        .project-card.has-cover::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(5,20,45,.92), rgba(12,42,82,.76) 44%, rgba(74,137,194,.2) 78%, rgba(222,242,255,.08)),
                linear-gradient(180deg, rgba(0,0,0,.1), rgba(0,0,0,.38));
        }
        .project-card.has-cover .project-copy {
            max-width: 760px;
            padding: 26px 28px;
            border: 1px solid rgba(255,255,255,.16);
            border-radius: 8px;
            background: linear-gradient(135deg, rgba(4,18,42,.74), rgba(13,42,78,.48));
            box-shadow: 0 22px 60px rgba(0,0,0,.24);
            backdrop-filter: blur(3px);
        }
        .project-card.has-cover .section-kicker {
            color: rgba(232,243,255,.86);
        }
        .project-card.has-cover .project-copy h3,
        .project-card.has-cover .project-copy p {
            color: #fff;
            text-shadow: 0 2px 18px rgba(0,0,0,.42);
        }
        .project-card.has-cover .chip {
            border-color: rgba(255,255,255,.25);
            background: rgba(255,255,255,.95);
            color: #12335f;
        }
        .project-card.has-cover .open-hint {
            border-color: rgba(255,255,255,.34);
            background: rgba(255,255,255,.08);
            color: #f4f9ff;
        }
        .project-card:hover .project-visual { transform: translateY(-4px) scale(1.02); }
        .project-card:hover .open-hint { color: #fff; border-color: #555; }
        .project-visual {
            position: absolute;
            right: 44px;
            top: 42px;
            width: min(42%, 370px);
            height: 250px;
            border: 1px solid #292929;
            border-radius: 22px;
            background:
                linear-gradient(180deg, rgba(255,255,255,.05), transparent),
                repeating-linear-gradient(0deg, #111 0 20px, #181818 20px 21px);
            transition: transform .22s ease;
        }
        .project-visual::before {
            content: "";
            position: absolute;
            left: -80px;
            top: 72px;
            width: 300px;
            height: 132px;
            border: 1px solid #292929;
            border-radius: 9px;
            background: linear-gradient(145deg, #151515, #050505);
            box-shadow: 0 22px 50px rgba(0,0,0,.3);
        }
        .project-card.has-cover .project-visual {
            display: none;
        }
        .project-copy { position: relative; z-index: 1; max-width: 650px; }
        .project-copy h3 { margin: 0 0 10px; font-size: clamp(40px, 5vw, 58px); line-height: 1; font-weight: 500; }
        .project-copy p { color: #d4d4d4; margin: 0 0 20px; font-size: 1.02rem; }
        .chips { display: flex; flex-wrap: wrap; gap: 9px; }
        .chip {
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 8px 11px;
            color: #666;
            font-size: .7rem;
            font-weight: 900;
            text-transform: uppercase;
            background: #fff;
        }
        .project-card .chip { border-color: #3a3a3a; background: #111; color: #d8d8d8; }
        .open-hint {
            display: inline-flex;
            width: fit-content;
            margin-top: 22px;
            border: 1px solid #333;
            border-radius: 999px;
            padding: 9px 13px;
            color: #aaa;
            font-size: .72rem;
            font-weight: 900;
            text-transform: uppercase;
        }
        .carousel-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 18px;
            margin-top: 18px;
            color: #777;
            font-size: .8rem;
        }
        .dots { display: flex; gap: 8px; }
        .dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            border: 0;
            background: #d1d1cf;
            cursor: pointer;
        }
        .dot.active { background: #171717; }

        .project-list, .timeline { border-top: 1px solid var(--line); }
        .row {
            display: grid;
            grid-template-columns: 110px 1fr 220px;
            gap: 22px;
            padding: 22px 0;
            border-bottom: 1px solid var(--line);
            align-items: center;
        }
        .row small, .row span { color: #858585; font-size: .78rem; font-weight: 800; }
        .row strong { font-size: 1.08rem; }
        .project-row { cursor: pointer; }
        .project-row:hover strong { text-decoration: underline; text-underline-offset: 5px; }

        .stack-list { display: flex; flex-wrap: wrap; gap: 10px; }
        .ui-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .ui-card {
            border: 1px solid var(--line);
            border-radius: 6px;
            background: var(--panel);
            overflow: hidden;
            min-height: 260px;
            display: grid;
            grid-template-rows: 1fr auto;
            position: relative;
            color: inherit;
            transition: transform .18s ease, border-color .18s ease, box-shadow .18s ease;
        }
        .ui-card:hover {
            transform: translateY(-3px);
            border-color: #c7c7c2;
            box-shadow: 0 18px 48px rgba(0,0,0,.08);
        }
        .ui-preview {
            min-height: 172px;
            background:
                linear-gradient(180deg, rgba(255,255,255,.1), rgba(0,0,0,.08)),
                var(--ui-image) top center / cover;
            border-bottom: 1px solid var(--line);
            position: relative;
        }
        .ui-preview::after {
            content: "Open Design";
            position: absolute;
            right: 12px;
            bottom: 12px;
            border-radius: 999px;
            padding: 7px 10px;
            background: rgba(0,0,0,.72);
            color: #fff;
            font-size: .62rem;
            font-weight: 900;
            text-transform: uppercase;
            opacity: 0;
            transition: opacity .18s ease;
        }
        .ui-card:hover .ui-preview::after {
            opacity: 1;
        }
        .ui-body {
            padding: 18px;
        }
        .ui-card h3 {
            margin: 0 0 10px;
            font-size: 1.06rem;
            line-height: 1.28;
        }
        .ui-tag {
            margin: 0;
            color: #888;
            font-size: .72rem;
            font-weight: 900;
            text-transform: uppercase;
        }
        .ui-description {
            margin: 12px 0 0;
            color: #666;
            font-size: .86rem;
            line-height: 1.55;
            text-transform: none;
            font-weight: 500;
        }

        .modal {
            position: fixed;
            inset: 0;
            z-index: 100;
            display: none;
            padding: 48px 20px;
            background: rgba(15, 15, 15, .35);
            backdrop-filter: blur(7px);
            overflow-y: auto;
        }
        .modal.active { display: block; }
        .modal-panel {
            width: min(1220px, 100%);
            margin: 0 auto;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 12px;
            box-shadow: 0 30px 90px rgba(0,0,0,.24);
            position: relative;
            overflow: hidden;
        }
        .modal-close {
            position: sticky;
            top: 18px;
            float: right;
            z-index: 2;
            width: 58px;
            height: 58px;
            margin: 24px 24px 0 0;
            border: 1px solid var(--line);
            border-radius: 9px;
            background: #fff;
            color: #777;
            cursor: pointer;
            font-size: 1.7rem;
            line-height: 1;
        }
        .modal-close:hover { color: #111; border-color: #cfcfca; }
        .modal-content { padding: 68px 78px 78px; }
        .modal-kicker {
            color: #8a8a8a;
            font-size: .82rem;
            font-weight: 900;
            text-transform: uppercase;
        }
        .modal-title {
            margin: 16px 0 18px;
            font-size: clamp(36px, 5vw, 64px);
            line-height: 1;
            font-weight: 500;
        }
        .modal-title a:hover {
            text-decoration: underline;
            text-underline-offset: 8px;
            text-decoration-thickness: 2px;
        }
        .modal-impact {
            max-width: 860px;
            color: #575757;
            font-size: 1rem;
            line-height: 1.72;
            margin: 0 0 28px;
        }
        .modal-role {
            max-width: 860px;
            margin: -10px 0 30px;
            color: #575757;
            font-size: .96rem;
            line-height: 1.7;
        }
        .modal-role strong {
            color: #111;
            display: block;
            font-size: .86rem;
            margin-bottom: 6px;
            text-transform: uppercase;
        }
        .modal-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-bottom: 42px; }
        .action-btn {
            border: 1px solid #171717;
            border-radius: 999px;
            padding: 11px 16px;
            background: #111;
            color: #fff;
            font-size: .72rem;
            font-weight: 900;
            text-transform: uppercase;
        }
        .action-btn.secondary { background: #fff; color: #111; border-color: var(--line); }
        .modal-section {
            border-top: 1px solid var(--line);
            padding-top: 34px;
            margin-top: 34px;
        }
        .modal-section h3 {
            margin: 0 0 22px;
            font-size: 1.35rem;
            letter-spacing: 0;
            text-transform: uppercase;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px 28px;
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .feature-grid li {
            color: #5f5f5f;
            font-size: 1.02rem;
            padding-left: 22px;
            position: relative;
        }
        .feature-grid li::before {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #111;
            position: absolute;
            left: 0;
            top: .72em;
        }
        .modal-stack { display: flex; flex-wrap: wrap; gap: 10px; }
        .shot-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
        .shot {
            min-height: 170px;
            border: 1px solid #222;
            border-radius: 8px;
            background:
                linear-gradient(145deg, rgba(255,255,255,.08), transparent 42%),
                repeating-linear-gradient(0deg, #111 0 20px, #181818 20px 21px),
                #080808;
            color: #fff;
            padding: 18px;
            display: flex;
            align-items: end;
            font-weight: 800;
        }
        .shot-button {
            width: 100%;
            min-height: 190px;
            border: 1px solid #222;
            border-radius: 8px;
            overflow: hidden;
            padding: 0;
            background: #080808;
            color: #fff;
            cursor: pointer;
            position: relative;
            text-align: left;
        }
        .shot-button img {
            width: 100%;
            height: 100%;
            min-height: 190px;
            object-fit: cover;
            opacity: .82;
            transition: transform .2s ease, opacity .2s ease;
        }
        .shot-button:hover img {
            transform: scale(1.03);
            opacity: 1;
        }
        .shot-label {
            position: absolute;
            left: 14px;
            right: 14px;
            bottom: 14px;
            border-radius: 999px;
            padding: 8px 12px;
            background: rgba(0,0,0,.72);
            color: #fff;
            font-size: .72rem;
            font-weight: 800;
            text-transform: uppercase;
        }
        .lightbox {
            position: fixed;
            inset: 0;
            z-index: 160;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 26px;
            background: rgba(0,0,0,.78);
            backdrop-filter: blur(8px);
        }
        .lightbox.active { display: flex; }
        .lightbox-panel {
            width: min(1180px, 100%);
            max-height: 92vh;
            position: relative;
        }
        .lightbox img {
            width: 100%;
            max-height: 92vh;
            object-fit: contain;
            border-radius: 8px;
            background: #111;
            box-shadow: 0 26px 80px rgba(0,0,0,.4);
        }
        .lightbox-close {
            position: absolute;
            right: 14px;
            top: 14px;
            width: 48px;
            height: 48px;
            border: 1px solid rgba(255,255,255,.28);
            border-radius: 8px;
            background: rgba(0,0,0,.76);
            color: #fff;
            cursor: pointer;
            font-size: 1.5rem;
            line-height: 1;
        }

        .footer {
            border-top: 1px solid var(--line);
            padding: 36px 0;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 22px;
            color: #6f6f6f;
            font-size: .9rem;
        }
        .footer strong { color: var(--ink); display: block; margin-bottom: 6px; }

        @media (max-width: 860px) {
            html { font-size: 16px; }
            .nav { grid-template-columns: 1fr auto; }
            .menu { grid-column: 1 / -1; justify-content: flex-start; gap: 14px; padding-bottom: 16px; }
            .hero, .about-grid, .ui-grid { grid-template-columns: 1fr; }
            .hero { padding-top: 44px; gap: 34px; }
            .portrait { max-width: 430px; width: 100%; }
            .stats { grid-template-columns: 1fr; }
            .stat { border-right: 0; border-bottom: 1px solid var(--line); }
            .stat:last-child { border-bottom: 0; }
            .carousel-wrap { grid-template-columns: 1fr; }
            .carousel-btn { height: 44px; }
            .project-card { min-height: 480px; padding: 30px; }
            .project-visual { width: 72%; right: 20px; top: 26px; opacity: .78; }
            .row { grid-template-columns: 80px 1fr; }
            .row span { grid-column: 2; }
            .feature-grid, .shot-grid { grid-template-columns: 1fr; }
            .modal-content { padding: 58px 28px 38px; }
            .modal-close { width: 48px; height: 48px; margin: 14px 14px 0 0; }
            .footer { grid-template-columns: 1fr; }
        }

        @media (max-width: 520px) {
            .shell { width: min(100% - 28px, 1120px); }
            h1 { font-size: 44px; }
            section { padding: 58px 0; }
            .project-copy h3 { font-size: 36px; }
            .modal { padding: 14px; }
        }
    </style>
</head>
<body>
    <header class="topbar">
        <nav class="shell nav" aria-label="Main navigation">
            <a class="brand mono" href="#home">{{ $profile['name'] }}</a>
            <div class="menu mono">
                <a href="#home">Home/</a>
                <a href="#about">About/</a>
                <a href="#projects">Projects/</a>
                <a href="#stack">Stack/</a>
                <a href="#uiux">UI/UX/</a>
            </div>
            <span aria-hidden="true"></span>
        </nav>
    </header>

    <main id="home" class="shell">
        <div class="hero">
            <div class="portrait" aria-label="Stylized monochrome portrait"></div>
            <div>
                <p class="mono section-kicker">{{ $profile['role'] }}</p>
                <h1 class="mono">{{ $profile['name'] }}</h1>
                <p class="lead">{{ $profile['summary'] }}</p>
                <p class="lead">{{ $profile['about'] }}</p>
                <div class="links mono">
                    @foreach ($profile['links'] as $link)
                        <a href="{{ $link['url'] }}">{{ $link['label'] }}/</a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="stats">
            @foreach ($stats as $stat)
                <div class="stat">
                    <strong class="mono">{{ $stat['value'] }}</strong>
                    <span class="mono">{{ $stat['label'] }}</span>
                </div>
            @endforeach
        </div>

        <section id="about">
            <div class="section-head">
                <span class="mono section-kicker">01 - about me</span>
            </div>
            <div class="about-copy">
                <h2>About Me</h2>
                <p>I started my career as a <strong>graphic designer</strong> in a local automotive and mechanical shop, where I discovered my passion for creating digital solutions through both design and technology. That curiosity eventually led me to pursue a career in Information Technology, where I continuously challenged myself to learn programming, web development, and system design despite coming from a non-traditional path.</p>
                <p>Today, I work as an <strong>Information Technology Officer</strong>, developing digital systems that improve public services and support digital transformation initiatives. Along the way, I earned my master's degree while balancing full-time work, continuously expanding my technical expertise in software development, UI/UX, and emerging technologies.</p>
                <blockquote>"I didn't begin my journey as a programmer. I became one through curiosity, continuous learning, and the belief that technology can create meaningful change."</blockquote>
            </div>
        </section>

        <section id="projects">
            <div class="section-head">
                <span class="mono section-kicker">02 - featured projects</span>
                <a class="section-link mono" href="#stack">View Stack/</a>
            </div>
            <div class="carousel-wrap" aria-label="Featured projects carousel">
                <button class="carousel-btn mono" type="button" data-carousel-prev aria-label="Previous project">&lsaquo;</button>
                <div class="project-viewport">
                    <div class="project-track" data-project-track>
                        @foreach ($projects as $index => $project)
                            <div class="project-slide">
                                <button class="project-card {{ isset($project['cover']) ? 'has-cover' : '' }}" type="button" data-open-project="{{ $index }}" @if (isset($project['cover'])) style="--project-cover: url('{{ $project['cover'] }}');" @endif>
                                    @unless (isset($project['cover']))
                                        <span class="project-visual" aria-hidden="true"></span>
                                    @endunless
                                    <span class="project-copy">
                                        <span class="mono section-kicker">{{ $project['category'] }}</span>
                                        <h3 class="mono">{{ $project['title'] }}</h3>
                                        <p>{{ $project['description'] }}</p>
                                        <span class="chips mono">
                                            @foreach (array_slice($project['stack'], 0, 6) as $tag)
                                                <span class="chip">{{ $tag }}</span>
                                            @endforeach
                                        </span>
                                        <span class="open-hint mono">Click to view details/</span>
                                    </span>
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button class="carousel-btn mono" type="button" data-carousel-next aria-label="Next project">&rsaquo;</button>
            </div>
            <div class="carousel-meta mono">
                <span data-carousel-label>01 / {{ str_pad((string) count($projects), 2, '0', STR_PAD_LEFT) }}</span>
                <span class="dots" data-carousel-dots>
                    @foreach ($projects as $index => $project)
                        <button class="dot {{ $index === 0 ? 'active' : '' }}" type="button" data-carousel-dot="{{ $index }}" aria-label="Go to {{ $project['title'] }}"></button>
                    @endforeach
                </span>
            </div>

            <div class="project-list" style="margin-top: 36px;">
                @foreach ($projects as $index => $project)
                    <article class="row project-row" data-open-project="{{ $index }}">
                        <small class="mono">{{ $project['type'] }}</small>
                        <strong>{{ $project['title'] }}</strong>
                        <span class="mono">{{ implode(' / ', array_slice($project['stack'], 0, 2)) }}</span>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="stack">
            <div class="section-head">
                <span class="mono section-kicker">03 - stack</span>
                <a class="section-link mono" href="#projects">View Projects/</a>
            </div>
            <div class="stack-list mono">
                @foreach ($stack as $tool)
                    <span class="chip">{{ $tool }}</span>
                @endforeach
            </div>
        </section>

        <section id="uiux">
            <div class="section-head">
                <span class="mono section-kicker">04 - ui/ux</span>
                <a class="section-link mono" href="#home">Back Top/</a>
            </div>
            <div class="ui-grid">
                @foreach ($uiProjects as $item)
                    <a class="ui-card" href="{{ $item['url'] }}" target="_blank" rel="noreferrer" style="--ui-image: url('{{ $item['image'] }}');">
                        <span class="ui-preview" aria-hidden="true"></span>
                        <span class="ui-body">
                            <h3>{{ $item['title'] }}</h3>
                            <p class="ui-tag mono">{{ $item['tag'] }}</p>
                            <p class="ui-description">{{ $item['description'] }}</p>
                        </span>
                    </a>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="shell footer">
        <div>
            <strong>Let's build something great.</strong>
        </div>
        <div class="mono">
            {{ $profile['email'] }} /<br>
            {{ $profile['location'] }}
        </div>
        <div class="mono">
            Built with Laravel<br>
            &copy; {{ date('Y') }} {{ $profile['name'] }}
        </div>
    </footer>

    <div class="modal" data-project-modal aria-hidden="true">
        <div class="modal-panel" role="dialog" aria-modal="true" aria-labelledby="modal-title">
            <button class="modal-close" type="button" data-close-modal aria-label="Close project modal">&times;</button>
            <div class="modal-content">
                <p class="modal-kicker mono" data-modal-category></p>
                <h2 class="modal-title mono" id="modal-title">
                    <a data-modal-title-link href="#" target="_blank" rel="noreferrer"></a>
                    <span data-modal-title-text></span>
                </h2>
                <p class="modal-impact" data-modal-impact></p>
                <p class="modal-role" data-modal-role></p>
                <div class="modal-actions mono">
                    <a class="action-btn" data-modal-live href="#" target="_blank" rel="noreferrer">View Live Project/</a>
                    <a class="action-btn secondary" data-modal-case href="#" target="_blank" rel="noreferrer">View Case Study/</a>
                </div>

                <section class="modal-section">
                    <h3 class="mono">Features</h3>
                    <ul class="feature-grid" data-modal-features></ul>
                </section>

                <section class="modal-section">
                    <h3 class="mono">Stack</h3>
                    <div class="modal-stack mono" data-modal-stack></div>
                </section>

                <section class="modal-section">
                    <h3 class="mono">Screenshots</h3>
                    <div class="shot-grid" data-modal-shots></div>
                </section>
            </div>
        </div>
    </div>

    <div class="lightbox" data-lightbox aria-hidden="true">
        <div class="lightbox-panel">
            <button class="lightbox-close" type="button" data-lightbox-close aria-label="Close image preview">&times;</button>
            <img data-lightbox-image src="" alt="">
        </div>
    </div>

    <script>
        const projects = @json($projects);
        const track = document.querySelector('[data-project-track]');
        const label = document.querySelector('[data-carousel-label]');
        const dots = [...document.querySelectorAll('[data-carousel-dot]')];
        const modal = document.querySelector('[data-project-modal]');
        const lightbox = document.querySelector('[data-lightbox]');
        const lightboxImage = document.querySelector('[data-lightbox-image]');
        let currentProject = 0;

        function showProject(index) {
            currentProject = (index + projects.length) % projects.length;
            track.style.transform = `translateX(-${currentProject * 100}%)`;
            label.textContent = `${String(currentProject + 1).padStart(2, '0')} / ${String(projects.length).padStart(2, '0')}`;
            dots.forEach((dot, dotIndex) => dot.classList.toggle('active', dotIndex === currentProject));
        }

        function fillList(selector, items, className) {
            const target = document.querySelector(selector);
            target.innerHTML = '';
            items.forEach((item) => {
                const element = document.createElement(className === 'chip' ? 'span' : 'li');
                element.className = className;
                element.textContent = item;
                target.appendChild(element);
            });
        }

        function openProject(index) {
            const project = projects[index];
            document.querySelector('[data-modal-category]').textContent = project.category;
            const titleLink = document.querySelector('[data-modal-title-link]');
            const titleText = document.querySelector('[data-modal-title-text]');
            titleLink.textContent = '';
            titleText.textContent = '';
            if (project.live) {
                titleLink.textContent = project.title;
                titleLink.href = project.live;
                titleLink.style.display = 'inline';
                titleText.style.display = 'none';
            } else {
                titleText.textContent = project.title;
                titleText.style.display = 'inline';
                titleLink.style.display = 'none';
            }
            document.querySelector('[data-modal-impact]').textContent = project.impact;
            const role = document.querySelector('[data-modal-role]');
            if (project.role) {
                role.innerHTML = `<strong>Role: ${project.role}</strong>${project.role_description || ''}`;
                role.style.display = 'block';
            } else {
                role.innerHTML = '';
                role.style.display = 'none';
            }
            document.querySelector('[data-modal-live]').href = project.live;
            document.querySelector('[data-modal-case]').href = project.case;
            document.querySelector('[data-modal-live]').style.display = !project.live || project.live === '#' ? 'none' : 'inline-flex';
            document.querySelector('[data-modal-case]').style.display = project.case === '#projects' ? 'none' : 'inline-flex';
            fillList('[data-modal-features]', project.features, '');
            fillList('[data-modal-stack]', project.stack, 'chip');

            const shots = document.querySelector('[data-modal-shots]');
            shots.innerHTML = '';
            project.screenshots.forEach((shot) => {
                if (shot.src) {
                    const button = document.createElement('button');
                    button.type = 'button';
                    button.className = 'shot-button';
                    button.innerHTML = `<img src="${shot.src}" alt="${shot.title} screenshot"><span class="shot-label mono">${shot.title}</span>`;
                    button.addEventListener('click', () => openLightbox(shot.src, `${project.title} - ${shot.title}`));
                    shots.appendChild(button);
                } else {
                    const item = document.createElement('div');
                    item.className = 'shot mono';
                    item.textContent = shot.title;
                    shots.appendChild(item);
                }
            });

            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('modal-open');
        }

        function closeModal() {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('modal-open');
        }

        function openLightbox(src, alt) {
            lightboxImage.src = src;
            lightboxImage.alt = alt;
            lightbox.classList.add('active');
            lightbox.setAttribute('aria-hidden', 'false');
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            lightbox.setAttribute('aria-hidden', 'true');
            lightboxImage.src = '';
            lightboxImage.alt = '';
        }

        document.querySelector('[data-carousel-prev]').addEventListener('click', () => showProject(currentProject - 1));
        document.querySelector('[data-carousel-next]').addEventListener('click', () => showProject(currentProject + 1));
        dots.forEach((dot) => dot.addEventListener('click', () => showProject(Number(dot.dataset.carouselDot))));
        document.querySelectorAll('[data-open-project]').forEach((trigger) => {
            trigger.addEventListener('click', () => openProject(Number(trigger.dataset.openProject)));
        });
        document.querySelector('[data-close-modal]').addEventListener('click', closeModal);
        document.querySelector('[data-lightbox-close]').addEventListener('click', closeLightbox);
        modal.addEventListener('click', (event) => {
            if (event.target === modal) closeModal();
        });
        lightbox.addEventListener('click', (event) => {
            if (event.target === lightbox) closeLightbox();
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                if (lightbox.classList.contains('active')) {
                    closeLightbox();
                } else {
                    closeModal();
                }
            }
        });
    </script>
</body>
</html>
