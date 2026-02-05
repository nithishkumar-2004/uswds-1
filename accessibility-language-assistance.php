
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accessibility &amp; Language Assistance - RFPMart + USWDS</title>
    <meta name="description" content="Learn how to request accommodations, language assistance, and accessible formats, and how to report accessibility issues." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-about-city.webp');" aria-label="Accessibility and Language Assistance">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-mobile-lg">
                    <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                        <ul class="usa-breadcrumb__list">
                            <li class="usa-breadcrumb__list-item">
                                <a href="./" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Home</span>
                                </a>
                            </li>
                            <li class="usa-breadcrumb__list-item">
                                <a href="#" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Pages</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="margin-top-0 margin-bottom-0">
                        City of RFPMart
                    </p>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            Accessibility &amp; Language Assistance
                        </span>
                    </h1>
                    <p>
                        Our commitment to inclusive, accessible services for every resident and visitor.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" aria-label="On this page">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-12 usa-prose">
                    <h2 class="font-heading-lg margin-top-0">On this page</h2>
                    <ul class="usa-list usa-list--unstyled grid-row grid-gap-2">
                        <li class="desktop:grid-col-auto"><a href="#how-we-can-help">How We Can Help</a></li>
                        <li class="desktop:grid-col-auto"><a href="#request-accommodations">Request Accommodations</a></li>
                        <li class="desktop:grid-col-auto"><a href="#report-issues">Report an Issue</a></li>
                        <li class="desktop:grid-col-auto"><a href="#language-assistance">Language Assistance</a></li>
                        <li class="desktop:grid-col-auto"><a href="#browser-support">Browser &amp; Device Support</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" id="how-we-can-help">
            <div class="grid-row grid-gap">
                <div class="usa-prose tablet:grid-col-12">
                    <h2 class="font-heading-xl margin-top-0">How We Can Help</h2>
                    <p>Quick links to key services on this page.</p>
                </div>
            </div>
            <ul class="usa-card-group grid-row grid-gap margin-top-2">
                <li class="usa-card tablet:grid-col-6 desktop:grid-col-3">
                    <div class="usa-card__container">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading"><a href="#request-accommodations">Request support</a></h3>
                        </div>
                        <div class="usa-card__body">
                            <p class="margin-0">Ask for ASL interpretation, captioning, mobility support, or accessible materials.</p>
                        </div>
                    </div>
                </li>
                <li class="usa-card tablet:grid-col-6 desktop:grid-col-3">
                    <div class="usa-card__container">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading"><a href="#report-issues">Report an issue</a></h3>
                        </div>
                        <div class="usa-card__body">
                            <p class="margin-0">Tell us about barriers with forms, media, or navigation.</p>
                        </div>
                    </div>
                </li>
                <li class="usa-card tablet:grid-col-6 desktop:grid-col-3">
                    <div class="usa-card__container">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading"><a href="#language-assistance">Language help</a></h3>
                        </div>
                        <div class="usa-card__body">
                            <p class="margin-0">Interpreter services, phone support, and TTY/relay.</p>
                        </div>
                    </div>
                </li>
                <li class="usa-card tablet:grid-col-6 desktop:grid-col-3">
                    <div class="usa-card__container">
                        <div class="usa-card__header">
                            <h3 class="usa-card__heading"><a href="#alternate-formats">Alternate formats</a></h3>
                        </div>
                        <div class="usa-card__body">
                            <p class="margin-0">Large print, accessible HTML, audio description, Braille.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section class="usa-section grid-container" id="accessibility-statement">
            <div class="grid-row grid-gap">
                <div class="usa-prose desktop:grid-col-8 tablet:grid-col-7">
                    <h2 class="font-heading-xl margin-top-0">Accessibility Statement</h2>
                    <p>
                        We are committed to providing accessible digital services for all users, including people with disabilities and those using assistive technologies. Our team follows USWDS patterns, semantic HTML, labeled form controls, and WCAG 2.1 AA guidance to improve consistency and usability.
                    </p>
                </div>
                <div class="desktop:grid-col-4 tablet:grid-col-5">
                    <img class="width-full" src="images/webp/bg-contact-us.webp" alt="City staff assisting a resident at a service desk" />
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" id="known-limitations">
            <div class="grid-row grid-gap">
                <div class="usa-prose desktop:grid-col-7 tablet:grid-col-7">
                    <h2 class="font-heading-xl margin-top-0">Known Accessibility Limitations</h2>
                    <ul class="usa-list">
                        <li>Some legacy or third-party documents may not yet be fully tagged PDFs; HTML alternatives are provided when available.</li>
                        <li>Older embedded media may lack captions or transcripts; remediation is in progress.</li>
                        <li>Occasional focus order issues may appear in third-party widgets; report them so we can provide alternatives.</li>
                    </ul>
                </div>
                <div class="desktop:grid-col-5 tablet:grid-col-5">
                    <img class="width-full" src="images/webp/bg-city-gov.webp" alt="City government building exterior" />
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" id="browser-support">
            <div class="grid-row grid-gap">
                <div class="usa-prose desktop:grid-col-7 tablet:grid-col-7">
                    <h2 class="font-heading-xl margin-top-0">Browser &amp; Device Support</h2>
                    <p>
                        The site is designed for modern, standards-compliant browsers. Current versions of Chrome, Edge, Firefox, and Safari are supported on desktop and mobile. Content reflows for small screens, supports zoom, and aims to respect user settings such as reduced motion and high contrast where available.
                    </p>
                </div>
                <div class="desktop:grid-col-5 tablet:grid-col-5">
                    <img class="width-full" src="images/webp/bt-accommodation.webp" alt="Accessible seating and accommodations illustration" />
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="usa-prose tablet:grid-col-12">
                    <h2 class="font-heading-xl margin-top-0">Status &amp; Commitment</h2>
                    <p>
                        We strive to meet or exceed WCAG 2.1 AA guidelines and Section 508 requirements. Our teams regularly review templates, navigation, forms, and media to improve accessibility and usability across devices.
                    </p>
                    <div class="usa-alert usa-alert--info margin-top-2">
                        <div class="usa-alert__body">
                            <h3 class="usa-alert__heading">Current status</h3>
                            <p class="usa-alert__text">
                                Core templates use semantic HTML, labeled form controls, and keyboard-accessible navigation. We continue to audit contrast, alt text, and focus order as content updates.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="usa-prose tablet:grid-col-12">
                    <h2 class="font-heading-xl margin-top-0">Accessibility Standards &amp; Compliance</h2>
                    <h3 class="font-heading-lg margin-top-1">WCAG 2.1 Level AA</h3>
                    <p>
                        Our goal is conformance with Web Content Accessibility Guidelines (WCAG) 2.1 Level AA. We emphasize perceivable content, operable navigation, understandable language, and robust code so pages work across current and emerging technologies.
                    </p>
                    <h3 class="font-heading-lg margin-top-1">Section 508</h3>
                    <p>
                        We align with Section 508 requirements for federal-facing digital services, including accessible forms, tables, multimedia alternatives, and programmatic labels to support assistive technologies.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">Assistive Technology Compatibility</h2>
                    <ul class="usa-list">
                        <li>Screen readers (e.g., JAWS, NVDA, VoiceOver) with semantic landmarks and labels.</li>
                        <li>Keyboard navigation with visible focus states and logical tab order.</li>
                        <li>Browser zoom and responsive layouts that reflow content without loss of function.</li>
                        <li>High-contrast and reduced-motion preferences honored where supported.</li>
                    </ul>
                </div>
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">Document &amp; Media Accessibility</h2>
                    <p class="usa-prose">
                        We prioritize accessible HTML over scanned PDFs, provide captions for videos where available, and can supply alternate formats on request. When PDFs are required, we strive for tagged, searchable documents with proper reading order and alt text for meaningful images.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">Third-Party Content Disclaimer</h2>
                    <p class="usa-prose">
                        Some embedded tools, maps, or external links are provided by third parties and may not fully conform to WCAG 2.1 AA. If you encounter barriers in these integrations, please report them so we can offer alternatives or escalate to the vendor.
                    </p>
                </div>
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">Feedback &amp; Continuous Improvement</h2>
                    <p class="usa-prose">
                        We welcome accessibility feedback. Reports are reviewed and prioritized for remediation as part of our regular maintenance schedule. Your input helps us improve services for all users.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" id="request-accommodations">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">How to Request Accommodations</h2>
                    <p class="usa-prose">
                        Submit a request for accommodations such as ASL interpretation, captioning, mobility assistance, or meeting materials in accessible formats.
                    </p>
                    <div class="usa-alert usa-alert--info">
                        <div class="usa-alert__body">
                            <h3 class="usa-alert__heading margin-top-0">Submit a request</h3>
                            <p class="usa-alert__text margin-bottom-1">We review requests and respond promptly with next steps.</p>
                            <form class="usa-form" aria-label="Request accommodations">
                                <label class="usa-label" for="acc-name">Full name</label>
                                <input class="usa-input" id="acc-name" name="name" type="text" required />

                                <label class="usa-label" for="acc-email">Email address</label>
                                <input class="usa-input" id="acc-email" name="email" type="email" required />

                                <label class="usa-label" for="acc-phone">Phone (optional)</label>
                                <input class="usa-input" id="acc-phone" name="phone" type="tel" />

                                <label class="usa-label" for="acc-details">Accommodation details</label>
                                <span class="usa-hint" id="acc-details-hint">Include event name/date or service location if applicable.</span>
                                <textarea class="usa-textarea" id="acc-details" name="details" aria-describedby="acc-details-hint" rows="4" required></textarea>

                                <label class="usa-label" for="acc-contact">Preferred contact method</label>
                                <select class="usa-select" id="acc-contact" name="contact" required>
                                    <option value="">Select an option</option>
                                    <option value="email">Email</option>
                                    <option value="phone">Phone</option>
                                    <option value="tty">TTY</option>
                                </select>

                                <button class="usa-button margin-top-2" type="submit">Submit request</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tablet:grid-col-6" id="report-issues">
                    <h2 class="font-heading-xl margin-top-0">Report an Accessibility Issue</h2>
                    <p class="usa-prose">
                        If you encounter a barrier (navigation, forms, documents, media), let us know so we can remediate promptly.
                    </p>
                    <div class="usa-alert usa-alert--warning">
                        <div class="usa-alert__body">
                            <h3 class="usa-alert__heading">Response timeline</h3>
                            <p class="usa-alert__text">We aim to acknowledge issues within 2 business days and provide an update or temporary alternative within 10 business days.</p>
                        </div>
                    </div>
                    <ul class="usa-list usa-list--unstyled margin-top-2">
                        <li><strong>Email:</strong> <a href="mailto:accessibility@rfpmartllc.com">accessibility@rfpmartllc.com</a></li>
                        <li><strong>Phone:</strong> <a href="tel:1-800-555-5555">(315) 627-3333</a></li>
                        <li><strong>TTY:</strong> <a href="tel:711">711</a> (Relay)</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" id="language-assistance">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">Language Assistance &amp; TTY</h2>
                    <ul class="usa-list">
                        <li>ASL interpreters, captioning, CART, and plain-language materials.</li>
                        <li>Reserved seating, ramps, wayfinding support, and assistive listening devices.</li>
                    </ul>
                </div>
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">Alternate Format Requests</h2>
                    <ul class="usa-list">
                        <li>Large print or high-contrast PDFs.</li>
                        <li>Accessible HTML in place of scanned PDFs.</li>
                        <li>Audio descriptions for key videos.</li>
                        <li>Braille upon request (allow additional processing time).</li>
                    </ul>
                </div>
            </div>
            <div class="grid-row grid-gap margin-top-2">
                <div class="tablet:grid-col-6">
                    <img class="width-full" src="images/webp/bg-visit-city.webp" alt="City skyline representing community services" />
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">Keyboard Navigation Tips</h2>
                    <ul class="usa-list">
                        <li>Use the “Skip to main content” link to bypass navigation.</li>
                        <li>Tab/Shift+Tab to move through links and form fields; Enter or Space to activate buttons.</li>
                        <li>Use browser search (Ctrl/Cmd + F) to find headings or labels quickly.</li>
                    </ul>
                </div>
                <div class="tablet:grid-col-6">
                    <h2 class="font-heading-xl margin-top-0">Maintenance &amp; Review Schedule</h2>
                    <p class="font-body-sm margin-bottom-2">
                        We review accessibility reports, language assistance requests, and form performance quarterly, with targeted fixes prioritized monthly.
                    </p>
                    <p class="font-body-sm margin-0">
                        Last reviewed: January 2026. Next scheduled review: April 2026.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>
