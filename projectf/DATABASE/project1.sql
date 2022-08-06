SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database project;

CREATE TABLE admin 
(
  id int(11) primary key NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO admin (id, username, password) VALUES (1, 'admin@gmail.com', '12345');

CREATE TABLE customer 
(
  uid int(11) primary key NOT NULL,
  name char(50) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(100) NOT NULL,
  mobile bigint(20) NOT NULL,
  address varchar(255) NOT NULL,
  state varchar(50) NOT NULL, 
  country varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO customer (uid, name, email, password, mobile, address, state, country) VALUES
(4, 'Sunil Vishwakarma', 'sunilvish@gmail.com', '819065', 7275308190, '3B, Kolpanday Road', 'Maharashtra', 'India'),
(7, 'Suraj Vishwakarma', 'suraj@gmail.com', '8190', 9120140055, 'Azamgarh', 'Uttar Pradesh', 'India'),
(8, 'Om Pandit', 'om9081@gmail.com', '8090', 7890809354, 'A/14,Doltala', 'West Bengal', 'India'),
(9, 'Ragini Singh', 'raginiyo@gmail.com', '1234`', 7275540965, '18B Pathak Para', 'Karnataka', 'India'),
(10, 'Anjali Agarwal', 'anjali123@gmail.com', '5690lol', 7275308190, '21/3A, Eastern Road', 'Tamil Nadu', 'India'),
(11, 'Sakshi Tewari', 'itssakshi@gmail.com', 'sakshi', 71727534567, '53, Kolaghat', 'West Bengal', 'India'),
(12, 'Raj Oberoi', 'oberoiraj@gmail.com', '1234', 9015501897, '12/1/2F, NewTown, Rajdanga Main Road', 'West Bengal', 'India');

create table hotels
(
    hid int(11) primary key NOT NULL,
    hname char(50) NOT NULL,
    details text NOT NULL,
    city varchar(100) NOT NULL,
    haddress varchar(255) NOT NULL,
    stars int(5),
    children text,
    pets text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO hotels (hid,hname,details,city,haddress,stars,children,pets) VALUES 
(123, 'Snow Valley Resorts Shimla', 'Featuring free WiFi, Snow Valley Resorts offers accommodations 3.5 mi from The Mall Road. Free private parking is available on site. Each room at this hotel is air-conditioned and has a flat-screen TV and a seating area. Certain rooms feature views of the city. The rooms have a private bathroom fitted with a shower. Extras include slippers and free toiletries.There is a 24-hour front desk at the property. Guests can enjoy play table tennis at the hotel. Packed lunches and Room service is available. Victory Tunnel is 2.4 mi from Snow Valley Resorts, while Indian Institute of Advanced Study is 2.3 mi away. Chandigarh Airport is 74 mi from the property.', 'Shimla', 'Ghora Chowki, 171005 Shimla, India',4,'Children of any age are welcome. An adult should be present with children of age 13 or below.
 17 years child and above are considered as an adult. Extra beds can be given on request. Charges applicable.', 'Pets are not allowed'),
 
(124,'Treebo Trend Maharaja','Treebo Trend Maharaja is located in Shimla, 2.1 km from The Ridge, Shimla and 5 km from Indian Institute of Advanced Study. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi throughout the property. The hotel features family rooms. At the hotel, every room is equipped with a wardrobe, a flat-screen TV, a private bathroom, bed linen and towels. A continental breakfast is available daily at Treebo Trend Maharaja. Popular points of interest near the accommodation include The Mall Road, Victory Tunnel and Circular Road. The nearest airport is Shimla Airport, 20 km from Treebo Trend Maharaja.', 'Shimla','Fingask Estate,The Mall Near Kali Bari Temple, 171003 Shimla, India',3,'Children of any age are welcome. An adult should be present with children of age 13 or below.
 17 years child and above are considered as an adult. Extra beds can be given on request. Charges applicable.','Pets are not allowed'),

(125,'Wildflower Hall, An Oberoi Resort,Shimla','Featuring luxurious rooms with views of a garden or the surrounding mountains, Wildflower Hall Shimla boasts heated indoor and outdoor pools. Other recreation facilities include the Oberoi Spa and a fitness centre. Free WiFi is available in the rooms of the property.The air-conditioned rooms feature large bay windows offering garden or mountain views, a satellite TV, DVD player and minibar. A separate walk-in closet has an electronic safe. 24-hour butler service is available. Wildflower Hall Shimla is 13 km from the city of Shimla, which is just next to Charabra Village. It takes approximately a 1.5-hour drive to reach Shimla Airport.
Car pick-up services can be arranged from Chandigarh Airport and Chandigarh Railway Station at an extra charge. Guests can buy a gift from Tijori boutique or pamper themselves at the beauty parlour. Other services include a travel desk and laundry.
Enjoy Pan-Asian and European dishes at the hotel’s restaurant, which has an open-air terrace offering panoramic views over the mountains. Indian cuisine is served at Lutyens Restaurant while The Coffee Shop features an international menu. A full range of wines and spirits are available at The Cavalry Bar.','Shimla','Chharabra, 171012 Shimla, India',5,'Children of any age are welcome. Children aged 12 years and above are considered adults at this property.','Pets are not allowed.'),

(126,'Radisson Hotel Shimla','Sitting at the foot of the north-west Himalayas, Radisson Hotel enjoys beautiful views of the surrounding cedar forests and mountains. Offering free WiFi, it also has a seasonal outdoor pool, pampering spa treatments and a gym.
Fitted with both air conditioning and heating, the large rooms are equipped with a flat-screen TV and a minibar. A personal safe and tea/coffee making facilities are included. Bathrooms have shower facilities.
Radisson Hotel is less than 200 m from Jakhu Temple and The Mall. It is 1.3 km from Himachal State Museum. Shimla Airport is 26 km away. Free parking is available.
Day trips and car rentals can be arranged at the tour desk. The hotel also provides a business centre and laundry services. The front desk operates 24 hours.
Opening out to a garden, Cafe Valley Vue serves international cuisine.','Shimla','Lower Bharari Road, 171001 Shimla, India',5,'Children of any age are welcome. Children aged 13 years and above are considered adults at this property. 
There is no capacity for cots at this property. The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected. All cots and extra beds are subject to availability.','Pets are not allowed.'),

(127,'WoodVista Cottages','Located 20 km from The Mall Road, WoodVista Cottages provides accommodation with a restaurant, a garden and a 24-hour front desk for your convenience. The chalet features both WiFi and private parking free of charge.
All units come with a seating area, a flat-screen TV with satellite channels and a private bathroom with slippers and shower. Some units also have a kitchen equipped with a microwave and an oven.
A continental breakfast is available daily at WoodVista Cottages.The accommodation offers a childrens playground.
A car rental service is available at WoodVista Cottages.
Victory Tunnel is 19 km from the chalet, while Circular Road is 17 km away. The nearest airport is Shimla Airport, 38 km from WoodVista Cottages.','Shimla','Village - Bakhog , Cheog Tehsil -Theog, Distt - Shimla ( Himachal Pradesh), 171209 Shimla, India',4,'Children of any age are welcome.
Children aged 12 years and above are considered adults at this property. 
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are allowed. No extra charges.');

INSERT INTO hotels (hid,hname,details,city,haddress,stars,children,pets) VALUES 
(230,'Humro Himalayan Orchid','Located in Darjeeling, 10 km from Tiger Hill, Humro Himalayan Orchid features views of the city. Among the facilities of this property are a restaurant, room service and a tour desk, along with free WiFi. The hotel features family rooms.
At the hotel, every room is fitted with a wardrobe, a flat-screen TV, a private bathroom, bed linen and towels. Humro Himalayan Orchid provides certain units that include a terrace, and rooms come with a kettle. At the accommodation, all rooms are fitted with a seating area.
Guests at Humro Himalayan Orchid can enjoy a continental breakfast.
Popular points of interest near the hotel include Himalayan Mountaineering Institute And Zoological Park, Japanese Peace Pagoda and Neora Valley National Park. The nearest airport is Bagdogra Airport, 69 km from Humro Himalayan Orchid.','Darjeeling','MC Road Chota KakJhora, 734101 Darjeeling, India',3,'Children of any age are welcome. Children aged 12 years and above are considered adults at this property.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are not allowed.'),

(231,'Sterling Darjeeling','Sterling Darjeeling is located 2,316 m above sea level, 1 km from Ghoom Railway Station. The property has free WiFi in the lobby and restaurant.
Rooms are fitted with a cable TV, telephone and tea/coffee-making facilities. Private bathrooms are fitted with toiletries and shower facilities. Room service is also provided.
The resort offers babysitting facilities. Theme parties, campfires and live entertainment are available. Shops can be found on-site.
Delicaci restaurant offers a range of Indian, Tibetan and Chinese dishes. European cuisine is also available.
The property offers a club house with a variety of activities including chess, table tennis and other indoor games. The resort also features a library, a gym and Spa and Wellness centre.
Sterling Darjeeling is 8 km from Darjeeling Railway Station. New Jalpaiguri and Bagdogra Airport are within 90 km away.','Darjeeling','Ghoom Monastery Road, Ghoom,, 734102 Darjeeling, India',4,'Children of any age are welcome. Children aged 6 years and above are considered adults at this property.
There is no capacity for cots at this property. There is no capacity for extra beds at this property.','Pets are allowed.'),

(232,'The Elgin, Darjeeling','Featuring a garden and a terrace, The Elgin Hotel offers elegant accommodation in Darjeeling. With bike rental, the property is 2 km from the Darjeeling Himalayan Mountaineering Institute and 4.8 km from the Darjeeling Himalayan Zoological Park.
With mountain and garden views, all rooms include free Wi-Fi, a seating area and a flat-screen TV with satellite channels. The private bathroom comes with a shower.
On site, guests will find the Silver Dining Room Restaurant serving Indian, regional, Chinese and continental cuisine. There is also a tea lounge and a bar.
The Elgin Hotel is 1.1 km from Darjeeling Train Station, while Bagdogra Airport is 74 km away.','Darjeeling','18 H.D Lama Road,, 734101 Darjeeling, India',4,'Children of any age are welcome.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are allowed. Charges may be applicable.'),

(233,'Summit Hermon Hotel & Spa','Located in Darjeeling, 11 km from Tiger Hill, Summit Hermon Hotel & Spa provides accommodation with a restaurant, free private parking and a shared lounge. This 4-star hotel offers a tour desk and luggage storage space. The accommodation offers a 24-hour front desk, airport transfers, room service and free WiFi throughout the property.
At the hotel every room is equipped with a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a shower, slippers and a hairdryer. Summit Hermon Hotel & Spa features certain rooms that include a balcony, and rooms are fitted with a kettle. At the accommodation all rooms come with bed linen and towels.
A continental breakfast is available daily at Summit Hermon Hotel & Spa.
Popular points of interest near the hotel include Himalayan Mountaineering Institute And Zoological Park, Japanese Peace Pagoda and Neora Valley National Park. The nearest airport is Bagdogra Airport, 70 km from Summit Hermon Hotel & Spa.','Darjeeling','1 Acharya Jagadish Chandra Bose Road, 734101 Darjeeling, India',5,'Children of any age are welcome. Children aged 13 years and above are considered adults at this property.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are not allowed.'),

(234,'Mayfair Darjeeling','Overlooking a scenic valley, Mayfair Darjeeling provides classic Indian-style rooms with flat-screen TVs. Providing free Wi-Fi in common areas and free parking, it has a spa, gym and wood-panelled library.
Featuring pleasant pastel shades and hints of yellow, spacious rooms are fitted with carved wood furnishings. Guests can enjoy the comfort of a sofa and fireplace. Private bathrooms have a bathtub and hairdryer.
Spend lazy afternoons in the games rooms, which has pool and table tennis facilities. Alternatively explore scenic Darjeeling with the tour and transport services provided at Mayfair. Concierge service is available.
A wide spread of Indian specialities as well as Western and Asian dishes are on offer at Magnolia Restaurant. Meals can be served in the privacy of rooms.
Mayfair Darjeeling is located 1.1 km from the Bengal Natural History Museum. It is within 1.9 km from Darjeeling Railway Station and Padmaja Naidu Himalayan Zoological Park.','Darjeeling','The Mall Opposite Governor House, 734101 Darjeeling, India',5,'Children of any age are welcome.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are not allowed.');

INSERT INTO hotels (hid,hname,details,city,haddress,stars,children,pets) VALUES 
(421,'Hotel Niladri','Hotel Niladri is located barely 50 m from the pristine and beautiful Golden Beach. It features a massage parlour and operates a 24-hour front desk to assist guests.
Decorated in light colours, the air-conditioned rooms here will provide you with a cable TV and a seating area. Featuring a shower, private bathrooms also come with free toiletries. Some rooms have a sea view.
At Hotel Niladri you will find a garden. Other facilities offered include tour desk, laundry and luggage storage. A car can be rented for exploring the nearby places. The property offers free parking.
The hotel is 1.5 km from Jagannath Temple, 20 km from Sakshigopal Temple and 37 km from Konark Sun Temple. The Jagannath Sadak Bus Station is 12 km away while the Bhubaneshwar Railway Station and the Biju Patnaik Airport are 59 km.
Dining highlight includes Annapurna restaurant that serves Indian, Chinese and continental specialities. 24-hour room service is available for private dining.','Puri','New Marine Drive Road,Near light House,Swargadwar,Puri, 752001 Puri, India',3,'Children of any age are welcome. Children aged 7 years and above are considered adults at this property.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are allowed. Charges may be applicable.'),

(422,'Mayfair Waves','This property is 2 minutes walk from the beach. Offering an outdoor swimming pool, a fitness centre and a spa and wellness centre, Mayfair Waves is located in Puri. Guests can enjoy and relax at the private beach. Free Wi-Fi access is available.
The modern air-conditioned rooms here will provide you with a flat-screen cable TV, seating area and a balcony. Featuring a shower, private bathrooms also come with a hairdryer and towels. You can enjoy a sea view and a pool view from all the rooms.
At Mayfair Waves you will find a massage parlour, a concierge desk and a 24-hour front desk. Other facilities offered include meeting facilities, a shared lounge and a games room. An array of activities can be enjoyed on site or in the surroundings, including table tennis. The property offers free parking.
The hotel is 2.4 km from popular Jagannath Temple, 35 km from the Konark Sun Temple and 50 km from Chilika Lake. The Puri Railway Station is 1 km away while the Biju Patnaik Airport is 60 km away.
Dining options include Samudra, the beachfront multi-cuisine restaurant come bar and The Shacks – a poolside bar. Private dining is possible with room service.','Puri','Chakratirtha Road, 752002 Puri, India',5,'Children of any age are welcome. Children aged 18 years and above are considered adults at this property.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are not allowed.'),

(423,'Sterling Puri','Sterling Puri is located 5 km from the Jagannath Mandir and 7 km from Puri Railway Station. Featuring views of the Bay of Bengal, the hotel offers an outdoor pool, a restaurant and free parking on site.
Air-conditioned guest rooms are fitted with a work desk, flat screen TV, minibar and satellite television. The en suite bathroom comes with toiletries and shower.
Recreational facilities include a games room, library and club house equipped with facilities for cricket, table tennis and beach volleyball. The staff at the tour desk can assist with making travel arrangements.
The on site restaurant serves a variety of local and international dishes.','Puri','55/2 and 255/3, Sipasarubali Village, Baliapanda,, 752002 Puri, India',5,'Children of any age are welcome.
Children aged 6 years and above are considered adults at this property.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are allowed. Charges may be applicable.'),

(424,'Mayfair Heritage','This property is 1 minute walk from the beach. Mayfair is located on the famous Puri Beach, overlooking the Bay of Bengal. This resort offers an outdoor pool and a fitness centre. Free parking and Wi-Fi are provided.
The spacious rooms at Mayfair Puri are fitted with a flat-screen TV, a DVD player and tea/coffee making facilities. Each room has en suite bathroom with amenities and shower.
Mayfair Puri offers a variety of facilities, including luggage deposit and currency exchange. The Mayfair Spa offers a full range of spa treatments for guests to indulge in. The hotel also has a tour desk to assist with travel arrangements.
Two States by Kanika is a restaurant that offers vibrant cuisines of Odisha and West Bengal. Al fresco dining can be enjoyed at the Verandah. The hotel’s bar features a selection of cocktails and mocktails.
Mayfair Puri is 30 km from Konark Museum and is near the Konark Sun Temple, the UNESCO World Heritage Site.','Puri','Chakratirtha Road, 751002 Puri, India',5,'Children of any age are welcome.
Children aged 6 years and above are considered adults at this property.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are not allowed.'),

(425,'Toshali Sands','This property is 18 minutes walk from the beach. Toshali Sands offers comfortable air-conditioned rooms, a shopping arcade and having exclusive beach . It features an outdoor pool, a gym and a tennis court.
Rooms at the Toshali Hotel come with a balcony, and they are equipped with cable TV and tea/coffee making facilities. En suite bathrooms come with a shower and toiletries.
Guests at Hotel Sands can relax with a massage, or unwind in the hot tub or the sauna. The children can get active on the playground.
Restaurant Phulpatna serves international favourites, while a wide range of wines and other beverages can be enjoyed at the poolside bar.
Toshali Sands hotel is located 5 km from the Lord Jagannath Temple and the Puri Railway Station and 27 km from Konark Temple. Biju Patnaik International Airport is a 55 -minute drive away.','Puri',' Puri Marine Drive, 752002 Puri, India',4,'Children of any age are welcome.
Children aged 6 years and above are considered adults at this property.
There is no capacity for cots at this property.
There is no capacity for extra beds at this property.','Pets are not allowed.');

INSERT INTO hotels (hid,hname,details,city,haddress,stars,children,pets) VALUES 
(301,'Le Roi Digha','Le Roi Digha is set in Digha and features a bar and a garden. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi throughout the property. There is free private parking and the property offers paid airport shuttle service.
At the hotel, all rooms are fitted with a desk, a flat-screen TV, a private bathroom, bed linen and towels. Rooms include air conditioning, and certain units at Le Roi Digha have a balcony.
Guests at the accommodation can enjoy a continental breakfast.
Mandarmoni is 21 km from Le Roi Digha.','Digha','Digha Railway Stations, 400708 Digha, India',3,'Children of any age are welcome.
Children aged 18 years and above are considered adults at this property.
There is no capacity for cots at this property.
The maximum number of extra beds allowed depends on the room you choose. Please check the maximum capacity for the room you selected.
All cots and extra beds are subject to availability.','Pets are allowed on request. Charges may be applicable.'),

(302,'The Palace Inn','This property is 2 minutes walk from the beach. THE PALACE INN is a 3-star property set in Digha, facing the beach. This 3-star hotel offers a 24-hour front desk and room service. There is a restaurant serving Asian cuisine, and free private parking is available.
All guest rooms in the hotel are fitted with a flat-screen TV. All rooms include a private bathroom with a shower, while certain rooms also offer a balcony and others also have city views.
Continental and à la carte breakfast options are available every morning at THE PALACE INN.
Mandarmoni is 19 km from the accommodation.','Digha','Old Digha Sea Beach Road, 721463 Digha, India',3,'Children older than 1 years are welcome.
Children aged 18 years and above are considered adults at this property.
There is no capacity for cots at this property.
There is no capacity for extra beds at this property.','Pets are not allowed.'),

(303,'Hotel Sea N Sand','Hotel Sea N Sand in Digha has 4-star accommodation with a bar, a garden and a terrace. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi. The hotel features family rooms.
Rooms are equipped with air conditioning and a flat-screen TV, and some rooms at the hotel have pool view. All rooms will provide guests with a wardrobe and a kettle.
A buffet breakfast is available each morning at Hotel Sea N Sand.
Mandarmoni is 18 km from the accommodation.','Digha','19,Barrister colony,Purba Medinipure, Old Digha Gobindabasan, 721428 Digha, India',4,'Children of any age are welcome.','Pets are allowed.'),

(304,'Hotel JP New Digha','This property is 2 minutes walk from the beach. Ditto Room Hotel JP New Digha features accommodation in Digha. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi throughout the property. Guests can use the indoor pool, or enjoy city views.
At the hotel the rooms have air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a bidet. All rooms will provide guests with a desk and a kettle.
A continental breakfast is available each morning at Ditto Room Hotel JP New Digha.
Mandarmoni is 21 km from the accommodation.','Digha','New Digha Sea Beach Road Purba Medinipore, 721463 Digha, India',3,'Children are not allowed.','Pets are not allowed.'),

(305,'Mira International','This property is 1 minute walk from the beach. Mira International offers accommodation in Digha. This 4-star hotel offers a 24-hour front desk and room service. There is a restaurant serving Chinese cuisine, and free private parking is available.
Mandarmoni is 19 km from the hotel.','Digha','New Digha Sea Beach Road, 721463 Digha, India',5,'Children of any age are welcome.
There is no capacity for cots at this property.
There is no capacity for extra beds at this property.','Pets are not allowed.');

create table rooms
(
    roomid int(11) primary key NOT NULL,
    rtype varchar(100) NOT NULL,
    rdetails text NOT NULL,
    price bigint(20) NOT NULL,
    hid int(11),
    FOREIGN KEY (hid) REFERENCES hotels(hid)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);  

INSERT INTO rooms (roomid, rtype, rdetails, price, hid) VALUES
(12345,'Deluxe Room','The Contemporary yet simple designed King bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.',10000,123),
(12346,'Deluxe Room','The Contemporary yet simple designed King bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.',8900,127),
(12347,'Deluxe Room','The Contemporary yet simple designed King bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.',11000,424),
(12348,'Luxurious Suite','Engulf yourself in the plush luxury of our premier rooms. An upgraded version of the Suite room, these rooms offer an elegant design with larger room space.',15000,123),
(12349,'Luxurious Suite','Engulf yourself in the plush luxury of our premier rooms. An upgraded version of the Suite room, these rooms offer an elegant design with larger room space.',14000,424),
(12351,'Luxurious Suite','Engulf yourself in the plush luxury of our premier rooms. An upgraded version of the Suite room, these rooms offer an elegant design with larger room space.',16000,425),
(12352,'Luxurious Suite','Engulf yourself in the plush luxury of our premier rooms. An upgraded version of the Suite room, these rooms offer an elegant design with larger room space.',15000,305),
(12353,'Standard Room','Simple design king bedded room are well equipped with modern amenities.',4500,123),
(12354,'Standard Room','Simple design king bedded room are well equipped with modern amenities.',5000,124),
(12355,'Standard Room','Simple design king bedded room are well equipped with modern amenities.',3800,125),
(12356,'Standard Room','Simple design king bedded room are well equipped with modern amenities.',5000,126),
(12357,'Standard Room','Simple design king bedded room are well equipped with modern amenities.',4500,424),
(12359,'Twin Deluxe Room','The Contemporary yet simple designed twin bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.',12000,124),
(12360,'Twin Deluxe Room','The Contemporary yet simple designed twin bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.',11500,123),
(12361,'Twin Deluxe Room','The Contemporary yet simple designed twin bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.',12000,424);


create table reservation
(
    rsvid int(11) primary key NOT NULL,
    checkin date NOT NULL,
    checkout date NOT NULL,
    uid int(11) NOT NULL,
    hid int(11) NOT NULL,
    roomid int(11) NOT NULL,
    FOREIGN KEY (uid) REFERENCES customer(uid),
    FOREIGN KEY (hid) REFERENCES hotels(hid),
    FOREIGN KEY (roomid) REFERENCES rooms(roomid)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

INSERT INTO reservation (rsvid, checkin, checkout, uid, hid, roomid) VALUES
(011,2022-01-13, 2022-01-15, 4, 123, 12345),
(012, 2022-02-08, 2022-02-09, 12,424,12349);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
  

