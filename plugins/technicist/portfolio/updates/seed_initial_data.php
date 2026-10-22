<?php

use Technicist\Portfolio\Models\Page;
use Technicist\Portfolio\Models\Service;
use Technicist\Portfolio\Models\Project;

// ==========================================
// SEED HOME PAGE
// ==========================================
Page::firstOrCreate(['slug' => 'home'], [
    'title'              => 'Home',
    'slug'               => 'home',
    'hero_badge'         => 'Mission-Critical Infrastructure & Engineering',
    'hero_badge_urdu'    => 'انجینئرنگ اور سیکیورٹی سسٹمز',
    'hero_title'         => 'Engineering Smarter Infrastructure. Delivering Intelligent Security.',
    'hero_title_urdu'    => 'جدید ترین انفراسٹرکچر انجینئرنگ اور محفوظ سیکیورٹی سسٹمز کی فراہمی',
    'hero_subtitle'      => 'Pakistan\'s leading provider of smart security, access control, road safety, and IT automation systems for critical infrastructure.',
    'hero_subtitle_urdu' => 'پاکستان کی معروف کمپنی جو سیکیورٹی، رسائی کنٹرول، روڈ سیفٹی اور آئی ٹی آٹومیشن سسٹمز فراہم کرتی ہے',
    'hero_video'         => 'assets/images/heroloop.mp4',
    'stats_json'         => json_encode([
        ['icon' => 'fa-microchip',   'text' => 'Integrated RFID Barriers',   'urdu' => 'خودکار بیریئرز'],
        ['icon' => 'fa-video',       'text' => 'IP CCTV Surveillance',        'urdu' => 'آئی پی سرویلنس'],
        ['icon' => 'fa-road',        'text' => 'Road Safety Cat-Eyes',        'urdu' => 'روڈ سیفٹی سسٹمز'],
    ]),
    'intro_badge'        => 'Core Engineering Solutions',
    'intro_badge_urdu'   => 'اہم تکنیکی خدمات',
    'intro_title'        => 'Mission-Critical Security & Automation Systems',
    'intro_title_urdu'   => 'اعلیٰ معیار کے خودکار سیکیورٹی اور ایکسس سسٹمز',
    'intro_text'         => 'Engineered for maximum duty cycles, high-throughput security gates, and severe climatic durability across Pakistan.',
    'intro_text_urdu'    => 'بغیر تعطل چوبیس گھنٹے کام کرنے والے بیریئرز، ریڈیو فریکوئنسی ای ٹیگز اور بین الاقوامی معیار کے مانیٹرنگ سلوشنز',
    'phone'              => '+92 312 5721105',
    'whatsapp'           => '923125721105',
    'email'              => 'info@technicistpk.com',
    'address'            => 'Technicist Engineering, Lahore, Pakistan',
    'address_urdu'       => 'ٹیکنیسسٹ انجینئرنگ، لاہور، پاکستان',
    'meta_title'         => 'Technicist Engineering – Smart Security & Infrastructure Pakistan',
    'meta_description'   => 'Pakistan\'s leading provider of E-Tag vehicle access control, boom barriers, CCTV surveillance, road safety and smart city solutions.',
]);

// ==========================================
// SEED ABOUT PAGE
// ==========================================
Page::firstOrCreate(['slug' => 'about'], [
    'title'              => 'About Us',
    'slug'               => 'about',
    'hero_badge'         => 'About Technicist Engineering',
    'hero_badge_urdu'    => 'ہمارے بارے میں',
    'hero_title'         => 'Building Pakistan\'s Smarter, Safer Infrastructure',
    'hero_title_urdu'    => 'پاکستان کا محفوظ اور ذہین انفراسٹرکچر تعمیر کر رہے ہیں',
    'intro_badge'        => 'Our Story',
    'intro_badge_urdu'   => 'ہماری کہانی',
    'intro_title'        => 'Technicist Engineering — A Decade of Innovation',
    'intro_title_urdu'   => 'ٹیکنیسسٹ انجینئرنگ — ایک دہائی کی جدت',
    'intro_text'         => 'Technicist Engineering is a Pakistan-based technology and engineering company specializing in mission-critical security, access control, road safety, and smart city solutions. Founded with a vision to modernize infrastructure, we have delivered over 500+ projects across Pakistan.',
    'intro_text_urdu'    => 'ٹیکنیسسٹ انجینئرنگ پاکستان میں سیکیورٹی، رسائی کنٹرول، روڈ سیفٹی اور سمارٹ سٹی سلوشنز میں مہارت رکھتی ہے۔ ہم نے پاکستان بھر میں 500 سے زائد منصوبے مکمل کیے ہیں۔',
    'phone'              => '+92 312 5721105',
    'whatsapp'           => '923125721105',
    'email'              => 'info@technicistpk.com',
    'address'            => 'Technicist Engineering, Lahore, Pakistan',
    'address_urdu'       => 'ٹیکنیسسٹ انجینئرنگ، لاہور، پاکستان',
    'meta_title'         => 'About Technicist Engineering – Security & Infrastructure Pakistan',
    'meta_description'   => 'Learn about Technicist Engineering, Pakistan\'s leading security and smart infrastructure company.',
]);

// ==========================================
// SEED CONTACT PAGE
// ==========================================
Page::firstOrCreate(['slug' => 'contact'], [
    'title'              => 'Contact Us',
    'slug'               => 'contact',
    'hero_badge'         => 'Get In Touch',
    'hero_badge_urdu'    => 'رابطہ کریں',
    'hero_title'         => 'Talk to Our Engineering Team',
    'hero_title_urdu'    => 'ہماری انجینئرنگ ٹیم سے بات کریں',
    'intro_title'        => 'Contact Information',
    'intro_title_urdu'   => 'رابطہ کی معلومات',
    'phone'              => '+92 312 5721105',
    'whatsapp'           => '923125721105',
    'email'              => 'info@technicistpk.com',
    'address'            => 'Office 5, Tech Tower, Main Boulevard, Lahore, Pakistan',
    'address_urdu'       => 'آفس 5، ٹیک ٹاور، مین بلیوارڈ، لاہور، پاکستان',
    'meta_title'         => 'Contact Technicist Engineering – Lahore Pakistan',
    'meta_description'   => 'Contact Technicist Engineering for security systems, access control, CCTV, road safety and smart city projects in Pakistan.',
]);

// ==========================================
// SEED SERVICES
// ==========================================
$services = [
    [
        'title'            => 'E-Tag & Vehicle Access Control',
        'slug'             => 'service-etag',
        'title_urdu'       => 'ای ٹیگ اور گاڑیوں کی خودکار آمد و رفت',
        'badge'            => 'Access Control',
        'icon'             => 'fa fa-id-card',
        'image'            => 'assets/images/vehicle-access-control.jpeg',
        'url_slug'         => 'e-tag-vehicle-access-control-system',
        'description'      => 'Long-range UHF RFID (12m+), automated AC/DC brushless boom barriers, ANPR vehicle identification, and anti-tailgating loop logic.',
        'description_urdu' => 'طویل دوری یو ایچ ایف آر ایف آئی ڈی، خودکار بیریئرز اور گاڑیوں کی شناخت کا نظام',
        'features_json'    => json_encode(['Opening Speed: 0.6s – 3.0s (تیز رفتار بیریئر)', 'Long-range UHF tags (دور سے سکیننگ)', 'Power backup integration (یو پی ایس سپورٹ)']),
        'featured'         => true,
        'sort_order'       => 1,
    ],
    [
        'title'            => 'Visitor Management VMS',
        'slug'             => 'service-vms',
        'title_urdu'       => 'وزیٹر مینجمنٹ اور سوسائٹی پورٹل',
        'badge'            => 'Digital Gate Passes',
        'icon'             => 'fa fa-user-shield',
        'image'            => 'assets/images/resident-eservices-best.png',
        'url_slug'         => 'resident-e-services',
        'description'      => 'Digital visitor access passes, resident admin portals, CNIC optical scanning, and complete cloud-synced entry log automation.',
        'description_urdu' => 'ڈیجیٹل وزیٹر پاسز، رہائشی ایڈمن پورٹل، شناختی کارڈ اسکیننگ اور مکمل کلاؤڈ لاگ آٹومیشن',
        'features_json'    => json_encode(['WhatsApp & SMS QR passes (کیو آر کوڈ پاس)', 'CNIC & license OCR scanning (شناختی کارڈ اندراج)', 'Mobile app approvals (ایپ سے منظوری)']),
        'featured'         => true,
        'sort_order'       => 2,
    ],
    [
        'title'            => 'CCTV & Network Management',
        'slug'             => 'service-cctv',
        'title_urdu'       => 'سی سی ٹی وی اور نیٹ ورک مینجمنٹ',
        'badge'            => 'IP Surveillance',
        'icon'             => 'fa fa-video',
        'image'            => 'assets/images/Security_Safety_System.jpg',
        'url_slug'         => 'security-safety-system',
        'description'      => '4K & HD IP cameras, NVR/DVR recording, fiber-optic backbone, remote monitoring, and 24/7 NOC support.',
        'description_urdu' => '4K آئی پی کیمرے، این وی آر ریکارڈنگ، فائبر آپٹک نیٹ ورک اور 24 گھنٹے ریموٹ مانیٹرنگ',
        'features_json'    => json_encode(['4K IP cameras (ہائی ریزولیوشن کیمرے)', 'Fiber-optic backbone (فائبر نیٹ ورک)', '24/7 NOC support (مسلسل نگرانی)']),
        'featured'         => true,
        'sort_order'       => 3,
    ],
    [
        'title'            => 'Road Traffic Safety Systems',
        'slug'             => 'service-road',
        'title_urdu'       => 'روڈ ٹریفک سیفٹی سسٹمز',
        'badge'            => 'Road Safety',
        'icon'             => 'fa fa-road',
        'image'            => 'assets/images/Road_Traffic_Safety.jpg',
        'url_slug'         => 'road-traffic-safety',
        'description'      => '3M certified cat-eyes, delineators, crash barriers, road marking, and highway lighting for safer roads across Pakistan.',
        'description_urdu' => '3ایم سرٹیفائیڈ کیٹ آئیز، ریفلیکٹرز، کریش بیریئرز اور ہائی وے لائٹنگ',
        'features_json'    => json_encode(['3M certified cat-eyes (تصدیق شدہ کیٹ آئیز)', 'Crash barriers (حادثہ روکنے والے بیریئر)', 'Highway LED lighting (ہائی وے روشنی)']),
        'featured'         => true,
        'sort_order'       => 4,
    ],
    [
        'title'            => 'Security & Safety Systems',
        'slug'             => 'service-security',
        'title_urdu'       => 'سیکیورٹی اور حفاظتی نظام',
        'badge'            => 'Physical Security',
        'icon'             => 'fa fa-shield-alt',
        'image'            => 'assets/images/Security_Safety_System.jpg',
        'url_slug'         => 'security-safety-system',
        'description'      => 'Perimeter fencing, electric fence systems, bollards, spike barriers, fire detection and suppression systems.',
        'description_urdu' => 'پریمیٹر فینسنگ، الیکٹرک فینس، اسپائیک بیریئرز اور فائر ڈیٹیکشن سسٹمز',
        'features_json'    => json_encode(['Electric perimeter fence (الیکٹرک فینس)', 'Anti-vehicle bollards (گاڑی روکنے والے بولرڈ)', 'Fire detection & suppression (آگ بجھانے کا نظام)']),
        'featured'         => true,
        'sort_order'       => 5,
    ],
    [
        'title'            => 'Electro-Mechanical Engineering Works',
        'slug'             => 'service-electromech',
        'title_urdu'       => 'الیکٹرو مکینیکل انجینئرنگ ورکس',
        'badge'            => 'Civil & Mechanical',
        'icon'             => 'fa fa-tools',
        'image'            => 'assets/images/Elect-Mech_Engineering_Works.jpg',
        'url_slug'         => 'elect-mech-engineering-works',
        'description'      => 'Complete civil and mechanical engineering works including trenching, cable laying, conduit installation, and site commissioning.',
        'description_urdu' => 'مکمل سول اور مکینیکل انجینئرنگ کام بشمول ٹرینچنگ، کیبل بچھانا اور سائٹ کمیشننگ',
        'features_json'    => json_encode(['Cable trenching & laying (کیبل بچھانا)', 'Conduit & tray installation (کنڈیوٹ انسٹالیشن)', 'Site commissioning (سائٹ کمیشننگ)']),
        'featured'         => false,
        'sort_order'       => 6,
    ],
];

foreach ($services as $serviceData) {
    Service::firstOrCreate(['slug' => $serviceData['slug']], $serviceData);
}

// ==========================================
// SEED PROJECTS
// ==========================================
$projects = [
    [
        'title'         => 'AC/DC Boom Barrier System',
        'slug'          => 'project-ac-dc-boom-barrier',
        'category'      => 'Access Control',
        'badge'         => 'Access Control',
        'image'         => 'assets/images/AC-DC-Boom-Barrier.jpg',
        'description'   => 'High-speed AC/DC brushless boom barriers with UHF RFID integration for residential and commercial projects.',
        'client'        => 'Multiple DHA & Housing Societies',
        'location'      => 'Lahore, Pakistan',
        'year'          => '2023',
        'features_json' => json_encode(['UHF RFID Integration', 'AC/DC Brushless Motors', 'Anti-tailgating Logic']),
        'featured'      => true,
        'sort_order'    => 1,
    ],
    [
        'title'         => 'CCTV & Network Management System',
        'slug'          => 'project-cctv-network',
        'category'      => 'Surveillance',
        'badge'         => 'IP Surveillance',
        'image'         => 'assets/images/CCTV_network_management_system.jpg',
        'description'   => 'End-to-end IP CCTV surveillance with fiber-optic backbone, NVR recording and remote monitoring.',
        'client'        => 'Government Infrastructure Projects',
        'location'      => 'Multiple Cities, Pakistan',
        'year'          => '2024',
        'features_json' => json_encode(['4K IP Cameras', 'Fiber-optic Backbone', '24/7 Remote Monitoring']),
        'featured'      => true,
        'sort_order'    => 2,
    ],
    [
        'title'         => '3M China Cat-Eyes Installation',
        'slug'          => 'project-3m-china-cat-eyes',
        'category'      => 'Road Safety',
        'badge'         => 'Road Safety',
        'image'         => 'assets/images/3m_china_cat_eyes.jpg',
        'description'   => '3M certified raised pavement markers (cat-eyes) for highway safety across Pakistan\'s national roads.',
        'client'        => 'National Highway Authority',
        'location'      => 'Motorways, Pakistan',
        'year'          => '2023',
        'features_json' => json_encode(['3M Certified RPMs', 'Retroreflective Technology', 'All-weather Durability']),
        'featured'      => true,
        'sort_order'    => 3,
    ],
    [
        'title'         => 'E-Tag Visitor Management System',
        'slug'          => 'project-e-tag-vms',
        'category'      => 'Smart City',
        'badge'         => 'Smart City',
        'image'         => 'assets/images/e_tag_vms.jpg',
        'description'   => 'Complete E-Tag visitor management with WhatsApp QR gate passes, CNIC scanning, and resident portals.',
        'client'        => 'Bahria Town & DHA Housing',
        'location'      => 'Lahore & Islamabad',
        'year'          => '2024',
        'features_json' => json_encode(['WhatsApp QR Gate Passes', 'CNIC OCR Scanning', 'Resident Mobile App']),
        'featured'      => true,
        'sort_order'    => 4,
    ],
    [
        'title'         => 'Highway Safety & IT Equipment',
        'slug'          => 'project-highway-safety-it',
        'category'      => 'Road Safety',
        'badge'         => 'Road Safety',
        'image'         => 'assets/images/Highway_Safety_IT_Equipment.jpg',
        'description'   => 'Comprehensive highway safety including delineators, crash barriers, variable message signs and traffic management systems.',
        'client'        => 'Punjab Highway Department',
        'location'      => 'Punjab, Pakistan',
        'year'          => '2023',
        'features_json' => json_encode(['Variable Message Signs', 'Crash Barriers', 'Traffic Monitoring Cameras']),
        'featured'      => false,
        'sort_order'    => 5,
    ],
    [
        'title'         => 'LED Stadium & Street Lights',
        'slug'          => 'project-led-stadium-lights',
        'category'      => 'Electrical',
        'badge'         => 'LED Lighting',
        'image'         => 'assets/images/LED_Stadium_Street_Lights.jpg',
        'description'   => 'High-intensity LED stadium floodlights and smart street lighting for sports venues and urban roads.',
        'client'        => 'Sports Board Punjab',
        'location'      => 'Lahore, Pakistan',
        'year'          => '2022',
        'features_json' => json_encode(['High-intensity LED Floods', 'Smart Dimming Control', 'Energy Savings 60%+']),
        'featured'      => false,
        'sort_order'    => 6,
    ],
    [
        'title'         => 'Security Surveillance System',
        'slug'          => 'project-security-surveillance',
        'category'      => 'Security',
        'badge'         => 'Physical Security',
        'image'         => 'assets/images/Security_Surveillance_System.jpg',
        'description'   => 'Integrated perimeter security with electric fencing, CCTV, access control and security guard management.',
        'client'        => 'Industrial Zone Authority',
        'location'      => 'Karachi & Lahore',
        'year'          => '2024',
        'features_json' => json_encode(['Electric Perimeter Fence', 'IP CCTV Integration', 'Guard Tour Management']),
        'featured'      => false,
        'sort_order'    => 7,
    ],
    [
        'title'         => 'Universal IP Controller',
        'slug'          => 'project-universal-ip-controller',
        'category'      => 'IT Automation',
        'badge'         => 'IT Automation',
        'image'         => 'assets/images/Universal_IP_Controller.jpg',
        'description'   => 'Custom-developed universal IP controller for integrating diverse access control, barrier, and sensor systems.',
        'client'        => 'Various Smart City Projects',
        'location'      => 'Pakistan',
        'year'          => '2023',
        'features_json' => json_encode(['Multi-protocol Support', 'Real-time Dashboard', 'Cloud Integration']),
        'featured'      => false,
        'sort_order'    => 8,
    ],
];

foreach ($projects as $projectData) {
    Project::firstOrCreate(['slug' => $projectData['slug']], $projectData);
}

echo "✅ All seed data inserted successfully!\n";
echo "Pages: " . Page::count() . "\n";
echo "Services: " . Service::count() . "\n";
echo "Projects: " . Project::count() . "\n";
