<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CEH Training Progress</title>
<style>
    body {
        font-family: 'Courier New', monospace;
        text-align: center;
        background-color: #000;
        color: #00ff66;
        margin: 0;
        padding-top: 50px;
    }

    h1 {
        font-size: 2.5em;
        color: #00ff66;
        text-shadow: 0 0 15px #00ff66, 0 0 30px #00ff66;
        margin-bottom: 30px;
        /* Tambahkan ID untuk target efek teks */
    }

    .progress-container {
        width: 90%;
        max-width: 800px;
        background-color: #111;
        border-radius: 25px;
        margin: 20px auto;
        box-shadow: 0 0 20px #00ff66 inset;
    }

    .progress-bar {
        height: 30px;
        background: linear-gradient(90deg, #00ff66, #00cc44);
        width: 0%;
        border-radius: 25px;
        color: black;
        text-align: center;
        line-height: 30px;
        font-weight: bold;
        text-shadow: none;
        box-shadow: 0 0 25px #00ff66, 0 0 50px #00ff66;
        transition: width 0.8s ease-in-out;
    }

    .status {
        margin-top: 20px;
        font-size: 1.2em;
        text-shadow: 0 0 10px #00ff66, 0 0 25px #00ff66;
    }

    a.certificate {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #00ff66;
        color: black;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        box-shadow: 0 0 25px #00ff66, 0 0 50px #00ff66;
        font-size: 0.9em;
    }

    a.certificate:hover {
        background-color: #00cc44;
        box-shadow: 0 0 35px #00ff66, 0 0 70px #00ff66;
    }

    .description {
        margin-top: 40px;
        text-align: left;
        width: 90%;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6em;
        font-size: 1em;
        color: #aaffcc;
        text-shadow: 0 0 5px #00ff66;
    }
    
    .description h2 {
        font-size: 1.8em;
        margin-bottom: 10px;
    }

    .description p {
        margin-bottom: 15px;
    }

    /* Styles for the rotating news box */
    .case-carousel-title {
        text-align: center;
        font-size: 1.8em;
        margin-bottom: 20px;
        text-shadow: 0 0 10px #00ff66;
    }

    .case-carousel {
        position: relative; /* Container for absolute positioned items */
        margin: 40px auto;
        padding: 20px;
        width: 90%;
        max-width: 800px;
        height: 250px; /* Fixed height to prevent layout shift */
        background-color: rgba(0, 255, 102, 0.1);
        border: 1px solid #00ff66;
        border-radius: 10px;
        box-shadow: 0 0 25px #00ff66, 0 0 50px #00ff66 inset;
    }

    .case-item {
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        text-align: left;
    }

    .case-item.active {
        opacity: 1;
    }
    
    .case-item h3 {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    .case-item p {
        margin: 0;
    }

    .case-item a {
        color: #00ff66;
        text-decoration: none;
        text-shadow: 0 0 5px #00ff66;
    }

    .case-item a:hover {
        text-decoration: underline;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        h1 { font-size: 2em; }
        .progress-container, .description, .case-carousel { width: 90%; }
        .case-carousel { height: 300px; }
        .case-item h3 { font-size: 1.2em; }
    }

    @media (max-width: 480px) {
        h1 { font-size: 1.5em; }
        .progress-bar { height: 25px; line-height: 25px; }
        .status { font-size: 1em; }
        .description { font-size: 0.9em; line-height: 1.4em; }
        .description h2 { font-size: 1.5em; }
        .case-carousel-title { font-size: 1.4em; }
        .case-carousel { height: 350px; }
        .case-item h3 { font-size: 1em; }
        a.certificate { padding: 8px 16px; font-size: 0.8em; }
    }
</style>
</head>
<body>
<!-- Tambahkan ID ke H1 agar bisa di target oleh JavaScript -->
<h1 id="main-title">[ CEH TRAINING PROGRESS ]</h1>
<div class="progress-container">
    <div id="progress-bar" class="progress-bar">0%</div>
</div>
<div id="status" class="status">Currently undergoing CEH Training</div>

<div class="description">
    <h2>What is CEH?</h2>
    <p>The <strong>Certified Ethical Hacker (CEH)</strong> certification validates skills to identify and fix vulnerabilities in computer systems, networks, and applications—using the same tools as malicious hackers, but legally and ethically.</p>

    <h2>Why is it Important for Nurses?</h2>
    <p>Modern hospitals depend on digital systems for patient records, lab results, and medical devices. Nurses often handle sensitive data and operate network-connected medical equipment. A CEH-trained nurse understands cyber risks and can help protect patient safety and privacy.</p>
</div>

<h2 class="case-carousel-title">🏥 10 Real-World Hacker Attacks on US Hospitals</h2>
<div class="case-carousel">
    <div class="case-item active">
        <h3>1. Community Health Systems (April–June 2014)</h3>
        <p>Approximately <strong>4.5 million patient records</strong> were stolen via the *Heartbleed* exploit by hackers allegedly from China. The data included social security numbers, addresses, and personal details. <a href="https://time.com/3148773/report-devastating-heartbleed-flaw-was-used-in-hospital-hack/?utm_source=chatgpt.com" target="_blank">📎 Time.com</a></p>
    </div>
    <div class="case-item">
        <h3>2. Universal Health Services (September 2020)</h3>
        <p>A **Ryuk ransomware** attack crippled the digital network of hundreds of facilities. Staff were forced to revert to paper records, causing dangerous delays in medical care. <a href="https://www.wired.com/story/universal-health-services-ransomware-attack/?utm_source=chatgpt.com" target="_blank">📎 Wired</a></p>
    </div>
    <div class="case-item">
        <h3>3. Ryuk Attacks Across Multiple States (2019–2020)</h3>
        <p>Hospitals in California, New York, and Oregon were affected, with patient records locked and critical care schedules for cancer patients lost. <a href="https://en.wikipedia.org/wiki/Ryuk_(ransomware)?utm_source=chatgpt.com" target="_blank">📎 Wikipedia</a></p>
    </div>
    <div class="case-item">
        <h3>4. Change Healthcare (Feb–Mar 2024)</h3>
        <p>The **ALPHV/BlackCat** attack blocked the national medical claims system. Losses reached $100 million per day, with the ransom reportedly almost **$22 million**. <a href="https://en.wikipedia.org/wiki/Change_Healthcare?utm_source=chatgpt.com" target="_blank">📎 Wikipedia</a> | <a href="https://www.financialresearch.gov/briefs/files/OFRBrief-24-05-change-healthcare-cyberattack.pdf?utm_source=chatgpt.com" target="_blank">Financial Research</a></p>
    </div>
    <div class="case-item">
        <h3>5. Ascension (May 2024)</h3>
        <p>A ransomware attack on hospital operator Ascension affected **5.6 million patients**, compromising medical data and lab results. <a href="https://www.reuters.com/technology/cybersecurity/us-hospital-operator-ascension-says-56-million-affected-medical-data-breach-may-2024-12-20/?utm_source=chatgpt.com" target="_blank">📎 Reuters</a></p>
    </div>
    <div class="case-item">
        <h3>6. Change Healthcare – Data Impact (Late 2024)</h3>
        <p>Sensitive data for **100 million individuals** was exposed. Lawsuits were filed for negligence in protecting data, including failure to use MFA. <a href="https://www.hipaajournal.com/change-healthcare-responding-to-cyberattack/?utm_source=chatgpt.com" target="_blank">📎 HIPAA Journal</a></p>
    </div>
    <div class="case-item">
        <h3>7. North Korea – Maui Ransomware (2022–2024)</h3>
        <p>North Korean hackers used **Maui ransomware** to attack US healthcare providers and fund cyber operations. <a href="https://www.justice.gov/archives/opa/pr/north-korean-government-hacker-charged-involvement-ransomware-attacks-targeting-us-hospitals?utm_source=chatgpt.com" target="_blank">📎 US DOJ</a></p>
    </div>
    <div class="case-item">
        <h3>8. PIH Health (December 2024)</h3>
        <p>A ransomware attack disabled three hospitals in California and stole **17 million patient records**. The attackers threatened to publish **2 TB of data**. <a href="https://www.bankinfosecurity.com/hackers-steal-17m-patient-records-in-attack-on-3-hospitals-a-27059/?utm_source=chatgpt.com" target="_blank">📎 BankInfoSecurity</a></p>
    </div>
    <div class="case-item">
        <h3>9. Heartbleed Exploit – CHS (2014)</h3>
        <p>The *Heartbleed* attack became a landmark cyber assault on hospitals, exposing critical vulnerabilities in medical systems. <a href="https://time.com/3148773/report-devastating-heartbleed-flaw-was-used-in-hospital-hack/?utm_source=chatgpt.com" target="_blank">📎 Time.com</a></p>
    </div>
    <div class="case-item">
        <h3>10. Surge in Attacks & Stolen Data (2024–2025)</h3>
        <p>A total of **259 million patient records** were stolen. The perpetrators are from Russia, China, North Korea, and Iran. <a href="https://www.aha.org/news/aha-cyber-intel/2025-04-03-3-must-know-cyber-and-risk-realities-whats-ahead-health-care-2025?utm_source=chatgpt.com" target="_blank">📎 AHA.org</a></p>
    </div>
</div>

<script>
    // --- Hacker Text Effect Logic ---
    function glitchText(elementId, finalText, duration) {
        const element = document.getElementById(elementId);
        if (!element) return;

        const chars = '!@#$%^&*()_+-=[]{};:|,.<>/?';
        let iterations = 0;
        const interval = 50; // Milliseconds between character changes
        const totalIterations = duration / interval;

        const glitchInterval = setInterval(() => {
            element.textContent = finalText.split('')
                .map((char, index) => {
                    if (index < iterations) {
                        return char;
                    }
                    return chars[Math.floor(Math.random() * chars.length)];
                })
                .join('');

            if (iterations >= finalText.length) {
                clearInterval(glitchInterval);
            }
            iterations += 1;
        }, interval);
    }
    
    // Panggil efek pada judul utama saat DOM dimuat
    document.addEventListener("DOMContentLoaded", function() {
        const finalTitle = "[ CEH TRAINING PROGRESS ]";
        const effectDuration = 1000; // 1 second total duration
        glitchText('main-title', finalTitle, effectDuration);
    });

    // --- CEH Progress Bar Logic ---
    // The progress is now fixed at 100% to indicate completion as requested.
    
    let progress = 100; // FORCED TO 100%

    // Set status to completed
    setTimeout(() => {
        document.getElementById("progress-bar").style.width = progress + "%";
        document.getElementById("progress-bar").textContent = progress + "%";
        document.getElementById("status").innerHTML = 'Training Completed - <a href="certificate.pdf" class="certificate" target="_blank">View My Certificate</a>';
    }, 100);


    // --- News Case Carousel Logic ---
    document.addEventListener("DOMContentLoaded", function() {
        const cases = document.querySelectorAll('.case-item');
        let currentIndex = 0;

        function showNextCase() {
            // Remove active class from current case if it exists
            if (cases[currentIndex]) {
                cases[currentIndex].classList.remove('active');
            }

            // Move to the next index, looping back to 0
            currentIndex = (currentIndex + 1) % cases.length;

            // Add active class to the next case
            if (cases[currentIndex]) {
                cases[currentIndex].classList.add('active');
            }
        }
        
        // Ensure the first case is active on load
        if (cases.length > 0) {
            cases[0].classList.add('active');
        }

        // Start the rotation with an interval of 10 seconds (10000 ms)
        setInterval(showNextCase, 10000);
    });
</script>

</body>
</html>
