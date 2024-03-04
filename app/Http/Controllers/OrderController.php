<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index()
    {
        // Convert image to base64 encoded string

        $logImg = base64_encode(file_get_contents(public_path('img/logo.jpg')));
        $logo = 'data:image/jpeg;base64,' . $logImg;

        $imageData = base64_encode(file_get_contents(public_path('img/product1.jpg')));
        $imageUrl = 'data:image/jpeg;base64,' . $imageData;

        $signature_img1 = base64_encode(file_get_contents(public_path('img/Picture1.jpg')));
        $signature1 = 'data:image/jpeg;base64,' . $signature_img1;

        $signature_img2 = base64_encode(file_get_contents(public_path('img/Picture2.jpg')));
        $signature2 = 'data:image/jpeg;base64,' . $signature_img2;
        
        $data = [
            'logo' => $logo,
            'invoice_to_(exporter)' => 'UNISOURCE TRADING (INDIA) PVT. LTD <br> PLOT NO. 166, 2ND FLOOR, UDYOG VIHAR, <br> PHASE-1, GURGAON HARYANA -122008,INDIA <br> GSTIN :06AAACU5758N1ZS',
            'po_no' => 20142,
            'po_date' => '21-Feb-2024',
            'order_no' => 18126,
            'order_date' => '20-Feb-2024',
            'supplier' => 'SHARMA HOMETEX PRIVATE LIMITED',
            'supplier_address' => 'C-24, Upsidc Industrial Area, Site-C, Sikandra Agra, UTTAR PRADESH, Agra - 282007AGRA, UTTAR PRADESH (INDIA), Pin : - 282007',
            'supplier_gstin' => '09ABBCS0111M1ZI',
            'terms_of_delivery' => 'FOB NHAVA SHEVA MUMBAI',
            'delivery_date_(at_cha)' => '30-Apr-2024',
            'mode_of_shipment' => 'SEA',
            'port_of_loading' => 'NHAVA SHEVA',
            'delivery_at' => 'N.S.HUSSAINA LOGISTICS & SERVICES <br> SHAKTI REALTY <br> OFFICE NO 11, PLOT NO 15/C SEC-2, DRONAGIRI-40072CONTACT NO MR. GOKUL - 9833394570 / 9594964570 / 9967642676',
            'payment_mode_and_terms' => 'PDC 60 days',
            'uniqueid' => 143613,
            'buyer_style' => 'SH-RG-1901',
            'brand_name' => 'URBAN REPUBLIC L',
            'season' => 'FALL WINTER',
            'year' => 2024,
            'wash' => 'N.A',
            'product_hsn_no' => 57050039,
            'type' => ['NAFLOORING','RUGS','REGULAR',],
            'set' => 'N/A',
            'pattern' => 'TIE/DYE',
            'product_image1' => $imageUrl,
            'product_image2' => $imageUrl,
            'composition' => '100% COTTON',
            'description' => 'TIE-DYE JUTE WOVEN RUG 160X210CM',
            'buyer_comments' => 'AS PER THE APPROVED SAMPLE',
            'other_comments' => 'as per samples',
            'b.o_no' => 'NA',
            'seal_no' => 'NA',
            'fabric_details_and_consumption_table' => [
                'Main Fabric' => [
                    'value' => 'JUTE - JUTE',
                    'Consumption' => '0%',
                ],
                'Secondary Fabric' => [
                    'value' => 'NOT APPLICABLE - NOT APPLICABLE',
                    'Consumption' => '0%',
                ],
                'Lining Fabric' => [
                    'value' => 'NOT APPLICABLE - NOT APPLICABLE',
                    'Consumption' => '0%',
                ],
            ],
            'size' => 'NA',
            'tolerance_quantity_limit' => '0%',
            'basic_color' => "MULTICOLOR",
            'PantoneNo' => "160X21",
            'Qty' => "60",
            'Amt_(INR)' => "159000.00",
            'price' => "2,650.00",
            'sub_total' => "159000.00",
            'billing_info' => "DO NOT SHIP THIS ORDER/GOODS WITHOUT \n\r A SHIPMENT RELEASE LETTER (SRL) \n\r ISSUED BY UNISOURCE, ALL GOODS \n\r OTHERWISE ARE TO YOUR COST & RISK",
            'igst' => "0.1%",
            'igst_amt' => "0.10",
            'igst_total' => "159.00",
            'sub_total_(tax)' => "159.00",
            'grand_total' => "159159.00",
            'package' => [
                'multi_color_detail' => NULL,
                'packing_type' => "MULTIPLE PACKING",
                'packaging' => "ROLL PACK",
                'price_ticket' => "No",
                'pcs/per_carton' => "1",
                'carton' => "7 PLY WATER RESISTANT,240 PSI",
                'polybag' => "P.P. 180 GG. SELF SEAL",
                'sec._audit_expire' => NULL,
                'eth._audit_expires' => NULL,
            ],
            'nomination_applicable' => "No",
            'payable_list' => array(
                0 => 
                array (
                  'over_head' => 'Country Of Origin/CDV',
                  'applicable' => 'No',
                  'vendor' => NULL,
                  'cost_to' => NULL,
                  'req_gram_per_box' => NULL,
                  'req_pouch_per_box' => NULL,
                  'price' => NULL,
                ),
                1 => 
                array (
                  'over_head' => 'FABRIC PERFORMANCE',
                  'applicable' => 'No',
                  'vendor' => NULL,
                  'cost_to' => NULL,
                  'req_gram_per_box' => NULL,
                  'req_pouch_per_box' => NULL,
                  'price' => NULL,
                ),
                2 => 
                array (
                  'over_head' => 'GARMENT PERFORMANCE',
                  'applicable' => 'No',
                  'vendor' => NULL,
                  'cost_to' => NULL,
                  'req_gram_per_box' => NULL,
                  'req_pouch_per_box' => NULL,
                  'price' => NULL,
                ),
                3 => 
                array (
                  'over_head' => 'MID Line',
                  'applicable' => 'No',
                  'vendor' => NULL,
                  'cost_to' => 'Unisource',
                  'req_gram_per_box' => NULL,
                  'req_pouch_per_box' => NULL,
                  'price' => NULL,
                ),
                4 => 
                array (
                  'over_head' => 'Final Random Inspection(FRI)',
                  'applicable' => 'Yes',
                  'vendor' => 'UNISOURCE TRADING (INDIA) PVT. LTD',
                  'cost_to' => 'Unisource',
                  'req_gram_per_box' => NULL,
                  'req_pouch_per_box' => NULL,
                  'price' => NULL,
                ),
                5 => 
                array (
                  'over_head' => 'Label and Tag',
                  'applicable' => 'No',
                  'vendor' => NULL,
                  'cost_to' => NULL,
                  'req_gram_per_box' => NULL,
                  'req_pouch_per_box' => NULL,
                  'price' => NULL,
                ),
                6 => 
                array (
                  'over_head' => 'SILICA GEL',
                  'applicable' => 'Yes',
                  'vendor' => 'MOISTURE CONTROL PACK-8800440455',
                  'cost_to' => 'Vendor',
                  'req_gram_per_box' => 17.5,
                  'req_pouch_per_box' => 4,
                  'price' => '1.25 per 5gr.',
                ),
                7 => 
                array (
                  'over_head' => 'Wild Life Certificate',
                  'applicable' => 'No',
                  'vendor' => NULL,
                  'cost_to' => NULL,
                  'req_gram_per_box' => NULL,
                  'req_pouch_per_box' => NULL,
                  'price' => NULL,
                ),
                8 => 
                array (
                  'over_head' => 'Vriksh Certificate',
                  'applicable' => 'No',
                  'vendor' => NULL,
                  'cost_to' => NULL,
                  'req_gram_per_box' => NULL,
                  'req_pouch_per_box' => NULL,
                  'price' => NULL,
                ),
            ),
            "extra_data_1" => "WE SHALL PAY THE ABOVE MENTION COST AS APPLICABLE",
            'packing_comments' => NULL,
            'special_comments' => NULL,
            'signature1' => $signature1,
            'signature2' => $signature2
        ];
        
        $pdf = Pdf::loadView('pdf', ['data' => $data]);
        // return $pdf->download('order.pdf');
        return $pdf->stream('invoice.pdf');
    }
}
