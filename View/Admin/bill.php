
<div class="col-md-4 summary">
                    <div><h5><b>Thông Tin</b></h5></div>
                    <input type="hidden" name="id_bill" value="<?php echo implode(', ', $id_bill); ?>">
                         <input type="hidden" name="total_name_products" value="<?php echo implode(', ', $total_name); ?>">
                         <input type="hidden" name="total_price" value="<?=$total_cost?>">
                        <p>Tên người nhận</p>
                        <input type="text" name="name_receiver" placeholder="Nhập tên người nhận" required>
                        <p>Số điện thoại</p>
                        <input type="text" name="phone_receiver" required placeholder=" Nhập số điện thoại người nhận">
                        <p>Email</p>
                        <input type="email" name="email_receiver" required placeholder=" Nhập email người nhận">
                        <p>Địa chỉ</p>
                        <input type="text" name ="address_receiver" required placeholder="Nhập địa chỉ">
                        <p>Phương thức thanh toán</p>
                        <select name="method" id="">
                            <option value="Tiền mặt" selected >Tiền mặt</option>
                            <option value="Quét QR">Quét QR</option>
                        </select>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">Tổng</div>
                        <div class="col text-right">$<?=$total_cost?></div>