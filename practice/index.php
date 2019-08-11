<?php
/*
 * INVOICR : THE PHP INVOICE GENERATOR (HTML, DOCX, PDF)
 * Visit https://code-boxx.com/invoicr-php-invoice-generator for more
 * 
 * ! YOU CAN DELETE THE ENTIRE EXAMPLE FOLDER IF YOU DON'T NEED IT... !
 */

/* [STEP 1 - CREATE NEW INVOICR OBJECT] */
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "invoicr.php";
$invoice = new Invoicr();


/* [STEP 2 - FEED ALL THE INFORMATION] */
// 2A - COMPANY INFORMATION
// OR YOU CAN PERMANENTLY CODE THIS INTO THE LIBRARY ITSELF
$invoice->set("company", [
	(isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . "logo.png",
	__DIR__ . DIRECTORY_SEPARATOR . "logo.png", 
	"Ger's Garage", 
	"Street Address, City, State, Zip",
	"Phone: 01-555-6574",
	"https://gers-garage.com",
	"ger@gersgarage.com"
]);

// 2B - INVOICE INFO
$invoice->set("invoice", [
	["Invoice #", $row["bookingid"]],
	["Appt Date", $row["firstdate"]],
	["Appt Time", $row["firsttime"]],
	["P.O. #", "CB-789-123"]
]);

// 2C - BILL TO
$invoice->set("billto", [
	$row["firstname"]." ".$row["lastname"],
	$row["addressline1"]."<br>".$row["addressline2"], 
	$row["city"].", ".$row["country"]
]);

// 2D - SHIP TO
//$invoice->set("shipto", [
	//"Customer Name",
	//"Street Address", 
	//"City, State, Zip"
//]);
//$sql = "SELECT * FROM bookings"; //where bookingid=invoiceid + appt. 
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "<tr><td>" . $row["bookingid"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td>". $row["phonenumber"]." </td><td> " .$row["addressline1"]." " .$row["addressline2"]. " </td><td> " .$row["city"]. "</td><td> " .$row["country"]. " </td><td>" .$row["bookingdate"]. " </td><td>" .$row["serviceneeded"]." </td>" ;
//    }
//} else {
//    echo "0 results";
//}
// 2E - ITEMS
// YOU CAN JUST DUMP THE ENTIRE ARRAY IN USING SET, BUT HERE IS HOW TO ADD ONE AT A TIME...
//Specific which services will be displayed
$items = [
	[$row["name"],  $row["price"]],
	[$row["name"],  $row["price"]],
	[$row["name"],  $row["price"]],
	[$row["name"],  $row["price"]],
	[$row["name"],  $row["price"]]
];
foreach ($items as $i) { $invoice->add("items", $i); }
//how to add up prices 
// 2F - TOTALS
$invoice->set("totals", [
	["SUB-TOTAL", "$108.00"],
	["DISCOUNT 10%", "-$10.80"],
	["GRAND TOTAL", "$97.20"]
]);

// 2G - NOTES, IF ANY
//$invoice->set("notes", [
	//"Cheques should be made payable to Code Boxx",
	//"Get a 10% off with the next purchase with discount code DOGE1234!"
//]);


/* [STEP 3 - OUTPUT] */
// 3A - CHOOSE TEMPLATE, DEFAULTS TO SIMPLE IF NOT SPECIFIED
$invoice->template("blueberry");

/*****************************************************************************/
// 3B - OUTPUT IN HTML
// DEFAULT DISPLAY IN BROWSER | 1 DISPLAY IN BROWSER | 2 FORCE DOWNLOAD | 3 SAVE ON SERVER
 //$invoice->outputHTML();
// $invoice->outputHTML(1);
// $invoice->outputHTML(2, "invoice.html");
// $invoice->outputHTML(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.html");
/*****************************************************************************/
// 3C - PDF OUTPUT
// DEFAULT DISPLAY IN BROWSER | 1 DISPLAY IN BROWSER | 2 FORCE DOWNLOAD | 3 SAVE ON SERVER
 $invoice->outputPDF();
// $invoice->outputPDF(1);
// $invoice->outputPDF(2, "invoice.pdf");
// $invoice->outputPDF(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.pdf");
/*****************************************************************************/
// 3D - DOCX OUTPUT
// DEFAULT FORCE DOWNLOAD| 1 FORCE DOWNLOAD | 2 SAVE ON SERVER
// $invoice->outputDOCX();
// $invoice->outputDOCX(1, "invoice.docx");
// $invoice->outputDOCX(2, __DIR__ . DIRECTORY_SEPARATOR . "invoice.docx");
/*****************************************************************************/
?>