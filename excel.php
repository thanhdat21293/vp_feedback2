<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */
include 'connect.php';
/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
//echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("PHPExcel Test Document")
							 ->setSubject("PHPExcel Test Document")
							 ->setDescription("Test document for PHPExcel, generated using PHP classes.")
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("Test result file");
							 

							 
$arrHeader = array(
    'font'  => array(
		'bold' => true,
        'color' => array('rgb' => '000'),
        'name'  => 'Arial',
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '000000'),
			
        )
    ),
    'borders' => array(
	    'allborders' => array(
	      'style' => PHPExcel_Style_Border::BORDER_THIN
	    )
	)
);

$arrBorder = array(
    'borders' => array(
	    'allborders' => array(
	      'style' => PHPExcel_Style_Border::BORDER_THIN
	    )
	)
);

$arrAll = array(
    'font'  => array(
        'color' => array('rgb' => '000'),
        'name'  => 'Arial',
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '000000')
        )
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
    )
);

$objPHPExcel->getActiveSheet()->getStyle('A1:K1')->getFill()->applyFromArray(array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array(
             'rgb' => 'dddddd'
        )
    ));
	
$objPHPExcel->getActiveSheet()->getStyle('A1:K1')->applyFromArray($arrHeader);
$objPHPExcel->getActiveSheet()->getStyle('A1:K300')->applyFromArray($arrAll);

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(50);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(50);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(50);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(50);

$objPHPExcel->getActiveSheet()->getStyle('A1:K300')->getAlignment()->setWrapText(true); 


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'STT')
            ->setCellValue('B1', 'Họ và tên')
            ->setCellValue('C1', 'Email')
            ->setCellValue('D1', '1. Anh/chị đã bao giờ sử dụng dịch vụ (báo cáo năng suất, báo cáo phân tích, …) của BIC chưa?')
            ->setCellValue('E1', '2. Tần suất anh/ chị sử dụng báo cáo như thế nào?')
            ->setCellValue('F1', '3. Báo cáo BIC đưa ra có đáp ứng đủ nhu cầu, mục đích của anh/ chị không?')
            ->setCellValue('G1', 'Anh/chị vui lòng cung cấp thông tin chi tiết vì sao BIC chưa đáp ứng đủ nhu cầu, mục đích của anh/ chị để BIC có phuong án cải thiện kịp thời.')
            ->setCellValue('H1', '4. Anh/ chị đánh giá như thế nào về chất lượng dịch vụ của BIC?')
            ->setCellValue('I1', 'Anh/chị vui lòng cung cấp thông tin chi tiết vì sao anh/chị chưa hài lòng về chất lượng dịch vụ của chúng tôi để BIC có phuong án cải thiện kịp thời.')
            ->setCellValue('J1', '5. Anh/chị vui lòng cho xin ý kiến đóng góp để BIC cải thiện chất lượng, dịch vụ tốt hơn.')
            ->setCellValue('K1', '6. Anh/chị cảm thấy vướng mắc trong công việc hiện tại, hãy chia sẻ với BIC để những công cụ hỗ trợ và phân tích của chúng tôi sẽ góp phần cải tiến công việc của anh/chị?');


$sql="SELECT * FROM vpbank";
$query = mysql_query($sql);
$count = 1;
while($row = mysql_fetch_object($query)) {
	$n = $count+1;
	if($row->dichvu == 'no') {
		$dichvu = "Không";
	}else{
		$dichvu = "Có";
	}
	
	if($row->baocao_chon == 'no') {
		$baocao = "Không";
	}else{
		$baocao = "Có";
	}
	
	if($row->danhgia_chon == 1) {
		$danhgia_chon = "Rất không hài lòng";
	}else if($row->danhgia_chon == 2) {
		$danhgia_chon = "Không hài lòng";
	}else if($row->danhgia_chon == 3) {
		$danhgia_chon = "Không có ý kiến";
	}else if($row->danhgia_chon == 4) {
		$danhgia_chon = "Hài lòng";
	}else {
		$danhgia_chon = "Rất hài lòng";
	}
	$objPHPExcel->getActiveSheet()->getStyle('A'.$n.':K'.$n)->applyFromArray($arrBorder);
	$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$n, $count)
            ->setCellValue('B'.$n, $row->hoten)
            ->setCellValue('C'.$n, $row->email)
            ->setCellValue('D'.$n, $dichvu)
            ->setCellValue('E'.$n, $row->tansuat)
            ->setCellValue('F'.$n, $baocao)
            ->setCellValue('G'.$n, $row->baocao_text)
            ->setCellValue('H'.$n, $danhgia_chon)
            ->setCellValue('I'.$n, $row->danhgia_text)
            ->setCellValue('J'.$n, $row->chatluong)
            ->setCellValue('K'.$n, $row->congviec);
	$count++;
}


// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('BIC');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="BIC.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
