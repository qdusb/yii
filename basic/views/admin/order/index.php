<?php
use yii\helpers\Url;
use \yii\widgets\LinkPager;
use app\models\Order;
?>
<div class="m-content">

    <div class="m-portlet m-portlet--mobile">
        <?php include 'head.php'?>
        <div class="m-portlet__body">

           <!-- <{include file='adv/order/order_search.html'}>-->


            <form id="form_list" method="post" class="m-datatable m-datatable--default ">
                <table class="table m-table m-table--head-bg-brand  table-hover"  >
                    <thead>
                    <tr>
                        <th width="5%">
                            <label class="m-checkbox  m-checkbox--all m-checkbox--solid m-checkbox--info">
                                <input type="checkbox" class="th-check"><span style="top:-4px"></span>
                            </label>
                        </th>
                        <th width="10%">面单号/转运号</th>
                        <th width="12%">发件人信息</th>
                        <th width="12%">收件人信息</th>
                        <th width="10%">商品</th>
                        <th width="8%">身份证</th>
                        <th width="6%">快递轨迹</th>
                        <th width="12%">操作时间</th>
                        <th width="6%">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($orders as  $order){ ?>
                    <tr>

                        <td>
                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                <input name="ids[]" type="checkbox"  value="<?=$order->id?>" class="td-check"><span style="top:-4px"></span>
                            </label>
                        </td>

                        <td><a data-toggle="m-popover" data-html="true"
                           href="<?=Url::toRoute(['admin/order/update', 'id' => $order->id]);?>" class="m-link"><?=$order->getAttribute('orderNo')?></a><br><?=$order->getAttribute('waybillCode')?></td>
                        <td>
                            <?=$order->frName?><br>
                            <?=$order->frPhone?><br>
                        </td>
                        <td>
                            <?=$order->toName?><br>
                            <?=$order->toPhone?><br>
                            <?=$order->toProvince?><?=$order->toCity?><?=$order->toCounty?><?=$order->toAddress?>
                        </td>
                        <td>
                            <?php foreach($order->products as $product){?>
                              <?=$product->nameEn?>x<?=$product->qty?><br>
                            <?php }?>
                            <br>
                        </td>
                        <td>
                            <?php
                            if($order->idcard){
                                echo $order->idcard->IDNumber;
                            }else{
                                echo '未上传';
                            }
                            ?>
                        </td>
                        <td>
                            <a href="<?=Url::toRoute(['admin/track/index', 'orderId' => $order->id]);?>"> 轨迹【<?=count($order->tracks);?>】</a>
                        </td>
                        <td>

                        </td>

                        <td>
                            <a href="<?=Url::toRoute(['admin/order/update', 'id' => $order->id]);?>"><i class="flaticon-edit-1"></i></a>
                            <a href="<?=Url::toRoute(['admin/order/delete', 'id' => $order->id]);?>" title="Delete"  aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?" data-method="post"><i class="flaticon-delete-1"></i></a>
                        </td>
                    </tr>
                    <?php }?>

                    </tbody>
                </table>
                    <?=LinkPager::widget(['pagination' => $pagination]);?>
            </form>
        </div>
    </div>
</div>
