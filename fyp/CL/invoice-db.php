<?php  
include ('fpdf17/fpdf17/fpdf.php');

include ('config/connection.php');

$query = mysqli_query($conn,"SELECT * FROM cust_orders inner join customer on cust_orders.CustID=customer.CustID where OrderID='".$_GET['OrderID']."'");
$invoice = mysqli_fetch_array($query);


$pdf = new FPDF('P','mm','A4');
$pdf -> AddPage();

//set font
$pdf ->SetFont('Arial','B',14);

$pdf ->Cell(130  ,5,'Coffeloca',0,0);
$pdf ->Cell(59  ,5,'Invoice',0,1);

//set font
$pdf ->SetFont('Arial','',12);

$pdf ->Cell(130  ,5,'[Address]',0,0);
$pdf ->Cell(59  ,5,'',0,1);

$pdf ->Cell(130  ,5,'[City, Country, ZIP]',0,0);
$pdf ->Cell(25  ,5,'Date',0,1);
$pdf->Cell(34 ,5,'[dd/mm/yyyy]',0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+12345678]',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,$invoice['OrderID'],0,1);//end of line

$pdf->Cell(130 ,5,'Fax [+12345678]',0,0);
$pdf->Cell(25 ,5,'Customer ID',0,0);
$pdf->Cell(34 ,5,$invoice['CustID'],0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$invoice['CustName'],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[Company Name]',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$invoice['Address'],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$invoice['PhoneNo'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Description',1,0);
//$pdf->Cell(25 ,5,'Taxable',1,0);
$pdf->Cell(34 ,5,'Amount (RM)',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(130 ,5,'UltraCool Fridge',1,0);
//$pdf->Cell(25 ,5,'-',1,0);
$pdf->Cell(34 ,5,'3,250',1,1,'R');//end of line

$pdf->Cell(130 ,5,'Supaclean Diswasher',1,0);
//$pdf->Cell(25 ,5,'-',1,0);
$pdf->Cell(34 ,5,'1,200',1,1,'R');//end of line

$pdf->Cell(130 ,5,'Something Else',1,0);
//$pdf->Cell(25 ,5,'-',1,0);
$pdf->Cell(34 ,5,'1,000',1,1,'R');//end of line

//summary
$pdf->Cell(95 ,5,'',0,0);
$pdf->Cell(35 ,5,'Subtotal: RM',0,0);
$pdf->Cell(4 ,5,'',0,0);
$pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line

$pdf->Cell(95 ,5,'',0,0);
$pdf->Cell(35 ,5,'Delivery Fee: RM',0,0);
$pdf->Cell(4 ,5,'',0,0);
$pdf->Cell(30 ,5,'5.00',1,1,'R');//end of line

// $pdf->Cell(125 ,5,'',0,0);
// $pdf->Cell(30 ,5,'Tax Rate',0,0);
// $pdf->Cell(4 ,5,'',0,0);
// $pdf->Cell(30 ,5,'10%',1,1,'R');//end of line

$pdf->Cell(95 ,5,'',0,0);
$pdf->Cell(35 ,5,'Total Due',0,0);
$pdf->Cell(4 ,5,'',0,0);
$pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line


$pdf ->Output();
?>