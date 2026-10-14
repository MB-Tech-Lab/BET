<?php
/**
 * Product Catalog Registry
 * Centralized database for all products including descriptions, specifications, applications, and FAQs.
 */

if (!function_exists('get_product_catalog')) {
    function get_product_catalog(): array {
        $catalog_asset = function(string $path): string {
            return function_exists('asset') ? asset($path) : 'assets/' . ltrim($path, '/');
        };

        return [
            'vacuum-leak-test-machine' => [
                'name' => 'Vacuum Leak Test Machine',
                'url_slug' => 'vacuum-leak-test-machine',
                'icon' => 'fa-solid fa-magnifying-glass',
                'category' => 'Bubble Leak Testers',
                'internal_url' => 'products/Vacuum_Leak_Test_Machine/Vacuum_Leak_Test_Machine.php',
                'image' => $catalog_asset('img/Vacuum Leak Test Machine/ASTM F2096/Vacuum Leak Test Machine F2096.jpeg'),
                'key' => 'leak_test',
                'overview' => 'Advanced vacuum and leak testing solutions designed to detect leaks and evaluate the integrity of packaging, sealed products, and components across multiple testing standards and applications.',
                'features' => [
                    'Fully compliant with ASTM F2096 standard test method.',
                    'Highly visible transparent acrylic chamber for clear bubble inspection.',
                    'Integrated low-pressure regulator with precise digital display.',
                    'Quick-clamp lid assembly for fast, repetitive cycle testing.',
                    'Durable sanitary stainless steel frame structure.'
                ],
                'specs' => [
                    'Standard Compliance' => 'ASTM F2096',
                    'Chamber Material' => 'Clear cast acrylic',
                    'Pressure Range' => '0 to 2 psi (adjustable)',
                    'Sensitivity' => 'Leaks down to 250 microns',
                    'Regulator Type' => 'High-precision digital low-pressure'
                ],
                'applications' => [
                    'Medical pouch package testing',
                    'Sterile barrier validation',
                    'Food packaging seal checks',
                    'Pharma packaging line QC'
                ],
                'subcategories' => [
                    'Internal_Pressurization_Bubble_Testing_System_for_ASTM_F2096' => 'ASTM F2096 — Internal Pressurization Bubble Leak Test',
                    'Vacuum_Leak_Test_for_Flexible_Packaging_ASTM_D3078' => 'ASTM D3078 — Vacuum Leak Test for Flexible Packaging',
                    'Vacuum_Leak_Test_for_Rigid_Bottles_ASTM_D4991' => 'ASTM D4991 — Vacuum Leak Test for Rigid Bottles & Containers',
                    'Vacuum_Leak_Test_for_Rigid_Containers_ASTM_D5094' => 'ASTM D5094 — Vacuum Leak Test for Rigid Containers & Closures',
                    'High_Altitude_Vacuum_Packaging_Test_ASTM_D6653' => 'ASTM D6653 — High-Altitude / Vacuum Packaging Test'
                ]
            ],
            'flat-vacuum-box-weld-testing' => [
                'name' => 'Flat Vacuum Box Weld Testing',
                'url_slug' => 'flat-vacuum-box-weld-testing',
                'icon' => 'fa-solid fa-border-all',
                'category' => 'Weld Testing Equipment',
                'internal_url' => 'products/flat-vacuum-box-weld-testing/flat-vacuum-box-weld-testing.php',
                'image' => $catalog_asset('img/Vacuum Box Weld Testing/Vacuum Box Weld Testing Equipment.jpeg'),
                'key' => 'weld_testing',
                'overview' => 'The Flat Vacuum Box Weld Testing system is engineered for NDT inspections of lap joints, butt welds, and shell plate welds in storage tanks, vessels, and piping systems, strictly adhering to API 650/653 standards.',
                'features' => [
                    'Adheres to API 650, API 653, and ASME Section V standards.',
                    'Rugged structural frame with high-impact viewing window.',
                    'Thick, flexible neoprene rubber seal for instant suction.',
                    'Integrated vacuum relief valve and quick-vent lever.',
                    'Vibration-resistant gauge for clear pressure readings.'
                ],
                'specs' => [
                    'Standard Compliance' => 'API 650, API 653, ASME Section V',
                    'Seal Material' => 'Heavy-duty closed-cell neoprene rubber',
                    'Window' => 'High-durability polycarbonate / acrylic',
                    'Vacuum Gauge' => 'Glycerine-filled, 0 to -30 inHg',
                    'Frame' => 'Sanitary powder-coated / stainless structure'
                ],
                'applications' => [
                    'Storage tank floor weld inspection',
                    'Pipeline weld integrity validation',
                    'Shipbuilding and maritime weld checks',
                    'Pressure vessel shell plate testing'
                ],
                'subcategories' => [
                    'flat-bottom-butt-weld' => 'Flat Bottom Vacuum box for testing butt welds on flat surfaces',
                    'inside-corner-vacuum-box' => 'Inside Corner Vacuum Box Bubble Leak Testing',
                    'flexible-flat-bottom' => 'Flexible Flat Bottom box for testing butt welds on flat surfaces',
                    'transparent-flat-bottom-butt' => 'Complete Transparent Flat Bottom Weld Test box for testing butt welds',
                    'angular-curved-surface' => 'Flexible Transparent Angular Weld Test Vacuum box',
                    'transparent-overlap-weld' => 'Complete Transparent Flat Bottom Weld Test box for overlap welds',
                    'sea-chest-angular' => 'Sea Chest Angular Vacuum Weld Test box',
                    'outside-corner-vacuum' => 'Outside Corner Vacuum Weld Test Box',
                    'inner-edge-3x90' => '3x90 Degree Inner Edge Vacuum Weld Test Box',
                    'outer-edge-3x90' => '3x90 Degree Outside Edge Vacuum Weld Test Box'
                ]
            ],
            'vacuum-degassing-chamber' => [
                'name' => 'Vacuum Degassing Chamber',
                'url_slug' => 'vacuum-degassing-chamber',
                'icon' => 'fa-solid fa-wind',
                'category' => 'Vacuum Degassing Chambers',
                'internal_url' => 'products/vacuum_degassing_chamber/Vacuum_Degassing_Chamber.php',
                'image' => $catalog_asset('img/Vacuum Degassing Chamber/Vacuum Degassing Chamber.jpeg'),
                'key' => 'degassing_chamber',
                'overview' => 'BET Vacuum Degassing Chambers are high-strength stainless steel or acrylic chambers designed to remove trapped air bubbles from epoxy, silicone, urethane, and other viscous compounds prior to molding or curing.',
                'features' => [
                    'Available in vertical cylindrical and horizontal configurations.',
                    'Heavy-gauge stainless steel body with thick acrylic viewing lid.',
                    'Dual-valve assembly for fine vacuum control and air backfill.',
                    'Vibration-damping base pads for quiet lab operation.',
                    'Compatible with industrial vacuum pumps down to 10⁻² mbar.'
                ],
                'specs' => [
                    'Vacuum Level' => 'Down to 10⁻² mbar (rotary vane pump)',
                    'Body Material' => 'SS304 stainless steel or heavy acrylic',
                    'Lid Material' => 'Thick clear poly/acrylic window',
                    'Gasket Seal' => 'Silicone self-sealing design',
                    'Gauge Type' => 'Bourdon tube analogue vacuum gauge'
                ],
                'applications' => [
                    'Epoxy, resin, and silicone degassing',
                    'Urethane mold pre-processing',
                    'Biomedical compound aeration',
                    'Laboratory polymer research'
                ],
                'subcategories' => [
                    'hvdc' => 'Stainless Steel Vacuum Degassing Chamber',
                    'avdccube' => 'Acrylic Vacuum Degassing Chamber – Cube',
                    'avdccylinder' => 'Acrylic Vacuum Degassing Chamber – Cylinder'
                ]
            ],
            'vacuum-glove-box' => [
                'name' => 'Vacuum Glove Box',
                'url_slug' => 'vacuum-glove-box',
                'icon' => 'fa-solid fa-hand',
                'category' => 'Vacuum Glove Boxes',
                'internal_url' => 'products/vacuum_glove_box/vacuum_glove_box.php',
                'image' => $catalog_asset('img/Glove Box\acrylic-vacuum-glove-box.webp'),
                'key' => 'glove_box',
                'overview' => 'The flagship Vacuum Glove Box by Burhani Engineering Technology features a hermetically sealed gas-purified containment boundary designed to establish a stable sub-1 ppm oxygen and moisture atmosphere.',
                'features' => [
                    'Evacuation-backfill design for quick inerting cycle.',
                    'Heavy-duty cast acrylic or metal body structural frame.',
                    'Argon/Nitrogen circulation loop with high-capacity blowers.',
                    'Dual purification columns (copper catalyst & zeolite).',
                    'ASME/DIN standard weld joints for strict vacuum integrity.'
                ],
                'specs' => [
                    'Ultimate Vacuum' => 'Down to 10⁻² mbar',
                    'Purity Level' => 'O₂ < 1 ppm, H₂O < 1 ppm',
                    'Control System' => 'PLC touch-screen automation system',
                    'Leak Rate' => '< 0.05 vol%/h (Class 1)',
                    'Window Panel' => 'Chemical resistant polycarbonate/acrylic'
                ],
                'applications' => [
                    'Air-sensitive material research',
                    'Pyrophoric metal processing',
                    'Organometallic chemical synthesis',
                    'High-purity laboratory containment'
                ],
                'subcategories' => [
                    'Acrylic_Vacuum_Glove_Box' => 'Acrylic Vacuum - Glove Box',
                    'argon-gas-glove-box' => 'Argon Gas Glove Box',
                    'compact-university-glove-box' => 'Compact University Glove Box',
                    'globe-box-dome-360-glove-chamber' => 'Globe Box Dome 360° Glove Chamber',
                    'negative-pressure-glove-box' => 'Negative Pressure Glove Box',
                    'nitrogen-purged-stainless-steel-glove-box' => 'Nitrogen Purged Stainless Steel Glove Box',
                    'Vacuum_GBMB' => 'Vacuum Glove Box - Metal Body'
                ],
                'subcategory_routes' => [
                    'acrylic-glove-box-with-transition-chamber' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Acrylic glove box With Transition Chamber/Acrylic Glove Box With Transition Chamber.php',
                    'acrylic-vacuum-glove-box-without-transition-chamber' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Acrylic Vacuum Glove Box Without Transition Chamber/Acrylic Vacuum Box Without Transition Chamber.php',
                    'argon-gas-purging-acrylic-vacuum-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box/Argon Gas Purging Acrylic Vacuum Glove Box.php',
                    'compact-university-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Compact university glove Box/Compact university Glove Box details.php',
                    'controlled-atmosphere-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Controlled Atmosphere Glove Box/Controlled Atmosphere Acrylic Glove Box.php',
                    'custom-vacuum-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Custom Vacuum Glove Box/Custom Vacuum Glove Box.php',
                    'four-port-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Four Port Acrylic Vacuum Glove Box/Four Port Acrylic Glove Box.php',
                    'hepa-filtered-acrylic-vacuum-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/HEPA Filtered Acrylic Glove Box/HEPA Filtered Acrylic Vacuum Glove Box.php',
                    'hepa-filtered-looped-negative-pressure-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/HEPA Filtered Looped Negative pressure Acrylic  Glove Box/Negative Pressure Glove Box.php',
                    'humidity-controlled-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Humidity-Controlled Acrylic Glove Box/Humidity Controlled Acrylic Glove Box.php',
                    'inert-purging-gas-acrylic-vacuum-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Inert Purging Gas Acrylic Vacuum Glove Box/Inert Gas Acrylic Glove Box.php',
                    'laboratory-anaerobic-workstation' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Laboratory Anaerobic Glove Box with Controlled Atmosphere Chamber for Bacterial Culture/laboratory anaerobic chamber for microbiology research.php',
                    'low-moisture-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Low -Moisture Acrylic Glove Box/Low- Moisture Acrylic Glove Box.php',
                    'low-oxygen-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Low-Oxygen Acrylic Glove Box/Low-Oxygen Acrylic Glove Box – Ultra-Low Oxygen Controlled Atmosphere System.php',
                    'negative-pressure-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Negative Pressure Acrylic Glove Box/Negative Pressure Acrylic Glove Box.php',
                    'nitrogen-purging-acrylic-glove-box-nitrogen-dry-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Nitrogen Purging Acrylic Glove Box  Nitrogen Dry Box/Nitrogen Purging Acrylic Glove Box.php',
                    'o2-moisture-rh-monitoring-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box/O₂ & Moisture  RH Monitoring Acrylic Glove Box.php',
                    'positive-pressure-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Positive Pressure Acrylic Glove Box/Positive Pressure Acrylic Glove Box.php',
                    'standard-acrylic-vacuum-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Standard Acylic Vacuum Glove Box/Standard Acrylic Vacuum Glove Box.php',
                    'temperature-and-humidity-controlled-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Temperature & Huidity controlled Acrylic Glove Box/Temperature And Humidity Controlled Acrylic Glove Box.php',
                    'three-port-acrylic-vacuum-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Three Port Acrylic Vacuum Glove Box/Three Port Acrylic Vacuum Glove Box.php',
                    'two-port-acrylic-vacuum-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Two Port Acrylic Vacuum Glove Box/Acrylic Vacuum Glove Box.php',
                    'vacuum-cycling-acrylic-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Vacuum Cycling Acrylic Glove Box/Vacuum Cycling Acrylic Glove Box.php',
                    'explosion-proof-acrylic-vacuum-glove-box' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Explosion proof glove box/Explosion Proof Acrylic Vacuum Glove Box.php',
                    'mobile-lightweight-vacuum-glove-box-small-labs' => 'products/vacuum_glove_box/product-category/Acrylic Vacuum - Glove Box/Mobile Light Weight Vacuum Glove Box For Small Labs/Mobile Light Weight Vacuum Glove Box For Small Labs.php'
                ],
                // Standalone use-case pages living as siblings of the main product file (not under
                // product-category/). Each already builds its own locations/.../products/{slug}/
                // canonical URL (see products/vacuum_glove_box/*.php), so they must resolve the same
                // way subcategories do for location+product routing and sitemap generation, but they
                // are a distinct set from 'subcategories' because their files sit one level up.
                'standalone_pages' => [
                    'battery-research-glove-box' => 'Battery Research Glove Box',
                    'perovskite-solar-cell-glove-box' => 'Perovskite Solar Cell Glove Box',
                    'pharmaceutical-glove-box' => 'Pharmaceutical Glove Box',
                    'semiconductor-glove-box' => 'Semiconductor Glove Box'
                ]
            ],
            'two-port-glove-box' => [
                'name' => 'Stainless Steel Vacuum Glove Box 2 Port',
                'url_slug' => 'two-port-glove-box',
                'icon' => 'fa-solid fa-hand',
                'category' => 'Vacuum Glove Boxes',
                'internal_url' => 'products/vacuum_glove_box/product-category/Vacuum Glove Box - Metal Body/two-port-glove-box.php',
                'image' => $catalog_asset('img/Glove Box/Vacuum Glove Box - Metal Body/Two Port Glove Box Main/Two Port Glove Box Main pic 1.png'),
                'key' => 'two_port_glove_box',
                'overview' => 'Reliable Controlled-Environment Handling for Laboratory and Industrial Applications.',
                'features' => [
                    'Compact 2-port design for laboratory applications.',
                    'Heavy-duty stainless steel body.',
                    'Chemical resistant polycarbonate/acrylic window.',
                    'Stable sub-1 ppm oxygen and moisture atmosphere.'
                ],
                'specs' => [
                    'Ports' => '2',
                    'Body Material' => 'Stainless Steel',
                    'Window' => 'Polycarbonate/Acrylic',
                    'Purity Level' => 'O₂ < 1 ppm, H₂O < 1 ppm'
                ],
                'applications' => [
                    'Air-sensitive material research',
                    'Laboratory containment',
                    'Battery research'
                ]
            ],
            'three-port-glove-box' => [
                'name' => 'Stainless Steel Vacuum Glove Box 3 Port',
                'url_slug' => 'three-port-glove-box',
                'icon' => 'fa-solid fa-hand',
                'category' => 'Vacuum Glove Boxes',
                'internal_url' => 'products/vacuum_glove_box/product-category/Vacuum Glove Box - Metal Body/three-port-glove-box.php',
                'image' => $catalog_asset('img/Glove Box/Vacuum Glove Box - Metal Body/Three Port Glove Box Main/Three Port Glove Box Main pic 1.png'),
                'key' => 'three_port_glove_box',
                'overview' => 'Reliable Controlled-Environment Handling for Laboratory and Industrial Applications.',
                'features' => [],
                'specs' => [],
                'applications' => []
            ],
            'four-port-glove-box' => [
                'name' => 'Stainless Steel Vacuum Glove Box 4 Port',
                'url_slug' => 'four-port-glove-box',
                'icon' => 'fa-solid fa-hand',
                'category' => 'Vacuum Glove Boxes',
                'internal_url' => 'products/vacuum_glove_box/product-category/Vacuum Glove Box - Metal Body/four-port-glove-box.php',
                'image' => $catalog_asset('img/Glove Box/Vacuum Glove Box - Metal Body/Four Port Glove Box Main/Four Port Glove Box Main pic 1.png'),
                'key' => 'four_port_glove_box',
                'overview' => 'Reliable Controlled-Environment Handling for Laboratory and Industrial Applications.',
                'features' => [],
                'specs' => [],
                'applications' => []
            ],
            'four-port-glove-box-modular' => [
                'name' => '4 Port Stainless Steel Glove Box (Modular)',
                'url_slug' => 'four-port-glove-box-modular',
                'icon' => 'fa-solid fa-hand',
                'category' => 'Vacuum Glove Boxes',
                'internal_url' => 'products/vacuum_glove_box/product-category/Vacuum Glove Box - Metal Body/four-port-glove-box-modular.php',
                'image' => $catalog_asset('img/Glove Box/Vacuum Glove Box - Metal Body/Four Port Modular Glove Box Main/Four Port Modular Glove Box Main pic 1.png'),
                'key' => 'four_port_glove_box_modular',
                'overview' => 'Reliable Controlled-Environment Handling for Laboratory and Industrial Applications.',
                'features' => [],
                'specs' => [],
                'applications' => []
            ],
            'four-port-glove-box-two-sided' => [
                'name' => '4 Port Stainless Steel Glove Box Two Sided',
                'url_slug' => 'four-port-glove-box-two-sided',
                'icon' => 'fa-solid fa-hand',
                'category' => 'Vacuum Glove Boxes',
                'internal_url' => 'products/vacuum_glove_box/product-category/Vacuum Glove Box - Metal Body/four-port-glove-box-two-sided.php',
                'image' => $catalog_asset('img/Glove Box/Vacuum Glove Box - Metal Body/Four Port Two Sided Glove Box Main/Four Port Two Sided Glove Box Main pic 1.png'),
                'key' => 'four_port_glove_box_two_sided',
                'overview' => 'Reliable Controlled-Environment Handling for Laboratory and Industrial Applications.',
                'features' => [],
                'specs' => [],
                'applications' => []
            ],
            'six-port-glove-box-two-sided' => [
                'name' => 'Vacuum Six Port Glove Box Two Sided',
                'url_slug' => 'six-port-glove-box-two-sided',
                'icon' => 'fa-solid fa-hand',
                'category' => 'Vacuum Glove Boxes',
                'internal_url' => 'products/vacuum_glove_box/product-category/Vacuum Glove Box - Metal Body/six-port-glove-box-two-sided.php',
                'image' => $catalog_asset('img/Glove Box/Vacuum Glove Box - Metal Body/Six Port Two Sided Glove Box Main/Six Port Two Sided Glove Box Main pic 1.png'),
                'key' => 'six_port_glove_box_two_sided',
                'overview' => 'Reliable Controlled-Environment Handling for Laboratory and Industrial Applications.',
                'features' => [],
                'specs' => [],
                'applications' => []
            ],
            'eight-port-glove-box-two-sided' => [
                'name' => 'Vacuum Eight Port Glove Box Two Sided',
                'url_slug' => 'eight-port-glove-box-two-sided',
                'icon' => 'fa-solid fa-hand',
                'category' => 'Vacuum Glove Boxes',
                'internal_url' => 'products/vacuum_glove_box/product-category/Vacuum Glove Box - Metal Body/eight-port-glove-box-two-sided.php',
                'image' => $catalog_asset('img/Glove Box/Vacuum Glove Box - Metal Body/Eight Port Two Sided Glove Box Main/Eight Port Two Sided Glove Box Main pic 1.png'),
                'key' => 'eight_port_glove_box_two_sided',
                'overview' => 'Reliable Controlled-Environment Handling for Laboratory and Industrial Applications.',
                'features' => [],
                'specs' => [],
                'applications' => []
            ],
            'vacuum-chamber-sampler-vc20' => [
                'name' => 'Vacuum Chamber Sampler VC20',
                'url_slug' => 'vacuum-chamber-sampler-vc20',
                'icon' => 'fa-solid fa-vial',
                'category' => 'Air Sampling Equipment',
                'internal_url' => 'products/Vacuum_Chamber_Sampler_VC20/Vacuum_Chamber_Sampler_VC20.php',
                'image' => $catalog_asset('img/Vacuum Chamber Sampler VC20/Vacuum Chamber Sampler VC20.png'),
                'key' => 'vc20',
                'overview' => 'The Vacuum Chamber Sampler VC20 is a compact portable air sampling chamber designed for contamination-free gas and air sample collection in laboratory and field applications.',
                'features' => [
                    'Indirect vacuum bag sampling prevents pump contamination.',
                    'Built-in miniature pump achieving greater than 18" Hg vacuum.',
                    '12+ hours battery backup for extended field excursions.',
                    'PTFE tubing and built-in purge system for chemical resistance.',
                    'Transparent viewing chamber with integrated LED lighting.'
                ],
                'specs' => [
                    'Type' => 'Portable Air Sampling Chamber Machine',
                    'Sampling Method' => 'Indirect Vacuum Bag Sampling',
                    'Vacuum Pump' => 'Built-in Miniature Pump',
                    'Maximum Vacuum' => 'Greater than 18" Hg',
                    'Flow Rate' => 'Up to 12 LPM',
                    'Battery Backup' => '12+ Hours',
                    'Sample Capacity' => '75+ Samples',
                    'Charging' => '110/220V AC & 12V DC',
                    'Tubing' => 'PTFE',
                    'Lighting' => 'LED',
                    'Warranty' => '12 Months',
                    'Country' => 'Made in India'
                ],
                'applications' => [
                    'Ambient Air Sampling',
                    'Industrial Hygiene Monitoring',
                    'Odor Sampling',
                    'Wastewater Treatment Plants',
                    'Landfill Monitoring',
                    'Compost Facilities',
                    'Oil & Gas Industry',
                    'Research Laboratories',
                    'Environmental Monitoring'
                ]
            ],
            'transparent-vacuum-and-pressure-vessels' => [
                'name' => 'Transparent Vacuum & Pressure Vessel',
                'url_slug' => 'transparent-vacuum-and-pressure-vessels',
                'icon' => 'fa-solid fa-eye',
                'category' => 'Vacuum Vessels',
                'internal_url' => 'products/Transparent_Vacuum_and_Pressure_Vessels/Transparent_Vacuum_and_Pressure_Vessels.php',
                'image' => $catalog_asset('img/Transparent Vacuum and Pressure Vessel/transparent pressure vessels.webp'),
                'key' => 'pressure_vessel',
                'overview' => 'Designed for testing under high vacuum or positive pressure, our transparent vessels are constructed of thick, heavy-duty cast acrylic, allowing 360-degree visual monitoring of samples and bubbles during testing.',
                'features' => [
                    'High-clarity cast acrylic walls for unobstructed visual access.',
                    'O-ring silicone gasket seal design for reliable vacuum retention.',
                    'Configurable ports for vacuum gauges, pumps, and valves.',
                    'Safe operation under full vacuum (-29.9 inHg) and low positive pressure.',
                    'Custom size and shape fabrication available.'
                ],
                'specs' => [
                    'Ultimate Vacuum' => 'Down to 10⁻¹ mbar',
                    'Max Pressure' => 'Up to 15 psi (configured models)',
                    'Wall Thickness' => '25mm to 50mm cast acrylic',
                    'Gasket Seal' => 'Silicone / Viton O-ring',
                    'Ports' => 'Standard NPT vacuum ports'
                ],
                'applications' => [
                    'Submerged bubble leak detection',
                    'Vacuum degas observation',
                    'Biomedical component testing',
                    'Electronic package validation'
                ]
            ],
            'ats-pressure-aging-vessel' => [
                'name' => 'ATS Pressure Aging Vessel',
                'url_slug' => 'ats-pressure-aging-vessel',
                'icon' => 'fa-solid fa-temperature-high',
                'category' => 'Asphalt Testing Equipment',
                'internal_url' => 'products/ATS_Pressure_Aging_Vessel_Asphalt_Binding Testing/ATS_Pressure_Aging_Vessel.php',
                'image' => $catalog_asset('img/ATS Pressure Aging Vessle/ATS Pressure Aging Vessle.png'),
                'key' => 'ats_pav',
                'overview' => 'The ATS Pressure Aging Vessel (PAV) is a high-precision, PLC-controlled asphalt binder testing system designed to simulate in-service oxidative aging of asphalt binders in accordance with ASTM and AASHTO standards.',
                'features' => [
                    'Meets ASTM D6521 and AASHTO R28 standard requirements.',
                    'Advanced PLC touch-screen controller for automated heating and pressure cycles.',
                    'Heavy-duty stainless steel ASME-certified pressure vessel.',
                    'Precision temperature control up to 110°C with stability of ±0.1°C.',
                    'Automatic pressure release and safety interlock mechanisms.'
                ],
                'specs' => [
                    'Standard Compliance' => 'ASTM D6521, AASHTO R28',
                    'Operating Temperature' => '80°C to 110°C (±0.1°C stability)',
                    'Operating Pressure' => '2.10 MPa (±0.05 MPa stability)',
                    'Vessel Capacity' => '10 standard sample pans',
                    'Control Interface' => 'Color touchscreen PLC controller'
                ],
                'applications' => [
                    'Asphalt binder quality control',
                    'Transportation engineering research',
                    'Highway and road construction material testing',
                    'Polymer modified asphalt R&D'
                ],
                'subcategories' => [
                    'Acrylic_Vacuum_Chamber_Cube' => 'Acrylic Vacuum Chamber Cube',
                    'Acrylic_Vacuum_Chamber_Cylinder' => 'Acrylic Vacuum Chamber Cylinder',
                    'Stainless_Steel_Cube_Vacuum_Chamber' => 'Stainless Steel Cube Vacuum Chamber',
                    'Stainless_Steel_Cylinder_Vacuum_Chamber' => 'Stainless Steel Cylinder Vacuum Chamber',
                    'Horizontal_Industrial_Vacuum_Chamber' => 'Stainless Steel Vacuum Degassing Chamber',
                    'Vacuum_Degassing_Chamber' => 'Vacuum Degassing Chamber',
                    'Heated_Vacuum_Chamber-Oven' => 'Heated Vacuum Chamber-Oven',
                    'Heated_Vacuum_Degassing_Chamber' => 'Heated Vacuum Degassing Chamber'
                ]
            ],
            'pcr-chambers' => [
                'name' => 'PCR Chambers',
                'url_slug' => 'pcr-chambers',
                'icon' => 'bi bi-virus',
                'category' => 'Laboratory Chambers',
                'internal_url' => 'products/pcr-chambers/pcr_chambers.php',
                'image' => $catalog_asset('img/Compact PCR Chambers/Compact PCR Chambers 5.jpg'),
                'key' => 'pcr_chambers',
                'overview' => 'BET PCR Chambers provide a sterile, controlled environment for contamination-free PCR preparation and DNA/RNA handling. Featuring HEPA filtration and UV sterilization.',
                'features' => [
                    'HEPA Filtration system',
                    'UV Sterilization lamp',
                    'LED Illumination',
                    'Transparent Acrylic body',
                    'Low Noise operation',
                    'Bench-top Design'
                ],
                'specs' => [
                    'Filtration' => 'HEPA Filter',
                    'Sterilization' => 'UV Lamp',
                    'Lighting' => 'LED Lamp',
                    'Material' => 'Transparent Acrylic',
                    'Noise Level' => 'Low Noise'
                ],
                'applications' => [
                    'PCR Preparation',
                    'DNA Extraction',
                    'RNA Handling',
                    'Clinical Diagnostics',
                    'Biotechnology'
                ],
                'subcategories' => [
                    'compact-pcr-chambers' => 'Compact PCR Chambers',
                    'pcr-chambers-big' => 'PCR Chambers Big'
                ]
            ],
            'sealing-testing-chamber' => [
                'name' => 'Sealing Testing Chamber',
                'url_slug' => 'sealing-testing-chamber',
                'icon' => 'fa-solid fa-cube',
                'category' => 'Testing Chambers',
                'internal_url' => 'products/sealing-testing-chamber/sealing_testing_chamber.php',
                'image' => $catalog_asset('img/Sealing Testing Chamber/Sealing Testing Chamber (1) front view.png'),
                'key' => 'sealing_testing_chamber',
                'overview' => 'High-performance sealing testing chamber designed for accurate vacuum leak detection, seal integrity verification, and quality control in pharmaceutical, food, medical, and industrial packaging applications.',
                'features' => [
                    '100% Airtight Chamber',
                    'Crystal Clear Transparent Construction',
                    'Heavy Duty Silicone Seal',
                    'Premium Rubber Gloves',
                    'Stainless Steel Hardware',
                    'Precision Vacuum Connection',
                    'Instrument Feedthroughs',
                    'Cable Ports',
                    'Custom Configurations',
                    'Easy Cleaning',
                    'Continuous Laboratory Operation'
                ],
                'specs' => [
                    'Chamber Material' => 'High Clarity Transparent Material',
                    'Sealing Type' => 'Heavy Duty Silicone Seal',
                    'Hardware' => 'Stainless Steel Hardware',
                    'Vacuum Connection' => 'Precision Vacuum Connection',
                    'Customization' => 'Custom Configurations Available'
                ],
                'applications' => [
                    'Pharmaceutical Packaging Testing',
                    'Food Packaging Quality Control',
                    'Medical Device Packaging Validation',
                    'Flexible Pouch Leak Testing',
                    'Vacuum Seal Integrity Testing',
                    'Research Laboratories',
                    'Environmental Testing',
                    'Gas Containment',
                    'Industrial QA',
                    'Packaging Material Evaluation'
                ]
            ]
        ];
    }
}
