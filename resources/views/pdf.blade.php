<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Invoice</title>
        <style>
            table{
                width: 100%;
            }
            table.order{
                margin-top:10px;
            }
            table,
            table td{
                border: 1px solid black;
                border-collapse: collapse;
                font-size: 12px;
            }
            table.order td,
            table.order th{
                padding: 3px 3px 3px 7px;
            }
            table.table-common td{
                padding: 3px 5px;
            }
            table.fabric-table td{
                border: 1px dotted black;
                border-top: 0px !important;
            }
            .tbl-heading{
                text-align: center;
                position: relative;
                padding-top: 20px;
            }
            .tbl-heading img{
                position: absolute;
                top:0px;
                left:-3px;
            }
            .hd-last{
                padding-top: 5px;
            }
            
            .font-bold{
                font-weight: bold;
            }
            .pd_bot{
                padding-bottom: 2px;
            }
            table.billing-table td,
            table.package-table td,
            table.common-table td{
                padding-left: 5px;
            }
            .package-table span{
                display:inline-block;
                padding-top:5px;
            }
            .package-table .left-span{
                width:100px;
            }
            .acceptence{
                font-size: 16px;
                padding-top: 20px;
            }
            .foot{
                width:100%;
                padding-top: 30px;
            }
            .foot,
            .foot-left,
            .foot-right{
                display: inline-block;
                font-size: 14px;
            }
            .foot-left{
                float:left;
                width:50%;
                border: 1px solid black;
                border-radius: 30px;
            }
            .foot-right{
                float:right;
                width:48%;
                position: relative;
            }
            .foot-right img{
                position: absolute;
            }
            .foot-right .sig1{
                top:-20px;
                left:40px;
            }
            .foot-right .sig2{
                top:30px;
                left:190px;
            }
            .foot .foot-left div,
            .foot .foot-right div{
                padding: 10px 0px 10px 15px;
            }
            .foot .foot-left div:first-child,
            .foot .foot-right div:first-child{
                padding-bottom: 30px;
            }
            .text-top{
                vertical-align: top;
            }
        </style>
    </head>
    <body>
        <div class="order-invoice">
            <div class="tbl-heading">
                <div><strong>PURCHASE ORDER</strong></div>
                <div><strong>(Vendor Copy)</strong></div>
                <div class="hd-last">(PURCHASE MEANT FOR EXPORT ONLY AT CONCESSIONAL GST RATE)</div>
                <img src="<?= $data['logo']; ?>" width="200">
            </div>
            <?php if($data): ?>
                
                <table class="order">
                    <tr>
                        <td rowspan="3" colspan="2" class="text-top">
                            <div class="pd_bot font-bold">Invoice To (Exporter)</div>
                            <div><?= $data['invoice_to_(exporter)']; ?></div>
                        </td>
                        <td>
                            <div><span class="font-bold">PO. NO.</span> <?= $data['po_no']; ?> &nbsp;&nbsp; <span class="font-bold">PO. Date</span> <?= $data['po_date']; ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div><span class="font-bold">Order No.</span> <?= $data['order_no']; ?> &nbsp;&nbsp; <span class="font-bold">Order Date</span> <?= $data['order_date']; ?></div>
                        </td>
                    </tr>
                    <tr>    
                        <td rowspan="3" class="text-top">
                            <div><span class="font-bold">Supplier: </span> <?= $data['supplier']; ?></div>
                            <div>
                                <div class="pd_bot"><?= $data['supplier_address']; ?></div>
                                <div class="font-bold">GSTIN: <?= $data['supplier_gstin'];?></div>
                            </div>
                        </td>
                    </tr>
                    <tr>    
                        <td class="text-top">
                            <div class="pd_bot"><span class="font-bold">Terms Of Delivery </span></div>
                            <div> <?= $data['terms_of_delivery']; ?></div>
                        </td>
                        <td class="text-top">
                            <div class="pd_bot"><span class="font-bold">Delivery Date (At CHA) </span></div>
                            <div><?= $data['delivery_date_(at_cha)']; ?></div>
                        </td>
                    </tr>
                    <tr>    
                        <td class="text-top">
                            <div class="pd_bot"><span class="font-bold">Mode Of Shipment </span></div>
                            <div> <?= $data['mode_of_shipment']; ?></div>
                        </td>
                        <td class="text-top">
                            <div class="pd_bot"><span class="font-bold">Port Of Loading </span></div>
                            <div><?= $data['port_of_loading']; ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" colspan="2" class="text-top">
                            <div><span class="font-bold">Delivery At</span></div> 
                            <div><?= $data['delivery_at']; ?></div>
                        </td>
                        <td class="text-top">
                            <div><span class="font-bold">Payment Mode & Terms</span></div> 
                            <div><?= $data['payment_mode_and_terms']; ?></div>
                        </td>
                    </tr>
                    <tr><td class="text-top">ALL PAYMENTS DUE FROM DELIVERY AT CHA</td></tr>
                    <tr><td class="text-top">SHIPMENT WITHOUT SRL WILL NOT BE ACCEPTED AT CHA</td></tr>
                    <tr>
                        <td>
                            <div class="pro-details1">
                                <div><span class="font-bold">UniqueID</span> &nbsp;&nbsp; <span><?= $data['uniqueid']; ?></span></div>
                                <div><span class="font-bold">Buyer Style</span> &nbsp;&nbsp; <span><?= $data['buyer_style']; ?></span></div>
                                <div><span class="font-bold">Brand Name</span> &nbsp;&nbsp; <span><?= $data['brand_name']; ?></span></div>
                                <div><span class="font-bold">Season</span> &nbsp;&nbsp; <span><?= $data['season']; ?></span></div>
                                <div><span class="font-bold">Year</span> &nbsp;&nbsp; <span><?= $data['year']; ?></span></div>
                                <div><span class="font-bold">Wash</span> &nbsp;&nbsp; <span><?= $data['wash']; ?></span></div>
                                <div><span class="font-bold">Product HSN No.</span> &nbsp;&nbsp; <?= $data['product_hsn_no']; ?></span></div>
                            </div>
                        </td>
                        <td class="text-top">
                            <div>
                                <span class="font-bold">Type</span>
                                <?php
                                    if(is_array($data['type']) && count($data['type'])>0){
                                        foreach($data['type'] as $key => $value){
                                            if($key>0){
                                                echo '<br>';
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                            }
                                            echo $value;
                                        }
                                    }
                                ?>
                            </div> 
                            <div><span class="font-bold">Set</span> <span><?= $data['set']; ?></span></div>
                            <div><span class="font-bold">Pattern</span> <span><?= $data['pattern']; ?></span></div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                        </td>
                        <td>
                            <div style="padding-top: 25px;padding-left:10px;">
                                <img src="<?php echo $data['product_image1']; ?>" width="100" style="padding-right: 10px;">
                                <img src="<?php echo $data['product_image1']; ?>" width="100">
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="pro-details1">
                                <div><span class="font-bold">Composition</span> &nbsp;&nbsp; <span><?= $data['composition']; ?></span></div>
                                <div><span class="font-bold">Description</span> &nbsp;&nbsp; <span><?= $data['description']; ?></span></div>
                                <div><span class="font-bold">Buyer Comments</span> &nbsp;&nbsp; <span><?= $data['buyer_comments']; ?></span></div>
                                <div><span class="font-bold">Other Comments</span> &nbsp;&nbsp; <span><?= $data['other_comments']; ?></span></div>
                            </div>
                        </td>
                        <td class="text-top">
                            <div class="pro-details">
                                <div><span class="font-bold">B.O. No.</span> &nbsp;&nbsp; <span><?= $data['b.o_no']; ?></span></div>
                                <div><span class="font-bold">Seal No.</span> &nbsp;&nbsp; <span><?= $data['seal_no']; ?></span></div>
                            </div>
                        </td>
                    </tr>    
                </table>

                <table class="fabric-table">
                    <tr>
                        <td class="pd_bot" style="text-align: center;"><strong>Fabric Details</strong></td>
                        <td class="pd_bot" style="text-align: right;padding-right:5px;"><strong>Consumption(%)</strong></td>
                    </tr>
                    <?php
                        if($data['fabric_details_and_consumption_table']){
                            $febric = $data['fabric_details_and_consumption_table'];
                            foreach($febric as $fb_name => $details){ ?>
                                <tr>
                                    <td style="padding-top:5px;padding-left:8px;">
                                        <span style="width:100px;display:inline-block;"><?= $fb_name; ?></span>
                                        <span style="display:inline-block;">
                                            <?php if(is_array($details)){
                                                echo $details['value'];
                                            } ?>
                                        </span>
                                    </td>
                                    <td style="text-align:right;padding-right:8px;">
                                        <span style="display:inline-block;">
                                            <?php if(is_array($details)){
                                                echo $details['Consumption'];
                                            } ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
                    ?>
                </table>
                
                <table class="billing-table">
                    <tr>
                        <td colspan="2"><strong>Size</strong> <?= $data['size']; ?></td>
                        <td colspan="2"><strong>Tolerance Quantity Limit</strong> <?= $data['tolerance_quantity_limit']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Basic Color</strong></td>
                        <td><strong>PantoneNo</strong></td>
                        <td><strong>Qty</strong></td>
                        <td><strong>Amt. (INR)</strong></td>
                    </tr>
                    <tr>
                        <td><?= $data['basic_color']; ?></td>
                        <td><?= $data['PantoneNo']; ?></td>
                        <td><?= $data['Qty']; ?></td>
                        <td><?= $data['Amt_(INR)']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Price</strong> <?= $data['price']; ?></td>
                        <td><strong>Sub Total</strong></td>
                        <td><?= $data['sub_total']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2" style="width:183px;"><?= $data['billing_info']; ?></td>
                        <td>IGST <?= $data['igst']; ?> &nbsp;&nbsp; <?= $data['igst_amt']; ?></td>
                        <td><?= $data['igst_total']; ?></td>
                    </tr>
                    <tr><td><strong>Sub Total (Tax)</strong></td><td><?= $data['sub_total_(tax)']; ?></td></tr>
                    <tr>
                        <td colspan="3" style="text-align:right;padding-right:5px;"><strong>Grand Total</strong></td>
                        <td><?= $data['grand_total']; ?></td>
                    </tr>
                </table>

                <?php if($data['package']): $package = $data['package']; ?>
                    <table class="package-table" style="border-top:0px;">
                        <tr>
                            <td style="border-top:0px;" colspan="2"><strong>Multi Color Detail: </strong> <?= $package['multi_color_detail']; ?></td>
                        </tr>
                        <tr>
                            <td>
                                <div><span class="left-span"><strong>Packing Type</strong></span> <span><?= $package['packing_type']; ?></span></div>
                                <div><span class="left-span"><strong>Packaging</strong></span> <span><?= $package['packaging']; ?></span></div>
                                <div><span class="left-span"><strong>Price Ticket</strong></span> <span><?= $package['price_ticket']; ?></span></div>
                                <div><span class="left-span"><strong>Pcs/Per Carton</strong></span> <span><?= $package['pcs/per_carton']; ?></span></div>
                            </td>
                            <td>
                                <div><span class="left-span"><strong>Carton</strong></span> <?= $package['carton']; ?></div>
                                <div><span class="left-span"><strong>Polybag</strong></span> <?= $package['polybag']; ?></div>
                                <div><span class="left-span"><strong>Sec. Audit Expire</strong></span> <?= $package['sec._audit_expire']; ?></div>
                                <div><span class="left-span"><strong>Eth. Audit Expires</strong></span> <?= $package['eth._audit_expires']; ?></div>
                            </td>
                        </tr>
                    </table>
                <?php endif; ?>

                <table class="table-common" style="border-top:0px;">
                    <tr>
                        <td style="border-top:0px;"><strong>Nomination Applicable:</strong> <?= $data['nomination_applicable']; ?></td>
                    </tr>
                </table>
                <?php if($data['payable_list']): $payable = $data['payable_list']; ?>
                    <table class="package-table" style="border-top:0px;">
                        <tr>
                            <th>Over Head</th>
                            <th>Applicable</th>
                            <th>Vendor</th>
                            <th>Cost To</th>
                            <th>Req. gram per box</th>
                            <th>Req. Pouch per box</th>
                            <th>Price</th>
                        </tr>
                        <?php foreach($payable as $item): ?>
                            <tr>
                                <td><?= $item['over_head']; ?></td>
                                <td><?= $item['applicable']; ?></td>
                                <td><?= $item['vendor']; ?></td>
                                <td><?= $item['cost_to']; ?></td>
                                <td><?= $item['req_gram_per_box']; ?></td>
                                <td><?= $item['req_pouch_per_box']; ?></td>
                                <td><?= $item['price']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>

                <table class="table-common" style="border-top:0px;">
                    <tr><td style="border-top:0px;"><?= $data['extra_data_1']; ?></td></tr>
                    <tr><td><strong>Packing Comments:</strong> <?= $data['packing_comments']; ?></td></tr>
                    <tr><td><strong>Special Comments:</strong> <?= $data['special_comments']; ?></td></tr>
                </table>
                <div class="footer">
                    <div class="acceptence">I/We hereby accept this purchase order with respect to all specification of order and all terms & conditions overleaf and or on file as signed and agreed.</div>
                    <div class="foot">
                        <div class="foot-left">
                            <div>FOR : SHARMA HOMETEX PRIVATE LIMITED</div>
                            <div>AUTHORISED SIGNATORY</div>
                        </div>
                        <div class="foot-right">
                            <div>FOR : UNISOURCE TRADING (INDIA) PVT. LTD</div>
                            <div>AUTHORISED SIGNATORY</div>
                            <img class="sig1" src="<?= $data['signature1']; ?>" width="250">
                            <img class="sig2" src="<?= $data['signature2']; ?>" width="130">
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </body>
</html>