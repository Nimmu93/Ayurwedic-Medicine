-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 09:28 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ayurvedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plant_name` varchar(30) NOT NULL,
  `disease` varchar(30) NOT NULL,
  `about` varchar(500) NOT NULL,
  `location` varchar(40) NOT NULL,
  `link` varchar(40) NOT NULL,
  `adminlink` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `plant_name`, `disease`, `about`, `location`, `link`, `adminlink`) VALUES
(6, 'Ranawara', 'diabeties', 'Take a handful of the "Pas Panguwa" of Ranawara tree. Put it with four cups of water and boil until it becomes to the amount of one cup. Drink this twice a day at 10 a.m. and 3 p.m.								', '../images/Ranawara.jpg', '../plants/ranawara.php', '../adplants/ranawara.php'),
(7, 'Prickly Pear Cactus ', 'diabeties', '					take 1/2 cup of cooked cactus fruit a day				', '../images/prickly-pear-cactus.jpg', '../plants/prickly_pear_cactus.php', '../adplants/prickly_pear_cactus.php'),
(8, 'Fenugreek seeds', 'diabeties', '				Take 2 teaspoons full of fenugreek seeds (in the powdered form) daily in the morning preferably with the milk. Another way of using this is to soak 10-12 seeds in water at night and drink that water in the morning					', '../images/fenugreek-seeds.jpg', '../plants/fenugreek_seeds.php', '../adplants/fenugreek_seeds.php'),
(9, 'Garlic', 'diabeties', '				Swallow a clove of garlic daily in the morning.					', '../images/Garlic.jpg', '../plants/garlic.php', '../adplants/garlic.php'),
(10, 'Curry Leaves ', 'diabeties', '					Eat 8-10 fresh curry leaves daily in the morning for approximately three months				', '../images/curry-leaves.jpg', '../plants/curry_leaves.php', '../adplants/curry_leaves.php'),
(12, 'Holy Basil', 'cancer', 'To aid in breast cancer treatment, pour 2 cups boiling water over 10 to 15 fresh holy basil leaves other  and steep 5 minutes. 							', '../images/Holy_Basil.jpg', '../plants/holy_basil.php', '../adplants/holy_basil.php'),
(13, 'Garlic', 'cancer', 'Lowers cancer risk. Take five cloves each day or try garlic juice or soups. Add some onions and broccoli, and youâ€™ve got a cancer fighting power-house.									', '../images/Garlic.jpg', '../plants/garlic.php', '../adplants/garlic.php'),
(15, 'Green tea', 'cancer', 'By drinking green tea regularly, you can eradicate colon tumors while they are in their most infant stages.									', '../images/Green_tea.jpg', '../plants/green_tea.php', '../adplants/green_tea.php'),
(16, 'Aloe Vera', 'cancer', 'Drink Aloe Vera juice regularly or just eat Aloe Vera gel 									', '../images/aloe-vera.jpg', '../plants/aloevera.php', '../adplants/aloevera.php'),
(17, 'Ginger', 'cancer', '- One of the powerful herbal remedies for cancer treatment Intake ginger in your diet helps to improve your digestive system. you can take it as ginger tea also.									', '../images/ginger.jpg', '../plants/ginger.php', '../adplants/ginger.php'),
(18, 'Nidikumba', 'asthma', 'whole the plant is taken and its decoction is prepared. This is taken in the dose of 30ml thrice daily. 4-6 days medication decreases the complaint of heavy menstrual bleeding.									', '../images/touch_me_not_plant.jpg', '../plants/touch_me_not_plant.php', '../adplants/touch_me_not_plant.php'),
(19, 'Adhatoda ', 'asthma', 'is taken a fistful and fresh juice is obtained. Early morning intake of this for 6-8 days helps to reduce the haematuria.					', '../images/Adhatoda-Vasica-Vasa-herb.jpg', '../plants/adathoda.php', '../adplants/adathoda.php'),
(20, 'Mustard', 'asthma', '				Adhatoda leaves are pounded well and fresh juice is obtained. 15ml juice is added with 5 gram of organic sugar candy and taken. It reduces the incidences of bleeding from the mouth, nose and ear.					', '../images/mustardoil.jpg', '../plants/mustard.php', '../adplants/mustard.php'),
(21, 'Coriander / koththamalli', 'cholesterol', '		Take 1 glass water. Add 2 tbsp of coriander seeds. Boil it for 15 min. Strain the mixture. Allow it to cool. Drink 3 times a day.							', '../images/coriander-seeds.jpg', '../plants/coriander.php', '../adplants/coriander.php'),
(22, 'Watermelon seeds ', 'cholesterol', '- Dry some watermelon seeds in the sun. Roast and crush them into fine powder.Take 1 tsp watermelon seed powder. Add to 1 glass water. Mix well. Drink once a day.									', '../images/water-melon-seeds.jpg', '../plants/watermelon_seeds.php', '../adplants/watermelon_seeds.php'),
(23, 'Kohomba leaves ', 'cholesterol', 'Take 10-15 basil leaves. Take 10-15 margosa leaves. Mix them and crush to a paste. Add to 1 glass of water. Mix well. Drink on an empty stomach once every day.									', '../images/Neem_leaves.jpg', '../plants/neem.php', '../adplants/neem.php'),
(24, 'Garlic', 'cholesterol', '			Boil a glassful of milk with a piece of garlic in it. This will reduce the cholesterol and take care of cardiac pains. It has to be continued for a few days before the method begins to show its effects. Another simple remedy is to have a garlic clove every morning. This takes time to show results, but the results are positive. 						', '../images/Garlic.jpg', '../plants/garlic.php', '../adplants/garlic.php'),
(25, 'Banana', 'snake bites', '	drinking the juice of banana stem which is very effective in removing poison of insects and snakes.								', '../images/bananatree.jpg', '../plants/banana.php', '../adplants/banana.php'),
(26, 'Neem', 'snake bites', '		chewing neem (margosa) leaves with salt and black pepper is helpful in removing poison. The person who has poison in the body will taste it sweet while chewing.							', '../images/Neem_leaves.jpg', '../plants/neem.php', '../adplants/neem.php'),
(27, 'Holy Basil (Tulsi)', 'snake bites', '					Powder of Tulsi root can be applied on the snake bite space to reduce.				', '../images/Holy_Basil.jpg', '../plants/holy_basil.php', '../adplants/holy_basil.php'),
(28, 'Mustard oil ', 'snake bites', '			To reduce the effects of poison use the mixture of 30 gram onion juice and 30 gram mustard oil. Use this juice mixture after every 30 minutes to reduce effect of poison. For oral use only.						', '../images/mustardoil.jpg', '../plants/mustard.php', '../adplants/mustard.php'),
(29, 'Asclepias tuberosa ', 'asthma', '	Fresh roots of this herb are boiled and the resultant tea is used in the treatment of asthma. A tablespoon of fresh roots boiled in a cup of water make an effective tea.								', '../images/asclebpias_tuberosa.JPG', '../plants/butterfly_weed.php', '../adplants/butterfly_weed.php'),
(30, 'Evening primrose ', 'asthma', '			Its roots and seeds act as antispasmodics, thus relieving bronchial spasm. Its roots are boiled to make tea. Sometimes, its fresh roots are chopped and made to boil in honey (one part roots in two parts of honey), to make an excellent antispasmodic and soothing cough syrup. Evening primrose oil is also used to reduce inflammation in asthma.						', '../images/Evening-Primrose.jpg', '../plants/evening_primrose.php', '../adplants/evening_primrose.php'),
(31, 'Fenugreek seeds', 'asthma', '			Its flowers make a great relaxing expectorant. These also act as respiratory vasodilators. These flowers may be used for making tea or smoked to relieve asthma symptoms.						', '../images/fenugreek-seeds.jpg', '../plants/fenugreek_seeds.php', '../adplants/fenugreek_seeds.php'),
(32, 'Turmeric', 'asthma', '			Turmeric can be sipped, taken as a tincture or added to cup of warm water						', '../images/turmeric.jpg', '../plants/turmeric.php', '../adplants/turmeric.php'),
(33, 'Garlic', 'asthma', '						Used singly or with other remedies, and has peculiar ability to facilitate the effects of other herbs or drugs. The roots can be boiled to make a tea or smaller roots can be chewed on to help decrease asthma symptoms. 			', '../images/garlic.jpg', '../plants/garlic.php', '../adplants/garlic.php'),
(34, 'Lemon', 'allergies', '				Lemon helps flush toxins from the body. It is an antibiotic and has anti-allergic properties. Take 1 glass lukewarm water. Squeeze Â½ lemon in it. Add 1 table spoon of honey. Mix well. Drink on an empty stomach. 					', '../images/lemon.jpg', '../plants/lemon.php', '../adplants/lemon.php'),
(35, 'Neem oil', 'allergies', '			- Massaging the skin with Neem Oilâ€”the most cooling of all Ayurvedic oilsâ€”delivers the powerful pitta-pacifying and immune-supportive properties of organic neem directly where you need it most. Neem Oil helps to relieve pittaâ€™s excess heat and oiliness, allowing the skin to reset and rejuvenate						', '../images/Neem_leaves.jpg', '../plants/neem.php', '../adplants/neem.php'),
(36, 'Koththamalli /coriander', 'allergies', 'Applying fresh cilantro pulp directly to the skin offers more localized soothing support and can be used in conjunction with cilantro juice. The pulp can be applied to the skin after it has been separated from the juice									', '../images/coriander-seeds.jpg', '../plants/coriander.php', '../adplants/coriander.php'),
(37, 'Adathoda', 'allergies', '					Take 250 ml carrot juice. Add 100 ml beetroot juice. Add 100 ml cucumber juice. Mix well. Have once every day. This helps reduce allergic reaction and soothes existing allergies.				', '../images/Adhatoda-Vasica-Vasa-herb.jpg', '../plants/adathoda.php', '../adplants/adathoda.php'),
(38, 'Fenugreek seeds', 'sore throat', '		aafa							', '../images/fenugreek-seeds.jpg', '../plants/fenugreek_seeds.php', '../adplants/fenugreek_seeds.php'),
(39, 'Holy Basil', 'sore throat', '			sadas						', '../images/Holy_Basil.jpg', '../plants/holy_basil.php', '../adplants/holy_basil.php'),
(40, 'Onion', 'sore throat', 'bxbxcvx', '../images/onion.jpg', '../plants/onion.php', '../adplants/onion.php'),
(41, 'Ginger', 'sore throat', '		xczcxcz							', '../images/ginger.jpg', '../plants/ginger.php', '../adplants/ginger.php'),
(42, 'Evening primrose', 'cough', '									', '../images/Evening-Primrose.jpg', '../plants/evening_primrose.php', '../adplants/evening_primrose.php'),
(43, 'Ginger', 'cough', '									', '../images/ginger.jpg', '../plants/ginger.php', '../adplants/ginger.php'),
(44, 'Touch-me-not plant', 'cough', '									', '../images/touch_me_not_plant.jpg', '../plants/touch_me_not_plant.php', '../adplants/touch_me_not_plant.php'),
(45, 'Adathoda', 'cough', '									', '../images/Adhatoda-Vasica-Vasa-herb.jpg', '../plants/adathoda.php', '../adplants/adathoda.php'),
(46, 'Onion', 'cough', '									', '../images/onion.jpg', '../plants/onion.php', '../adplants/onion.php'),
(47, 'Holy Basil (Tulsi)', 'diabeties', '					ddfdf				', '../images/11900034_908974425828968_11006', '', ''),
(48, 'ds', 'blood disorder', 'dsdsds', '../images/11900034_908974425828968_11006', '', ''),
(49, 'fdfd', 'fdfd', '				fdfdfd					', '../images/string.jpg', '', ''),
(50, 'Garlic', 'asthma', 'lkl;l;l', '../images/11900034_908974425828968_11006', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE IF NOT EXISTS `users1` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) DEFAULT NULL,
  `upass` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(70) NOT NULL,
  `state` varchar(5) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uname` (`uname`,`uemail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`uid`, `uname`, `upass`, `fullname`, `uemail`, `state`) VALUES
(2, 'wishwa', '827ccb0eea8a706c4c34a16891f84e7b', 'wishwa hettige', 'wishwa14@gmail.com', 'n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
