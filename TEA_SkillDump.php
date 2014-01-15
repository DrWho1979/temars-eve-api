<?php
/**************************************************************************
 ESAM (EVE to SMF API Module)
 Copyright (C) 2009  Clinton Weiss

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
 **************************************************************************/
// Stolen for TEA!
// yes, this is ugly
function getSkillArray()
{
        $skillArrayDump['2403'] = "Advanced Planetology";
        $skillArrayDump['2406'] = "Planetology";
        $skillArrayDump['2495'] = "Interplanetary Consolidation";
        $skillArrayDump['2505'] = "Command Center Upgrades";
        $skillArrayDump['3184'] = "ORE Industrial";
        $skillArrayDump['3300'] = "Gunnery";
        $skillArrayDump['3301'] = "Small Hybrid Turret";
        $skillArrayDump['3302'] = "Small Projectile Turret";
        $skillArrayDump['3303'] = "Small Energy Turret";
        $skillArrayDump['3304'] = "Medium Hybrid Turret";
        $skillArrayDump['3305'] = "Medium Projectile Turret";
        $skillArrayDump['3306'] = "Medium Energy Turret";
        $skillArrayDump['3307'] = "Large Hybrid Turret";
        $skillArrayDump['3308'] = "Large Projectile Turret";
        $skillArrayDump['3309'] = "Large Energy Turret";
        $skillArrayDump['3310'] = "Rapid Firing";
        $skillArrayDump['3311'] = "Sharpshooter";
        $skillArrayDump['3312'] = "Motion Prediction";
        $skillArrayDump['3315'] = "Surgical Strike";
        $skillArrayDump['3316'] = "Controlled Bursts";
        $skillArrayDump['3317'] = "Trajectory Analysis";
        $skillArrayDump['3318'] = "Weapon Upgrades";
        $skillArrayDump['3319'] = "Missile Launcher Operation";
        $skillArrayDump['3320'] = "Rockets";
        $skillArrayDump['3321'] = "Light Missiles";
        $skillArrayDump['3322'] = "Auto-Targeting Missiles";
        $skillArrayDump['3323'] = "Defender Missiles";
        $skillArrayDump['3324'] = "Heavy Missiles";
        $skillArrayDump['3325'] = "Torpedoes";
        $skillArrayDump['3326'] = "Cruise Missiles";
        $skillArrayDump['3327'] = "Spaceship Command";
        $skillArrayDump['3328'] = "Gallente Frigate";
        $skillArrayDump['3329'] = "Minmatar Frigate";
        $skillArrayDump['3330'] = "Caldari Frigate";
        $skillArrayDump['3331'] = "Amarr Frigate";
        $skillArrayDump['3332'] = "Gallente Cruiser";
        $skillArrayDump['3333'] = "Minmatar Cruiser";
        $skillArrayDump['3334'] = "Caldari Cruiser";
        $skillArrayDump['3335'] = "Amarr Cruiser";
        $skillArrayDump['3336'] = "Gallente Battleship";
        $skillArrayDump['3337'] = "Minmatar Battleship";
        $skillArrayDump['3338'] = "Caldari Battleship";
        $skillArrayDump['3339'] = "Amarr Battleship";
        $skillArrayDump['3340'] = "Gallente Industrial";
        $skillArrayDump['3341'] = "Minmatar Industrial";
        $skillArrayDump['3342'] = "Caldari Industrial";
        $skillArrayDump['3343'] = "Amarr Industrial";
        $skillArrayDump['3344'] = "Gallente Titan";
        $skillArrayDump['3345'] = "Minmatar Titan";
        $skillArrayDump['3346'] = "Caldari Titan";
        $skillArrayDump['3347'] = "Amarr Titan";
        $skillArrayDump['3348'] = "Leadership";
        $skillArrayDump['3349'] = "Skirmish Warfare";
        $skillArrayDump['3350'] = "Siege Warfare";
        $skillArrayDump['3351'] = "Siege Warfare Specialist";
        $skillArrayDump['3352'] = "Information Warfare Specialist";
        $skillArrayDump['3354'] = "Warfare Link Specialist";
        $skillArrayDump['3355'] = "Social";
        $skillArrayDump['3356'] = "Negotiation";
        $skillArrayDump['3357'] = "Diplomacy";
        $skillArrayDump['3358'] = "Fast Talk";
        $skillArrayDump['3359'] = "Connections";
        $skillArrayDump['3361'] = "Criminal Connections";
        $skillArrayDump['3362'] = "DED Connections";
        $skillArrayDump['3363'] = "Corporation Management";
        $skillArrayDump['3364'] = "Station Management";
        $skillArrayDump['3365'] = "Starbase Management";
        $skillArrayDump['3366'] = "Factory Management";
        $skillArrayDump['3367'] = "Refinery Management";
        $skillArrayDump['3368'] = "Diplomatic Relations";
        $skillArrayDump['3369'] = "CFO Training";
        $skillArrayDump['3370'] = "Chief Science Officer";
        $skillArrayDump['3371'] = "Public Relations";
        $skillArrayDump['3372'] = "Intelligence Analyst";
        $skillArrayDump['3373'] = "Starbase Defense Management";
        $skillArrayDump['3380'] = "Industry";
        $skillArrayDump['3381'] = "Amarr Tech";
        $skillArrayDump['3382'] = "Caldari Tech";
        $skillArrayDump['3383'] = "Gallente Tech";
        $skillArrayDump['3384'] = "Minmatar Tech";
        $skillArrayDump['3385'] = "Refining";
        $skillArrayDump['3386'] = "Mining";
        $skillArrayDump['3387'] = "Mass Production";
        $skillArrayDump['3388'] = "Production Efficiency";
        $skillArrayDump['3389'] = "Refinery Efficiency";
        $skillArrayDump['3390'] = "Mobile Refinery Operation";
        $skillArrayDump['3391'] = "Mobile Factory Operation";
        $skillArrayDump['3392'] = "Mechanics";
        $skillArrayDump['3393'] = "Repair Systems";
        $skillArrayDump['3394'] = "Hull Upgrades";
        $skillArrayDump['3395'] = "Frigate Construction";
        $skillArrayDump['3396'] = "Industrial Construction";
        $skillArrayDump['3397'] = "Cruiser Construction";
        $skillArrayDump['3398'] = "Battleship Construction";
        $skillArrayDump['3400'] = "Outpost Construction";
        $skillArrayDump['3402'] = "Science";
        $skillArrayDump['3403'] = "Research";
        $skillArrayDump['3405'] = "Biology";
        $skillArrayDump['3406'] = "Laboratory Operation";
        $skillArrayDump['3408'] = "Reverse Engineering";
        $skillArrayDump['3409'] = "Metallurgy";
        $skillArrayDump['3410'] = "Astrogeology";
        $skillArrayDump['3411'] = "Cybernetics";
        $skillArrayDump['3412'] = "Astrometrics";
        $skillArrayDump['3413'] = "Power Grid Management";
        $skillArrayDump['3416'] = "Shield Operation";
        $skillArrayDump['3417'] = "Capacitor Systems Operation";
        $skillArrayDump['3418'] = "Capacitor Management";
        $skillArrayDump['3419'] = "Shield Management";
        $skillArrayDump['3420'] = "Tactical Shield Manipulation";
        $skillArrayDump['3421'] = "Energy Pulse Weapons";
        $skillArrayDump['3422'] = "Shield Emission Systems";
        $skillArrayDump['3423'] = "Capacitor Emission Systems";
        $skillArrayDump['3424'] = "Energy Grid Upgrades";
        $skillArrayDump['3425'] = "Shield Upgrades";
        $skillArrayDump['3426'] = "CPU Management";
        $skillArrayDump['3427'] = "Electronic Warfare";
        $skillArrayDump['3428'] = "Long Range Targeting";
        $skillArrayDump['3429'] = "Target Management";
        $skillArrayDump['3430'] = "Advanced Target Management";
        $skillArrayDump['3431'] = "Signature Analysis";
        $skillArrayDump['3432'] = "Electronics Upgrades";
        $skillArrayDump['3433'] = "Sensor Linking";
        $skillArrayDump['3434'] = "Weapon Disruption";
        $skillArrayDump['3435'] = "Propulsion Jamming";
        $skillArrayDump['3436'] = "Drones";
        $skillArrayDump['3437'] = "Scout Drone Operation";
        $skillArrayDump['3438'] = "Mining Drone Operation";
        $skillArrayDump['3439'] = "Repair Drone Operation";
        $skillArrayDump['3440'] = "Salvage Drone Operation";
        $skillArrayDump['3441'] = "Heavy Drone Operation";
        $skillArrayDump['3442'] = "Drone Interfacing";
        $skillArrayDump['3443'] = "Trade";
        $skillArrayDump['3444'] = "Retail";
        $skillArrayDump['3445'] = "Black Market Trading";
        $skillArrayDump['3446'] = "Broker Relations";
        $skillArrayDump['3447'] = "Visibility";
        $skillArrayDump['3448'] = "Smuggling";
        $skillArrayDump['3449'] = "Navigation";
        $skillArrayDump['3450'] = "Afterburner";
        $skillArrayDump['3451'] = "Fuel Conservation";
        $skillArrayDump['3452'] = "Acceleration Control";
        $skillArrayDump['3453'] = "Evasive Maneuvering";
        $skillArrayDump['3454'] = "High Speed Maneuvering";
        $skillArrayDump['3455'] = "Warp Drive Operation";
        $skillArrayDump['3456'] = "Jump Drive Operation";
        $skillArrayDump['3551'] = "Survey";
        $skillArrayDump['3731'] = "Megacorp Management";
        $skillArrayDump['3732'] = "Empire Control";
        $skillArrayDump['3755'] = "Jove Frigate";
        $skillArrayDump['3758'] = "Jove Cruiser";
        $skillArrayDump['3893'] = "Mining Connections";
        $skillArrayDump['3894'] = "Distribution Connections";
        $skillArrayDump['3895'] = "Security Connections";
        $skillArrayDump['4385'] = "Micro Jump Drive Operation";
        $skillArrayDump['4411'] = "Target Breaker Amplification";
        $skillArrayDump['9955'] = "Polaris";
        $skillArrayDump['10264'] = "Concord";
        $skillArrayDump['11015'] = "Test";
        $skillArrayDump['11075'] = "Jove Industrial";
        $skillArrayDump['11078'] = "Jove Battleship";
        $skillArrayDump['11082'] = "Small Railgun Specialization";
        $skillArrayDump['11083'] = "Small Beam Laser Specialization";
        $skillArrayDump['11084'] = "Small Autocannon Specialization";
        $skillArrayDump['11204'] = "Advanced Energy Grid Upgrades";
        $skillArrayDump['11206'] = "Advanced Shield Upgrades";
        $skillArrayDump['11207'] = "Advanced Weapon Upgrades";
        $skillArrayDump['11208'] = "Advanced Sensor Upgrades";
        $skillArrayDump['11395'] = "Deep Core Mining";
        $skillArrayDump['11433'] = "High Energy Physics";
        $skillArrayDump['11441'] = "Plasma Physics";
        $skillArrayDump['11442'] = "Nanite Engineering";
        $skillArrayDump['11443'] = "Hydromagnetic Physics";
        $skillArrayDump['11444'] = "Amarrian Starship Engineering";
        $skillArrayDump['11445'] = "Minmatar Starship Engineering";
        $skillArrayDump['11446'] = "Graviton Physics";
        $skillArrayDump['11447'] = "Laser Physics";
        $skillArrayDump['11448'] = "Electromagnetic Physics";
        $skillArrayDump['11449'] = "Rocket Science";
        $skillArrayDump['11450'] = "Gallentean Starship Engineering";
        $skillArrayDump['11451'] = "Nuclear Physics";
        $skillArrayDump['11452'] = "Mechanical Engineering";
        $skillArrayDump['11453'] = "Electronic Engineering";
        $skillArrayDump['11454'] = "Caldari Starship Engineering";
        $skillArrayDump['11455'] = "Quantum Physics";
        $skillArrayDump['11487'] = "Astronautic Engineering";
        $skillArrayDump['11529'] = "Molecular Engineering";
        $skillArrayDump['11566'] = "Thermic Shield Compensation";
        $skillArrayDump['11569'] = "Armored Warfare Specialist";
        $skillArrayDump['11572'] = "Skirmish Warfare Specialist";
        $skillArrayDump['11574'] = "Wing Command";
        $skillArrayDump['11579'] = "Cloaking";
        $skillArrayDump['11584'] = "Anchoring";
        $skillArrayDump['11858'] = "Hypernet Science";
        $skillArrayDump['12092'] = "Interceptors";
        $skillArrayDump['12093'] = "Covert Ops";
        $skillArrayDump['12095'] = "Assault Frigates";
        $skillArrayDump['12096'] = "Logistics";
        $skillArrayDump['12097'] = "Destroyers";
        $skillArrayDump['12098'] = "Interdictors";
        $skillArrayDump['12099'] = "Battlecruisers";
        $skillArrayDump['12179'] = "Research Project Management";
        $skillArrayDump['12180'] = "Arkonor Processing";
        $skillArrayDump['12181'] = "Bistot Processing";
        $skillArrayDump['12182'] = "Crokite Processing";
        $skillArrayDump['12183'] = "Dark Ochre Processing";
        $skillArrayDump['12184'] = "Gneiss Processing";
        $skillArrayDump['12185'] = "Hedbergite Processing";
        $skillArrayDump['12186'] = "Hemorphite Processing";
        $skillArrayDump['12187'] = "Jaspet Processing";
        $skillArrayDump['12188'] = "Kernite Processing";
        $skillArrayDump['12189'] = "Mercoxit Processing";
        $skillArrayDump['12190'] = "Omber Processing";
        $skillArrayDump['12191'] = "Plagioclase Processing";
        $skillArrayDump['12192'] = "Pyroxeres Processing";
        $skillArrayDump['12193'] = "Scordite Processing";
        $skillArrayDump['12194'] = "Spodumain Processing";
        $skillArrayDump['12195'] = "Veldspar Processing";
        $skillArrayDump['12196'] = "Scrapmetal Processing";
        $skillArrayDump['12201'] = "Small Artillery Specialization";
        $skillArrayDump['12202'] = "Medium Artillery Specialization";
        $skillArrayDump['12203'] = "Large Artillery Specialization";
        $skillArrayDump['12204'] = "Medium Beam Laser Specialization";
        $skillArrayDump['12205'] = "Large Beam Laser Specialization";
        $skillArrayDump['12206'] = "Medium Railgun Specialization";
        $skillArrayDump['12207'] = "Large Railgun Specialization";
        $skillArrayDump['12208'] = "Medium Autocannon Specialization";
        $skillArrayDump['12209'] = "Large Autocannon Specialization";
        $skillArrayDump['12210'] = "Small Blaster Specialization";
        $skillArrayDump['12211'] = "Medium Blaster Specialization";
        $skillArrayDump['12212'] = "Large Blaster Specialization";
        $skillArrayDump['12213'] = "Small Pulse Laser Specialization";
        $skillArrayDump['12214'] = "Medium Pulse Laser Specialization";
        $skillArrayDump['12215'] = "Large Pulse Laser Specialization";
        $skillArrayDump['12241'] = "Sovereignty";
        $skillArrayDump['12305'] = "Drone Navigation";
        $skillArrayDump['12365'] = "EM Shield Compensation";
        $skillArrayDump['12366'] = "Kinetic Shield Compensation";
        $skillArrayDump['12367'] = "Explosive Shield Compensation";
        $skillArrayDump['12368'] = "Hypereuclidean Navigation";
        $skillArrayDump['12441'] = "Missile Bombardment";
        $skillArrayDump['12442'] = "Missile Projection";
        $skillArrayDump['12484'] = "Amarr Drone Specialization";
        $skillArrayDump['12485'] = "Minmatar Drone Specialization";
        $skillArrayDump['12486'] = "Gallente Drone Specialization";
        $skillArrayDump['12487'] = "Caldari Drone Specialization";
        $skillArrayDump['12834'] = "General Freight";
        $skillArrayDump['13069'] = "Starship Freight";
        $skillArrayDump['13070'] = "Mineral Freight";
        $skillArrayDump['13071'] = "Munitions Freight";
        $skillArrayDump['13072'] = "Drone Freight";
        $skillArrayDump['13073'] = "Raw Material Freight";
        $skillArrayDump['13074'] = "Consumable Freight";
        $skillArrayDump['13075'] = "Hazardous Material Freight";
        $skillArrayDump['13278'] = "Archaeology";
        $skillArrayDump['13279'] = "Remote Sensing";
        $skillArrayDump['16069'] = "Remote Armor Repair Systems";
        $skillArrayDump['16281'] = "Ice Harvesting";
        $skillArrayDump['16591'] = "Heavy Assault Cruisers";
        $skillArrayDump['16594'] = "Procurement";
        $skillArrayDump['16595'] = "Daytrading";
        $skillArrayDump['16596'] = "Wholesale";
        $skillArrayDump['16597'] = "Margin Trading";
        $skillArrayDump['16598'] = "Marketing";
        $skillArrayDump['16622'] = "Accounting";
        $skillArrayDump['17940'] = "Mining Barge";
        $skillArrayDump['18025'] = "Ice Processing";
        $skillArrayDump['18580'] = "Tycoon";
        $skillArrayDump['19430'] = "Omnipotent";
        $skillArrayDump['19719'] = "Transport Ships";
        $skillArrayDump['19759'] = "Long Distance Jamming";
        $skillArrayDump['19760'] = "Frequency Modulation";
        $skillArrayDump['19761'] = "Signal Dispersion";
        $skillArrayDump['19766'] = "Signal Suppression";
        $skillArrayDump['19767'] = "Turret Destabilization";
        $skillArrayDump['19921'] = "Target Painting";
        $skillArrayDump['19922'] = "Signature Focusing";
        $skillArrayDump['20209'] = "Rocket Specialization";
        $skillArrayDump['20210'] = "Light Missile Specialization";
        $skillArrayDump['20211'] = "Heavy Missile Specialization";
        $skillArrayDump['20212'] = "Cruise Missile Specialization";
        $skillArrayDump['20213'] = "Torpedo Specialization";
        $skillArrayDump['20312'] = "Guided Missile Precision";
        $skillArrayDump['20314'] = "Target Navigation Prediction";
        $skillArrayDump['20315'] = "Warhead Upgrades";
        $skillArrayDump['20327'] = "Capital Energy Turret";
        $skillArrayDump['20342'] = "Advanced Spaceship Command";
        $skillArrayDump['20433'] = "Talocan Technology";
        $skillArrayDump['20494'] = "Armored Warfare";
        $skillArrayDump['20495'] = "Information Warfare";
        $skillArrayDump['20524'] = "Amarr Freighter";
        $skillArrayDump['20525'] = "Amarr Dreadnought";
        $skillArrayDump['20526'] = "Caldari Freighter";
        $skillArrayDump['20527'] = "Gallente Freighter";
        $skillArrayDump['20528'] = "Minmatar Freighter";
        $skillArrayDump['20530'] = "Caldari Dreadnought";
        $skillArrayDump['20531'] = "Gallente Dreadnought";
        $skillArrayDump['20532'] = "Minmatar Dreadnought";
        $skillArrayDump['20533'] = "Capital Ships";
        $skillArrayDump['21059'] = "Shield Compensation";
        $skillArrayDump['21071'] = "Rapid Launch";
        $skillArrayDump['21603'] = "Cynosural Field Theory";
        $skillArrayDump['21610'] = "Jump Fuel Conservation";
        $skillArrayDump['21611'] = "Jump Drive Calibration";
        $skillArrayDump['21666'] = "Capital Hybrid Turret";
        $skillArrayDump['21667'] = "Capital Projectile Turret";
        $skillArrayDump['21668'] = "Citadel Torpedoes";
        $skillArrayDump['21718'] = "Hacking";
        $skillArrayDump['21789'] = "Sleeper Technology";
        $skillArrayDump['21790'] = "Caldari Encryption Methods";
        $skillArrayDump['21791'] = "Minmatar Encryption Methods";
        $skillArrayDump['21802'] = "Capital Shield Operation";
        $skillArrayDump['21803'] = "Capital Repair Systems";
        $skillArrayDump['22043'] = "Tactical Weapon Reconfiguration";
        $skillArrayDump['22172'] = "TEST Drone Skill";
        $skillArrayDump['22242'] = "Capital Ship Construction";
        $skillArrayDump['22536'] = "Mining Foreman";
        $skillArrayDump['22541'] = "Mining Drone Specialization";
        $skillArrayDump['22551'] = "Exhumers";
        $skillArrayDump['22552'] = "Mining Director";
        $skillArrayDump['22578'] = "Mining Upgrades";
        $skillArrayDump['22761'] = "Recon Ships";
        $skillArrayDump['22806'] = "EM Armor Compensation";
        $skillArrayDump['22807'] = "Explosive Armor Compensation";
        $skillArrayDump['22808'] = "Kinetic Armor Compensation";
        $skillArrayDump['22809'] = "Thermic Armor Compensation";
        $skillArrayDump['23069'] = "Fighters";
        $skillArrayDump['23087'] = "Amarr Encryption Methods";
        $skillArrayDump['23121'] = "Gallente Encryption Methods";
        $skillArrayDump['23123'] = "Takmahl Technology";
        $skillArrayDump['23124'] = "Yan Jung Technology";
        $skillArrayDump['23566'] = "Electronic Warfare Drone Interfacing";
        $skillArrayDump['23594'] = "Sentry Drone Interfacing";
        $skillArrayDump['23599'] = "Propulsion Jamming Drone Interfacing";
        $skillArrayDump['23606'] = "Drone Sharpshooting";
        $skillArrayDump['23618'] = "Drone Durability";
        $skillArrayDump['23950'] = "Command Ships";
        $skillArrayDump['24241'] = "Combat Drone Operation";
        $skillArrayDump['24242'] = "Infomorph Psychology";
        $skillArrayDump['24268'] = "Supply Chain Management";
        $skillArrayDump['24270'] = "Scientific Networking";
        $skillArrayDump['24311'] = "Amarr Carrier";
        $skillArrayDump['24312'] = "Caldari Carrier";
        $skillArrayDump['24313'] = "Gallente Carrier";
        $skillArrayDump['24314'] = "Minmatar Carrier";
        $skillArrayDump['24562'] = "Jump Portal Generation";
        $skillArrayDump['24563'] = "Doomsday Operation";
        $skillArrayDump['24568'] = "Capital Remote Armor Repair Systems";
        $skillArrayDump['24571'] = "Capital Shield Emission Systems";
        $skillArrayDump['24572'] = "Capital Energy Emission Systems";
        $skillArrayDump['24606'] = "Cloning Facility Operation";
        $skillArrayDump['24613'] = "Advanced Drone Interfacing";
        $skillArrayDump['24624'] = "Advanced Laboratory Operation";
        $skillArrayDump['24625'] = "Advanced Mass Production";
        $skillArrayDump['24764'] = "Fleet Command";
        $skillArrayDump['25233'] = "Corporation Contracting";
        $skillArrayDump['25235'] = "Contracting";
        $skillArrayDump['25530'] = "Neurotoxin Recovery";
        $skillArrayDump['25538'] = "Neurotoxin Control";
        $skillArrayDump['25544'] = "Gas Cloud Harvesting";
        $skillArrayDump['25718'] = "Heavy Assault Missile Specialization";
        $skillArrayDump['25719'] = "Heavy Assault Missiles";
        $skillArrayDump['25739'] = "Astrometric Rangefinding";
        $skillArrayDump['25810'] = "Astrometric Pinpointing";
        $skillArrayDump['25811'] = "Astrometric Acquisition";
        $skillArrayDump['25863'] = "Salvaging";
        $skillArrayDump['26224'] = "Drug Manufacturing";
        $skillArrayDump['26252'] = "Jury Rigging";
        $skillArrayDump['26253'] = "Armor Rigging";
        $skillArrayDump['26254'] = "Astronautics Rigging";
        $skillArrayDump['26255'] = "Drones Rigging";
        $skillArrayDump['26256'] = "Electronic Superiority Rigging";
        $skillArrayDump['26257'] = "Projectile Weapon Rigging";
        $skillArrayDump['26258'] = "Energy Weapon Rigging";
        $skillArrayDump['26259'] = "Hybrid Weapon Rigging";
        $skillArrayDump['26260'] = "Launcher Rigging";
        $skillArrayDump['26261'] = "Shield Rigging";
        $skillArrayDump['27902'] = "Remote Hull Repair Systems";
        $skillArrayDump['27906'] = "Tactical Logistics Reconfiguration";
        $skillArrayDump['27911'] = "Projected Electronic Counter Measures";
        $skillArrayDump['27936'] = "Capital Remote Hull Repair Systems";
        $skillArrayDump['28073'] = "Bomb Deployment";
        $skillArrayDump['28164'] = "Thermodynamics";
        $skillArrayDump['28261'] = "Tax Evasion";
        $skillArrayDump['28373'] = "Ore Compression";
        $skillArrayDump['28374'] = "Capital Industrial Ships";
        $skillArrayDump['28585'] = "Industrial Reconfiguration";
        $skillArrayDump['28604'] = "Tournament Observation";
        $skillArrayDump['28609'] = "Heavy Interdiction Cruisers";
        $skillArrayDump['28615'] = "Electronic Attack Ships";
        $skillArrayDump['28631'] = "Imperial Navy Security Clearance";
        $skillArrayDump['28656'] = "Black Ops";
        $skillArrayDump['28667'] = "Marauders";
        $skillArrayDump['28879'] = "Nanite Operation";
        $skillArrayDump['28880'] = "Nanite Interfacing";
        $skillArrayDump['29029'] = "Jump Freighters";
        $skillArrayDump['29637'] = "Industrial Command Ships";
        $skillArrayDump['30324'] = "Defensive Subsystem Technology";
        $skillArrayDump['30325'] = "Engineering Subsystem Technology";
        $skillArrayDump['30326'] = "Electronic Subsystem Technology";
        $skillArrayDump['30327'] = "Offensive Subsystem Technology";
        $skillArrayDump['30532'] = "Amarr Defensive Systems";
        $skillArrayDump['30536'] = "Amarr Electronic Systems";
        $skillArrayDump['30537'] = "Amarr Offensive Systems";
        $skillArrayDump['30538'] = "Amarr Propulsion Systems";
        $skillArrayDump['30539'] = "Amarr Engineering Systems";
        $skillArrayDump['30540'] = "Gallente Defensive Systems";
        $skillArrayDump['30541'] = "Gallente Electronic Systems";
        $skillArrayDump['30542'] = "Caldari Electronic Systems";
        $skillArrayDump['30543'] = "Minmatar Electronic Systems";
        $skillArrayDump['30544'] = "Caldari Defensive Systems";
        $skillArrayDump['30545'] = "Minmatar Defensive Systems";
        $skillArrayDump['30546'] = "Gallente Engineering Systems";
        $skillArrayDump['30547'] = "Minmatar Engineering Systems";
        $skillArrayDump['30548'] = "Caldari Engineering Systems";
        $skillArrayDump['30549'] = "Caldari Offensive Systems";
        $skillArrayDump['30550'] = "Gallente Offensive Systems";
        $skillArrayDump['30551'] = "Minmatar Offensive Systems";
        $skillArrayDump['30552'] = "Caldari Propulsion Systems";
        $skillArrayDump['30553'] = "Gallente Propulsion Systems";
        $skillArrayDump['30554'] = "Minmatar Propulsion Systems";
        $skillArrayDump['30650'] = "Amarr Strategic Cruiser";
        $skillArrayDump['30651'] = "Caldari Strategic Cruiser";
        $skillArrayDump['30652'] = "Gallente Strategic Cruiser";
        $skillArrayDump['30653'] = "Minmatar Strategic Cruiser";
        $skillArrayDump['30788'] = "Propulsion Subsystem Technology";
        $skillArrayDump['32339'] = "Fighter Bombers";
        $skillArrayDump['32435'] = "Citadel Cruise Missiles";
        $skillArrayDump['32797'] = "Armor Resistance Phasing";
        $skillArrayDump['32856'] = "Tactical Strike";
        $skillArrayDump['32918'] = "Mining Frigate";
        $skillArrayDump['32999'] = "Magnetometric Sensor Compensation";
        $skillArrayDump['33000'] = "Gravimetric Sensor Compensation";
        $skillArrayDump['33001'] = "Ladar Sensor Compensation";
        $skillArrayDump['33002'] = "Radar Sensor Compensation";
        $skillArrayDump['33078'] = "Armor Layering";
        $skillArrayDump['33091'] = "Amarr Destroyer";
        $skillArrayDump['33092'] = "Caldari Destroyer";
        $skillArrayDump['33093'] = "Gallente Destroyer";
        $skillArrayDump['33094'] = "Minmatar Destroyer";
        $skillArrayDump['33095'] = "Amarr Battlecruiser";
        $skillArrayDump['33096'] = "Caldari Battlecruiser";
        $skillArrayDump['33097'] = "Gallente Battlecruiser";
        $skillArrayDump['33098'] = "Minmatar Battlecruiser";
        $skillArrayDump['33399'] = "Infomorph Synchronizing";
        $skillArrayDump['33407'] = "Advanced Infomorph Psychology";
	$skillArrayDump['33467'] = "Customs Code Expertise";

	return $skillArrayDump;
}
?>
