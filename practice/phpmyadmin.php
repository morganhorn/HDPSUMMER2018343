<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.8.5
 */

/**
 * Database `garage`
 */

/* `garage`.`appointments` */
$appointments = array(
  array('apptid' => '1','email' => 'morgan@fod.ie','service' => 'Major Repair','firstdate' => '2019-08-20','firsttime' => '8:00a.m','status' => 'Pending','mechanic' => 'Frank')
);

/* `garage`.`Bookings` */
$Bookings = array(
  array('email' => 'morgan@fod.ie','bookingid' => '2','apptid' => '1','vehicleid' => '123465','firstname' => 'Morn','lastname' => 'Hnr','phonenumber' => '123123123','addressline1' => '123123123','addressline2' => '1231231','city' => 'Dublin','country' => 'Ireland')
);

/* `garage`.`log_in` */
$log_in = array(
  array('adminid' => '1','username' => 'admin','password' => 'admin'),
  array('adminid' => '2','username' => 'admin','password' => 'admin')
);

/* `garage`.`parts` */
$parts = array(
  array('id' => '1','name' => 'Conventional Motor Oil','service' => 'Annual Service','price' => '10'),
  array('id' => '2','name' => 'Synthetic Blend Oil','service' => 'Annual Service','price' => '20'),
  array('id' => '3','name' => 'Full Synthetic Oil','service' => 'Annual Service','price' => '30'),
  array('id' => '4','name' => 'Heavy Diesel Motor Oil','service' => 'Annual Service','price' => '40'),
  array('id' => '5','name' => 'Spark Plug','service' => 'Annual Service','price' => '10'),
  array('id' => '6','name' => 'Air Filter','service' => 'Annual Service','price' => '12'),
  array('id' => '7','name' => 'Alignment','service' => 'Annual Service','price' => '75'),
  array('id' => '8','name' => 'PCV Valve','service' => 'Annual Service','price' => '10'),
  array('id' => '9','name' => 'Brake Calipers','service' => 'Annual Service','price' => '70'),
  array('id' => '10','name' => 'Water Pump','service' => 'Annual Service','price' => '70'),
  array('id' => '13','name' => 'Front Pads','service' => 'Major Repair','price' => '150'),
  array('id' => '14','name' => 'Timing Belt','service' => 'Major Repair','price' => '400'),
  array('id' => '15','name' => 'Radiator','service' => 'Major Repair','price' => '200'),
  array('id' => '16','name' => 'Piston Ring','service' => 'Major Repair','price' => '100'),
  array('id' => '17','name' => 'Clutch Pedal','service' => 'Major Repair','price' => '100'),
  array('id' => '18','name' => 'Transmission Fluid Flush','service' => 'Major Repair','price' => '150'),
  array('id' => '19','name' => 'Rotor Replacement','service' => 'Major Repair ','price' => '150'),
  array('id' => '20','name' => 'Bumper','service' => 'Major Repair','price' => '400'),
  array('id' => '21','name' => 'New Door','service' => 'Major Repair','price' => '500'),
  array('id' => '22','name' => 'Alternator','service' => 'Major Repair','price' => '600'),
  array('id' => '23','name' => 'Changing Wires','service' => 'Major Service','price' => '30'),
  array('id' => '24','name' => 'Fix Oxygen Sensor','service' => 'Major Service','price' => '150'),
  array('id' => '25','name' => 'Mass Air Sensor Cleaning','service' => 'Major Service ','price' => '120'),
  array('id' => '26','name' => 'Replace Headlight','service' => 'Major Service','price' => '30'),
  array('id' => '27','name' => 'Replace Window','service' => 'Major Service','price' => '300'),
  array('id' => '28','name' => 'Change Battery','service' => 'Major Service','price' => '200'),
  array('id' => '29','name' => 'Replace Muffler','service' => 'Major Service','price' => '100'),
  array('id' => '30','name' => 'Change Tires','service' => 'Major Service','price' => '100'),
  array('id' => '31','name' => 'Power Steering Flush','service' => 'Repair/Fault','price' => '50'),
  array('id' => '32','name' => 'Coolant','service' => 'Repair/Fault','price' => '120'),
  array('id' => '33','name' => 'Serpentine Belt','service' => 'Repair/Fault','price' => '80'),
  array('id' => '34','name' => 'Crankshaft','service' => 'Repair/Fault','price' => '400'),
  array('id' => '35','name' => 'Wind Shield Wipers','service' => 'Repair/Fault','price' => '30'),
  array('id' => '36','name' => 'Differential','service' => 'Repair/Fault','price' => '300'),
  array('id' => '37','name' => 'Antenna','service' => 'Repair/Fault','price' => '50'),
  array('id' => '38','name' => 'Horn','service' => 'Repair/Fault','price' => '60'),
  array('id' => '39','name' => 'Fuel Filter','service' => 'Repair/Fault','price' => '50'),
  array('id' => '41','name' => 'Valve Seal','service' => 'Repair/Fault','price' => '50')
);

/* `garage`.`Register` */
$Register = array(
  array('email' => 'asdf@yahoo.com','id' => '125','firstname' => 'asdfa','lastname' => 'asfdasdf','phonenumber' => '123123','password' => '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
  array('email' => 'morgan@fod.ie','id' => '127','firstname' => 'Morgan','lastname' => 'Horn','phonenumber' => '6169284042','password' => 'a64e2a4adcc4ae20e6e35babd2a181619cb8e224'),
  array('email' => 'morganh@yahoo.com','id' => '126','firstname' => 'Morgan','lastname' => 'Horn','phonenumber' => '6169284042','password' => '88ea39439e74fa27c09a4fc0bc8ebe6d00978392'),
  array('email' => 'morgn@gmail.com','id' => '124','firstname' => 'morg','lastname' => 'horn','phonenumber' => '12334456456','password' => '123123123'),
  array('email' => 'morn@fod.ie','id' => '123','firstname' => 'morgan','lastname' => 'horn','phonenumber' => '','password' => '123456')
);

/* `garage`.`Vehicle` */
$Vehicle = array(
  array('email' => 'morgan@fod.ie','vehicleid' => '123465','year' => '1234','make' => 'ford','model' => 'focus','license' => '11111','engine' => 'diesal','comments' => 'he\'ll')
);
