<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="kisspng-earth-world-map-globe-vector-hand-planet-5a9af8cfde0632.1928504515201056799094.png" rel="icon"
        type="image/x-icon">
    <title>Find E-Waste Facilities in India | EcoRecycle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>

    <style>
        .facility-card {
            transition: all 0.3s ease;
        }

        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .pagination-btn.active {
            background-color: #059669;
            color: white;
        }

        .hindi-text {
            font-family: 'Noto Sans Devanagari', sans-serif;
        }
    </style>
</head>

<body class="font-['Poppins'] bg-gray-50">
    <?php
    // Complete Database of Indian E-Waste Facilities with all required fields
    $ewaste_facilities = [
        // Maharashtra
        [
            "name" => "EcoRecycle Mumbai",
            "pincode" => "400001",
            "state" => "Maharashtra",
            "address" => "Fort, Mumbai",
            "contact" => "Rahul Sharma - 9876543210",
            "types" => ["drop-off", "certified"],
            "description" => "Accepts all types of e-waste with proper documentation",
            "rating" => 4.5,
            "icon" => "recycle"
        ],
        [
            "name" => "GreenTech Dharavi",
            "pincode" => "400017",
            "state" => "Maharashtra",
            "address" => "Dharavi, Mumbai",
            "contact" => "Priya Patel - 8765432109",
            "types" => ["retail"],
            "description" => "Collection point for small electronics and mobile devices",
            "rating" => 4,
            "icon" => "mobile-alt"
        ],
        [
            "name" => "EcoTech Mumbai Central",
            "pincode" => "400008",
            "state" => "Maharashtra",
            "address" => "Ground Floor, Forbes Building, Dr. D.N. Road, Fort, Mumbai",
            "contact" => "Rajiv Mehta - 9876543210",
            "types" => ["drop-off", "certified"],
            "description" => "Full-service e-waste recycling center with data destruction",
            "rating" => 4.3,
            "icon" => "recycle"
        ],
        [
            "name" => "GreenHub Andheri East",
            "pincode" => "400069",
            "state" => "Maharashtra",
            "address" => "Unit No. 5, Marol MIDC Industrial Estate, Andheri East, Mumbai",
            "contact" => "Priya Desai - 8765432109",
            "types" => ["retail", "repair"],
            "description" => "Accepts electronics and offers repair services",
            "rating" => 3.9,
            "icon" => "tools"
        ],
        [
            "name" => "Pune Eco Center",
            "pincode" => "411001",
            "state" => "Maharashtra",
            "address" => "1256, FC Road, Shivajinagar, Pune",
            "contact" => "Amit Joshi - 7654321098",
            "types" => ["drop-off"],
            "description" => "Collection center for computers and office equipment",
            "rating" => 4.1,
            "icon" => "laptop"
        ],

        // Delhi/NCR
        [
            "name" => "Delhi E-Waste Solutions",
            "pincode" => "110001",
            "state" => "Delhi",
            "address" => "Shop No. 12, Statesman House, Barakhamba Road, Connaught Place",
            "contact" => "Rohit Malhotra - 9876543211",
            "types" => ["municipal", "certified"],
            "description" => "Government authorized e-waste collection center",
            "rating" => 4.2,
            "icon" => "trash-alt"
        ],
        [
            "name" => "GreenTech Noida",
            "pincode" => "201301",
            "state" => "Uttar Pradesh",
            "address" => "B-45, Sector 62, Near Ganga Shopping Complex, Noida",
            "contact" => "Shweta Singh - 8765432110",
            "types" => ["retail", "certified"],
            "description" => "Accepts all electronics including TVs and appliances",
            "rating" => 4.0,
            "icon" => "store"
        ],
        [
            "name" => "Gurugram Recycle Hub",
            "pincode" => "122001",
            "state" => "Haryana",
            "address" => "32, MG Road, Opposite Galleria Market",
            "contact" => "Akshay Kumar - 7654321109",
            "types" => ["drop-off", "certified"],
            "description" => "Full-service e-waste recycling with certificate",
            "rating" => 4.5,
            "icon" => "recycle"
        ],

        // Karnataka
        [
            "name" => "Bangalore Eco Center",
            "pincode" => "560001",
            "state" => "Karnataka",
            "address" => "No. 24, Unity Building, Mahatma Gandhi Road, Bangalore",
            "contact" => "Ananya Reddy - 9876543222",
            "types" => ["drop-off"],
            "description" => "Accepts computers, laptops and office equipment",
            "rating" => 4.7,
            "icon" => "laptop"
        ],
        [
            "name" => "E-Waste Hub Whitefield",
            "pincode" => "560066",
            "state" => "Karnataka",
            "address" => "Plot No. 7, ITPL SEZ, Whitefield Main Road, Bangalore",
            "contact" => "Ramesh Iyer - 8765432221",
            "types" => ["drop-off", "certified"],
            "description" => "Specializes in IT equipment recycling",
            "rating" => 4.4,
            "icon" => "server"
        ],

        // Tamil Nadu
        [
            "name" => "Chennai E-Waste Hub",
            "pincode" => "600001",
            "state" => "Tamil Nadu",
            "address" => "Door No. 15, Moore Street, Parrys Corner, Chennai",
            "contact" => "Karthik Sundar - 9876554321",
            "types" => ["retail", "certified"],
            "description" => "Authorized collection center with data destruction services",
            "rating" => 4.3,
            "icon" => "hard-drive"
        ],

        // West Bengal
        [
            "name" => "Kolkata Green Collectors",
            "pincode" => "700001",
            "state" => "West Bengal",
            "address" => "4th Floor, Lindsay Street, Opposite New Market, BBD Bagh, Kolkata",
            "contact" => "Debashis Roy - 9876555555",
            "types" => ["drop-off", "municipal"],
            "description" => "Municipal e-waste collection facility",
            "rating" => 3.9,
            "icon" => "trash-restore"
        ],
        [
            "name"=> "Siliguri Eco Recycle Hub",
            "pincode"=> "734001",
            "state"=> "West Bengal",
            "address"=> "2nd Floor, Hill Cart Road, Near Siliguri Junction, Siliguri",
            "contact"=> "Ananya Chatterjee - 9876543210",
            "types"=> ["drop-off", "recycling"],
            "description"=> "E-waste recycling center with proper disposal facilities",
            "rating"=> 4.2,
            "icon"=> "recycle"
        ],

        [
            "name"=> "Durgapur E-Waste Center",
            "pincode"=> "713216",
            "state"=> "West Bengal",
            "address"=> "City Center, Bidhan Nagar, Durgapur",
            "contact"=> "Rajiv Bose - 9832112345",
            "types"=> ["drop-off", "buyback"],
            "description"=> "Accepts all types of electronic waste with buyback options for certain items",
            "rating"=> 4.0,
            "icon"=> "cash-refund"
        ],

        // Gujarat
        [
            "name" => "Ahmedabad Eco Center",
            "pincode" => "380001",
            "state" => "Gujarat",
            "address" => "Shop No. 3, Swastik Cross Road, Navrangpura, Ahmedabad",
            "contact" => "Jay Patel - 9876544333",
            "types" => ["retail", "certified"],
            "description" => "Accepts all electronic items including large appliances",
            "rating" => 4.1,
            "icon" => "tv"
        ],

        // Kerala
        [
            "name" => "Kochi E-Waste Recyclers",
            "pincode" => "682001",
            "state" => "Kerala",
            "address" => "Building No. 28/345, Marine Drive, Ernakulam, Kochi",
            "contact" => "Suresh Nair - 9895123456",
            "types" => ["drop-off"],
            "description" => "Environment friendly e-waste recycling",
            "rating" => 4.4,
            "icon" => "recycle"
        ],

        // Punjab
        [
            "name" => "Chandigarh Green Tech",
            "pincode" => "160001",
            "state" => "Punjab",
            "address" => "SCO 45, Sector 17-C, Near Neelam Cinema, Chandigarh",
            "contact" => "Harpreet Kaur - 9876549876",
            "types" => ["retail", "certified"],
            "description" => "Collection center with buyback options",
            "rating" => 4.0,
            "icon" => "store"
        ],

        // Uttar Pradesh
        [
            "name" => "Lucknow Eco Solutions",
            "pincode" => "226001",
            "state" => "Uttar Pradesh",
            "address" => "12/34, Hazratganj Market, Opposite Janpath Market, Lucknow",
            "contact" => "Alok Verma - 8877665544",
            "types" => ["drop-off"],
            "description" => "Accepts all types of electronic waste",
            "rating" => 3.8,
            "icon" => "recycle"
        ],

        // Andhra Pradesh
        [
            "name" => "Vizag E-Waste Point",
            "pincode" => "530001",
            "state" => "Andhra Pradesh",
            "address" => "Door No. 5-6-7, Waltair Main Road, Opposite Port Stadium, Visakhapatnam",
            "contact" => "Raju Naidu - 7654321890",
            "types" => ["drop-off", "certified"],
            "description" => "Coastal e-waste recycling center",
            "rating" => 3.7,
            "icon" => "recycle"
        ],

        // Madhya Pradesh
        [
            "name" => "Bhopal Recycle Hub",
            "pincode" => "462001",
            "state" => "Madhya Pradesh",
            "address" => "Plot No. 56, Zone-II, MP Nagar, Near DB Mall, Bhopal",
            "contact" => "Anjali Dubey - 8765432198",
            "types" => ["municipal"],
            "description" => "Government approved recycling facility",
            "rating" => 3.5,
            "icon" => "trash-alt"
        ],

        // Bihar
        [
            "name" => "Patna Eco Collectors",
            "pincode" => "800001",
            "state" => "Bihar",
            "address" => "Shop No. 12, Fraser Road, Near Gandhi Maidan, Patna",
            "contact" => "Rakesh Kumar - 9876543217",
            "types" => ["drop-off"],
            "description" => "Basic e-waste collection service",
            "rating" => 3.2,
            "icon" => "recycle"
        ],

        // Odisha
        [
            "name" => "Bhubaneswar Green Hub",
            "pincode" => "751001",
            "state" => "Odisha",
            "address" => "Plot No. 403, Janpath Road, Unit-III, Bhubaneswar",
            "contact" => "Madhurima Das - 8765432176",
            "types" => ["drop-off", "certified"],
            "description" => "Eastern India's premier recycling center",
            "rating" => 4.0,
            "icon" => "recycle"
        ],

        // Assam
        [
            "name" => "Guwahati E-Waste Center",
            "pincode" => "781001",
            "state" => "Assam",
            "address" => "House No. 34, GS Road, Christian Basti, Guwahati",
            "contact" => "Bikram Baruah - 9876543278",
            "types" => ["drop-off"],
            "description" => "North-East's leading e-waste facility",
            "rating" => 3.9,
            "icon" => "recycle"
        ],

        // Jammu & Kashmir
        [
            "name" => "Srinagar Eco Recyclers",
            "pincode" => "190001",
            "state" => "Jammu & Kashmir",
            "address" => "Residency Road, Near Lal Chowk, Srinagar",
            "contact" => "Farooq Ahmed - 9876543298",
            "types" => ["drop-off"],
            "description" => "Kashmir valley's only certified e-waste center",
            "rating" => 3.6,
            "icon" => "recycle"
        ],

        // Goa
        [
            "name" => "Goa Eco Recyclers",
            "pincode" => "403001",
            "state" => "Goa",
            "address" => "Shop No. 8, 18th June Road, Opposite Municipal Garden, Panaji",
            "contact" => "Rohan Naik - 9876549999",
            "types" => ["retail", "certified"],
            "description" => "Beach-side e-waste collection point",
            "rating" => 4.2,
            "icon" => "recycle"
        ]
    ];

    // Process search if form submitted
    $search_results = [];
    $search_performed = false;
    $search_pincode = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pincode"])) {
        $search_pincode = trim($_POST["pincode"]);
        $search_results = array_filter($ewaste_facilities, function ($f) use ($search_pincode) {
            return $f["pincode"] == $search_pincode;
        });
        $search_performed = true;
    }
    ?>

    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="Home.php" class="flex items-center gap-2">
                <i class="fas fa-recycle text-emerald-600 text-2xl"></i>
                <span class="text-xl font-bold text-emerald-600">EcoRecycle India</span>
            </a>
            <div class="hidden md:flex gap-8">
                <a href="index.php" class="text-gray-600 hover:text-emerald-600">Home</a>
                <a href="Facility.php" class="text-emerald-600 font-medium">Facilities</a>
                <a href="Resources.html" class="text-gray-600 hover:text-emerald-600">Resources</a>
                <a href="contact.php" class="text-gray-600 hover:text-emerald-600">Contact</a>
            </div>
            <button id="mobileMenuBtn" class="md:hidden text-emerald-600">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white py-4 px-4 border-t">
            <a href="Home.php" class="block py-2 text-emerald-600">Home</a>
            <a href="Facility.php" class="block py-2 text-gray-600">Facilities</a>
            <a href="Resources.html" class="block py-2 text-gray-600">Resources</a>
            <a href="contact.php" class="block py-2 text-gray-600">Contact</a>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="bg-[linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('bg-facility.jpg')] bg-cover bg-center text-white py-16 h-[400px]">
        <div class="container mx-auto px-4 text-center mt-[80px]">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Find E-Waste Facilities in India</h1>
            <p class="text-lg max-w-2xl mx-auto">Locate authorized e-waste collection centers by pincode</p>
        </div>
    </header>

    <div class="flex space-x-[80px] h-[650px]">
        <div id="waste-Ani" class="w-[600px] h-[600px] m-[50px] ml-[100px]">
            <img src="data:image/png;base64," alt="Checkin Icon" class="hidden">
        </div>
        <div class="mt-[300px] text-center">
            <h1 class="font-bold text-5xl">
                <span class="text-green-500">"Locate</span> Us
                <span class="text-stone-400"> Now</span>
                <span class="text-green-400">"</span>
            </h1>
        </div>
    </div>

    <script>
        var animation = lottie.loadAnimation({
            container: document.getElementById('waste-Ani'), 
            renderer: 'svg', 
            loop: true, 
            autoplay: true, 
            path: 'Locator.json' 
        });
    </script>

    <!-- Search Section -->
    <section class="container mx-auto px-4 py-8">
        <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
            <h2 class="text-xl font-semibold mb-4 text-center">Search by Indian Pincode</h2>
            <form method="POST" class="flex flex-col sm:flex-row gap-2">
                <input type="text" name="pincode" id="pincodeInput" placeholder="Enter 6-digit pincode"
                    class="flex-grow px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-400"
                    pattern="[0-9]{6}" title="Please enter a valid 6-digit Indian pincode" required
                    value="<?php echo htmlspecialchars($search_pincode); ?>">
                <button type="submit"
                    class="bg-emerald-500 hover:bg-emerald-600 text-white font-medium px-6 py-2 rounded-lg transition">
                    Search <i class="fas fa-search ml-1"></i>
                </button>
            </form>
            <p class="text-sm text-gray-500 mt-2">Example: 400001 for Mumbai, 110001 for Delhi</p>
        </div>
    </section>

    <!-- Facilities List -->
    <main class="container mx-auto px-4 py-8">
        <?php if ($search_performed): ?>
            <?php if (!empty($search_results)): ?>
                <h3 class="text-xl font-semibold mb-6">
                    Found <?php echo count($search_results); ?> facilities for pincode <?php echo htmlspecialchars($search_pincode); ?>
                </h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($search_results as $facility): ?>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden facility-card">
                            <div class="h-40 bg-emerald-100 flex items-center justify-center">
                                <i class="fas fa-<?php echo isset($facility['icon']) ? $facility['icon'] : 'recycle'; ?> text-5xl text-emerald-600"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($facility['name']); ?></h3>
                                <p class="text-gray-600 mb-4">
                                    <i class="fas fa-map-marker-alt text-emerald-500 mr-2"></i>
                                    <?php echo htmlspecialchars($facility['address']); ?>
                                </p>
                                <?php if (isset($facility['types']) && is_array($facility['types'])): ?>
                                    <div class="mb-4">
                                        <?php foreach ($facility['types'] as $type): ?>
                                            <span class="bg-emerald-100 text-emerald-800 text-sm px-2 py-1 rounded mr-1">
                                                <?php echo ucfirst($type); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($facility['description'])): ?>
                                    <p class="text-gray-700 mb-4"><?php echo htmlspecialchars($facility['description']); ?></p>
                                <?php endif; ?>
                                <div class="flex justify-between items-center">
                                    <a href="https://maps.google.com/?q=<?php echo urlencode($facility['address']); ?>"
                                        target="_blank"
                                        class="text-emerald-600 hover:underline">
                                        View on Map
                                    </a>
                                    <?php if (isset($facility['rating'])): ?>
                                        <span class="text-yellow-500">
                                            <?php
                                            $fullStars = floor($facility['rating']);
                                            $hasHalfStar = ($facility['rating'] - $fullStars) >= 0.5;

                                            for ($i = 0; $i < $fullStars; $i++) {
                                                echo '<i class="fas fa-star"></i>';
                                            }
                                            if ($hasHalfStar) {
                                                echo '<i class="fas fa-star-half-alt"></i>';
                                            }
                                            for ($i = $fullStars + ($hasHalfStar ? 1 : 0); $i < 5; $i++) {
                                                echo '<i class="far fa-star"></i>';
                                            }
                                            ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="col-span-full text-center py-12">
                    <i class="fas fa-search text-4xl text-gray-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-600">No facilities found for pincode <?php echo htmlspecialchars($search_pincode); ?></h3>
                    <p class="text-gray-500">Try searching nearby pincodes or contact your local municipal corporation</p>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <!-- Default view when no search performed -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                // Show sample facilities (first 6) when no search is performed
                $sample_facilities = array_slice($ewaste_facilities, 0, 6);
                foreach ($sample_facilities as $facility): ?>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden facility-card">
                        <div class="h-40 bg-emerald-100 flex items-center justify-center">
                            <i class="fas fa-<?php echo $facility['icon']; ?> text-5xl text-emerald-600"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($facility['name']); ?></h3>
                            <p class="text-gray-600 mb-4">
                                <i class="fas fa-map-marker-alt text-emerald-500 mr-2"></i>
                                <?php echo htmlspecialchars($facility['address']); ?>
                            </p>
                            <div class="mb-4">
                                <?php foreach ($facility['types'] as $type): ?>
                                    <span class="bg-emerald-100 text-emerald-800 text-sm px-2 py-1 rounded mr-1">
                                        <?php echo ucfirst($type); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                            <p class="text-gray-700 mb-4"><?php echo htmlspecialchars($facility['description']); ?></p>
                            <div class="flex justify-between items-center">
                                <span class="text-emerald-600">Pincode: <?php echo $facility['pincode']; ?></span>
                                <span class="text-yellow-500">
                                    <?php
                                    $fullStars = floor($facility['rating']);
                                    $hasHalfStar = ($facility['rating'] - $fullStars) >= 0.5;

                                    for ($i = 0; $i < $fullStars; $i++) {
                                        echo '<i class="fas fa-star"></i>';
                                    }
                                    if ($hasHalfStar) {
                                        echo '<i class="fas fa-star-half-alt"></i>';
                                    }
                                    for ($i = $fullStars + ($hasHalfStar ? 1 : 0); $i < 5; $i++) {
                                        echo '<i class="far fa-star"></i>';
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                        <i class="fas fa-recycle"></i> EcoRecycle India
                    </h3>
                    <p class="mb-4 text-gray-300">Helping India recycle electronics responsibly since 2023.</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="Home.php" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="facilities.html" class="text-gray-300 hover:text-white">Find Centers</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Accepted Items</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="Home.html" class="text-gray-300 hover:text-white">E-Waste Facts</a></li>
                        <li><a href="Facility.html" class="text-gray-300 hover:text-white">Recycling Process</a></li>
                        <li><a href="Resources.html" class="text-gray-300 hover:text-white">Data Security</a></li>
                        <li><a href="Contact.html" class="text-gray-300 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-map-marker-alt mt-1"></i>
                            <span>Tech Park, Sector V, Salt Lake, Kolkata - 700091</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-phone"></i>
                            <span>1800-123-456 (Toll Free)</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-envelope"></i>
                            <span>info@ecorecycleindia.org</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-6 text-center text-gray-400">
                <p>This initiative supports responsible e-waste management and sustainability in India.</p>
                <p class="mt-2">© 2023 EcoRecycle India. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Pincode input validation
        const pincodeInput = document.getElementById('pincodeInput');
        if (pincodeInput) {
            pincodeInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
                if (this.value.length > 6) {
                    this.value = this.value.slice(0, 6);
                }
            });
        }
    </script>
</body>
</html>